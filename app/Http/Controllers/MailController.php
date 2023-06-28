<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SubscriberMail;

class MailController extends Controller
{
    public function index(Request $request)
    {
        // first check if login user entering any email has already purchased subscription or not
        // updated: no need to check beacuse checking in homecontroller then displaying subscribe modal

        $userName = $request->userName;

        $userEmail = $request->userEmail;

        $body = 'Congratulations '.$userName.'!';

        $mailData = [
            'title' => 'Mail from Scholarship Website',
            'body' => $body,
        ];

        Mail::to($userEmail)->send(new SubscriberMail($mailData));

        // dd('Email sent successfully.');

        return redirect()->route('home');
    }
}

?>