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

    // session variable
    protected $session;

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

        // User already logged in when control comes here
        // Trying to open page using link so check if user has already subscribed or not
        // Edit: user cannot directly open the url and access this function beacuse of post request but if in case access this function

        // check if user has already subscribed or not in a month

        $userId = Auth::user()->id;

        $subscriptionDate = Subscription::where('subscription_user_id', $userId)->get('created_at');

        $datediff = NULL;

        $date = NULL;

        $rounded = NULL;

        foreach($subscriptionDate as $data){
            $date = $data->created_at;
        }

        // user has subscription record
        if($date!=NULL){

            $now = time(); // or your date as well

            $your_date = strtotime($date);

            $datediff = $now - $your_date;
            
            $rounded = round($datediff / (60 * 60 * 24));

            // if subscription days are more than 30 (means subscription is old)
            if($rounded>30){
                \Stripe\Stripe::setApiKey(config('stripe.sk'));
                    
                    $this->session = \Stripe\Checkout\Session::create([
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
                    'success_url' => route('success$session->id'),
                    'cancel_url'  => route('home'),
                ]);
                
                return redirect()->away($this->session->url);
            }
            // Days passed since subscription purchased are less than 30 (means user has active subscription)
            else{
                return redirect()->route('home');
            }
        }
        // no subscription is purchased --> means user has not subscribed
        // if user has no record of subscription then user can also purchase subscription 
        else{
                \Stripe\Stripe::setApiKey(config('stripe.sk'));
                    
                    $this->session = \Stripe\Checkout\Session::create([
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
                
                return redirect()->away($this->session->url);
        }

        // // if subscription days are more than 30 (means subscription is old) or no subscription is purchased 
        // if($datediff>30 || $date==NULL){

            /*
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
            */
        // }
        // else{
        //     return redirect()->route('home');
        // }
    }
    
    public function success()
    {
        // return view('home');

        // User already logged in when control comes here but after checkout page
        // Trying to open page using link so check if session is not empty then user has not directly opned url otherwise directly opened

        if(!empty($this->session)){

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
    
            // show success message
            
    
            // dd('Email sent successfully.');
    
            return redirect()->route('home');
        }
        // block access
        else{
            return redirect()->route('home');
        }
        
    }
}
