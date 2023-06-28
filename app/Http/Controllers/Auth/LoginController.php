<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

        // check user has already subscribed or not to display the subscription modal card or not

        
    }

    
    /**
     * Log the user out of the application.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request.
     *
     * @return \Illuminate\Http\Response Returns the response.
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect('/home');
    }

    // login verification for admin
    // public function login(Request $request)
    // {   
    //     // echo('<script>console.log("login")</script>');

    //     $input = $request->all();
   
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);
   
    //     if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
    //     {
    //         if (auth()->user()->is_admin == 1) {
    //         echo('here');

    //             return redirect()->route('admin.home');
    //         }
    //         // else{
    //         // echo('here');

    //         //     return redirect()->route('admin.login');
    //         // }
    //     }else{
    //         echo('here');
    //         return redirect()->route('admin.login')
    //             ->with('error','Email-Address And Password Are Wrong.');
    //     }
    // }

    // // logout for admin
    // public function logout(){
    //     Session::flush();
        
    //     Auth::logout();

    //     return redirect('admin.login');
    // }
}
