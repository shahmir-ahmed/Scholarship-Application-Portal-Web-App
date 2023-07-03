<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // if session is not set
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        // get all the users
        $users = User::all('id', 'name', 'email', 'created_at');

        // how many users
        $count = count($users);

        // serial number for table
        $serial = 1;

        return view('users.index', compact('count', 'serial', 'users'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // if session is not set
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        $userId = $user->id;

        $userDetails = User::where('id', $userId)->get();

        return view ('users.show', compact('userDetails'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(User $user)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, User $user)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // if session is not set
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        // delete the user account
        $user->delete();

        return redirect()->route('users.index');
    }
}
