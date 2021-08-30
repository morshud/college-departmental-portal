<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\Notification;
use App\Notifications\EventNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.event.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $events = new Event();
        $events->type = $request->type;
        $events->title = $request->title;
        $events->description = $request->description;
        $save = $events->save();
        if ($save) {
            Auth::guard('admin')->user()->notify(new EventNotification($events));
            return redirect()->back()->with('success', 'Event has been add successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['event_data'] = Event::findOrFail($id);
        return view('lecturer.news.event_modal', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['event_data'] = Event::findOrFail($id);
        return view('admin.event.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $events = Event::findOrFail($id);
        $events->type = $request->type;
        $events->title = $request->title;
        $events->description = $request->description;
        $save = $events->save();
        if ($save) {
            return redirect()->back()->with('success', 'Event has been updated successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
