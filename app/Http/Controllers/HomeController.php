<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Scholarship;
use App\Models\News;
use App\Models\Event;
use Auth;
use App\Models\Subscription;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // returning all scholarships to homepage
        $scholarships = Scholarship::all();

        // returning all news to homepage
        $news = News::all();

        // returning all events to homepage
        $events = Event::all();

        $subscribed = NULL;

        // if user is logged in
        if(Auth::check()){

            // check if user has already subscribed or not in a month

            $userId = Auth::user()->id;

            // echo $userId;

            $subscriptionDate = Subscription::where('subscription_user_id', $userId)->get('created_at');

            $datediff = NULL;

            $date = NULL;

            $rounded = NULL;

            // var_dump($subscriptionDate);

            foreach($subscriptionDate as $data){
                $date = $data->created_at;
            }


            if($date!=NULL){

                $now = time(); // or your date as well
                // echo $now;
                $your_date = strtotime($date);
                // echo $your_date;
                $datediff = $now - $your_date;
                
                $rounded = round($datediff / (60 * 60 * 24));

                // echo $rounded;

                // if subscription days are more than 30 (means subscription is old) or no subscription is purchased --> means user has not subscribed
                if($rounded>30 || $date==NULL){
                    $subscribed = false;
                }
                else{
                    $subscribed = true;
                }
            }
        }

        // echo "hello";   

        return view('home', compact('scholarships', 'news', 'events', 'subscribed'));
    
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function adminHome()
    // {
    //     return view('admin.home');
    // }
}
