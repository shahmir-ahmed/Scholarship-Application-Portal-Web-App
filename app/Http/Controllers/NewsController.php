<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;
use Mail;
use App\Mail\NewsMail;

class NewsController extends Controller
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

        $News = News::all();

        $count = count($News);

        return view('news.index', compact('count', 'serial', 'News'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        News::create([
            'news_name' => $request->newsName,
            'news_desc' => $request->newsDesc,
        ]);

        // send email to subscribed users using smtp of new news

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
                    
                    // preparing mail
                    $body = "Hello ".$userName."!";
        
                    $mailData = [
                        'title' => 'Subject: New News Alert!',
                        'body' => $body,
                        'newsName' => $request->newsName,
                    ];
        
                    Mail::to($userEmail)->send(new NewsMail($mailData));

                }
                
            }

            
        }

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        // return view with details of specific news
        $newsID = $news->news_id;

        $news = News::where('news_id', $newsID)->get();

        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        // return selected news to update in view

        $newsID = $news->news_id;

        $news = News::where('news_id', $newsID)->get();

        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        $news->update([
            'news_name' => $request->newsName,
            'news_desc' => $request->newsDesc,
        ]);

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }
        
        $news->delete();

        return redirect()->route('news.index');
    }
}
