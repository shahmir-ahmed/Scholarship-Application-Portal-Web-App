<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use Mail;
use App\Mail\SubscriberMail;

use App\Models\Subscription;

use Date;

class StripeController extends Controller
{
    // public function index()
    // {
    //     return view('home');
    // }

    public function checkout()
    {

        // // check if user has already subscribed or not in a month

        // $userId = Auth::user()->id;

        // $subscriptionDate = Subscription::where('subscription_user_id', 4)->get('created_at');

        // $datediff = NULL;

        // $date = nULL;

        // // var_dump($subscriptionDate);

        // foreach($subscriptionDate as $data){
        //     $date = $data->created_at;
        // }


        // if($date!=NULL){

        //     $now = time(); // or your date as well
        //     // echo $now;
        //     $your_date = strtotime($date);
        //     // echo $your_date;
        //     $datediff = $now - $your_date;
            
        //     $rounded = round($datediff / (60 * 60 * 24));

        //     // echo $rounded;
        // }

        // // if subscription days are more than 30 (means subscription is old) or no subscription is purchased 
        // if($datediff>30 || $date==NULL){

            
                \Stripe\Stripe::setApiKey(config('stripe.sk'));
                
                $session = \Stripe\Checkout\Session::create([
                    'line_items'  => [
                        [
                            'price_data' => [
                                'currency'     => 'usd',
                                'product_data' => [
                                'name' => 'Monthly Subscription',
                            ],
                            'unit_amount'  => 300+99,
                        ],
                        'quantity'   => 1,
                    ],
                ],
                'mode'        => 'payment',
                'success_url' => route('success'),
                'cancel_url'  => route('home'),
            ]);
            
            return redirect()->away($session->url);
        // }
        // else{
        //     return redirect()->route('home');
        // }
    }
    
    public function success()
    {
        // return view('home');

        $userName = Auth::user()->name;
        
        $userEmail = Auth::user()->email;
        
        $userId = Auth::user()->id;

        $body = 'Congratulations '.$userName.'!';

        $mailData = [
            'title' => 'Mail from Scholarship Website',
            'body' => $body,
        ];

        // add a new subscription
        Subscription::create([
            'subscription_user_id' => $userId
        ]);

        Mail::to($userEmail)->send(new SubscriberMail($mailData));

        // dd('Email sent successfully.');

        return redirect()->route('home');
    }
}
