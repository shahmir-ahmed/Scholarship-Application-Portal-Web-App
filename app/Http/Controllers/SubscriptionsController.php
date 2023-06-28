<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubscriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        // using joins get all the subscribed users and pass to the view
        // $subscribedUsers = Subscription::where('')
        
        return view('subscriptions.index', compact('subscribedUsers'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create(): Response
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request): RedirectResponse
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function show(Subscription $subscription)
    {
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        $subscriptionId = $subscription->subscription_id;

        $Subscription = Subscription::where('subscription_id', $subscriptionId)->get();

        return view('subscriptions.show', compact('Subscription'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Subscription $subscription): Response
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Subscription $subscription): RedirectResponse
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscription $subscription): RedirectResponse
    {
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        // deleting means removing user subscription
        $subscription->delete();

        return redirect()->route('subscriptions.index');
    }

}
