<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Paystack;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {
        try {
            $request->reference = Paystack::genTranxRef();
            return Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback(Request $request)
    {
        $charge = Fee::where('type', 'Departmental Fee')->first();
        $paymentDetails = Paystack::getPaymentData();
        $payment =json_decode(json_encode($paymentDetails), true);
        $pay = new Payment();
        $pay->reference = $payment['data']['reference'];
        $pay->student_id = Auth::guard('student')->user()->id;
        $pay->status = $payment['status'];
        $pay->amount = number_format($payment['data']['amount'] / 100 - $charge->charges, 2);
        $pay->type = 'Departmental Fee';
        $pay->charges = number_format($payment['data']['amount'] / $charge->amount, 2);
        if($pay->save()){
            return Redirect::back()->withMessage(['msg' => 'Your payment is successful. Please refresh the page.', 'type' => 'success']);
        }
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

    public function invoice(){
        $payment = Payment::all()->first();
        return view('student.invoice', compact('payment'));
    }
}
