<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Admin;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    // public function index(){
    //     return view('admin.home');
    // }

    // // function to verify login of admin
    // public function login(Request $request){

    //     $admin = Admin::whereEmailAndPassword($request->email, $request->password)->get();

    //     if($admin==NULL){
    //         return redirect()->route('admin.login'); 
    //     }
    //     else{
    //         return redirect()->route('admin.home');
    //     }
    // }

    // public function register(){

    // }

    public function index()
    {
        return view('admin.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        // $credentials = $request->only('email', 'password');

        $admin = Admin::whereEmailAndPassword($request->email, $request->password)->get();
        // $admin = Admin::where('email', 'preinger@example.org')->where('password', md5('password'))->first();

        // var_dump($admin);

        // echo(sizeof($admin));

        if (sizeof($admin)>0) {
            
            Session::put('admin', $request->email);

            // return view('admin.home');

            return redirect()->route('admin.home');
        }
  
        return redirect()->route('admin.login')->withSuccess('Login details are not valid');
    }

    // public function registration()
    // {
    //     return view('admin.registration');
    // }
      
    // public function customRegistration(Request $request)
    // {  
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6',
    //     ]);
           
    //     $data = $request->all();
    //     $check = $this->create($data);
         
    //     return redirect("dashboard")->withSuccess('You have signed-in');
    // }

    // public function create(array $data)
    // {
    //   return User::create([
    //     'name' => $data['name'],
    //     'email' => $data['email'],
    //     'password' => Hash::make($data['password'])
    //   ]);
    // }    
    
    public function dashboard()
    {
        if(Session::get('admin')!=NULL){
            return view('admin.home');
            // return redirect()->route('admin.home');
        }
  
        return redirect()->route("admin.login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        // Auth::logout();
  
        return redirect()->route('admin.login');
    }

}
