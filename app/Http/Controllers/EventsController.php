<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;
use Mail;

use App\Mail\EventMail;

use Carbon\Carbon;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // if session not exists
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        $serial = 1;

        $events = Event::all();

        $count = count($events);

        return view('events.index', compact('count', 'serial', 'events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        // return view of form to create new event record
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        // store the data of form submitted from create view to the database
        Event::create([
            'event_name' => $request->eventName,
            'event_location' => $request->eventLocation,
            'event_date' => $request->eventDate,
            'event_time' => $request->eventTime,
            'event_desc' => $request->eventDesc,
        ]);

        // send email to subscribed users using smtp of new event

        $subscribedUsers = Subscription::all();

        $datediff = NULL;

        $date = NULL;

        // var_dump($subscriptionDate);

        $now = time(); // today time

        // for every subscribed user
        foreach($subscribedUsers as $data){

            $date = $data->created_at;

            // if there is data in subscription table
            if($date!=NULL){

                $your_date = strtotime($date);
    
                $datediff = $now - $your_date;
                        
                $rounded = round($datediff / (60 * 60 * 24));

                // user subscription is not old
                if($rounded<30){

                    // getting user id to find the subscribed user
                    $userId = $data->subscription_user_id;
    
                    $user = User::where('id', $userId)->get();

                    foreach($user as $details){
                        
                        $userName = $details->name;

                        $userEmail = $details->email;

                    }

                    // changing date format in email
                    $date = new Carbon($request->eventDate);

                    $formattedDate = $date->format('d-M-Y');

                    $eventDate = $formattedDate;
                    
                    // preparing mail
                    $body = "Hello ".$userName."!";
        
                    $mailData = [
                        'title' => 'Subject: New Event Alert!',
                        'body' => $body,
                        'eventDate' => $eventDate,
                        'eventTime' => $request->eventTime,
                        'eventLocation' => $request->eventLocation,
                    ];
        
                    Mail::to($userEmail)->send(new EventMail($mailData));

                }
                
            }

            
        }

        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        // show the details of event of specific event clicked in show view

        $eventID = $event->event_id;

        $Event = Event::where('event_id', $eventID)->get();

        return view('events.show', compact('Event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        // form to edit event details
        $Event = Event::where('event_id', $event->event_id)->get();

        return view('events.edit', compact('Event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        // update the new form data of event from edit view form in database
        $event->update([
            'event_name' => $request->eventName,
            'event_location' => $request->eventLocation,
            'event_date' => $request->eventDate,
            'event_time' => $request->eventTime,
            'event_desc' => $request->eventDesc,
        ]);

        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        // delete the event from the database
        $event->delete();

        return redirect()->route('events.index');
    }
}
