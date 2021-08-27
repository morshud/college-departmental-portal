<form class="form-default" role="form" action="{{ route('fee.update', $fee_data->id) }}" method="POST">
            @csrf

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Type:</label>
                        <input type="text" id="" class="form-control" value="{{$fee_data->type}}" name="type" placeholder="Fee Type" required/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Amount:</label>
                        <input type="text" id="" class="form-control" value="{{$fee_data->amount}}" name="amount" placeholder="Fee Amount" required/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Charges:</label>
                        <input type="text" id="" class="form-control" value="{{$fee_data->charges}}" name="charges" placeholder="Fee Charges" required/>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                <button type="submit"
                    class="btn btn-primary waves-effect waves-light">Update</button>
                </div>
        </form>

