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

use App\Models\AppliedScholarship;
use App\Models\Scholarship;
use App\Models\Subscription;
use App\Models\User;

use Carbon\Carbon;

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

            // get the active applications
            $activeApplications = AppliedScholarship::where('applied_scholarships_status', 'Submitted')
            ->orWhere('applied_scholarships_status', 'Verified')
            ->orWhere('applied_scholarships_status', 'Selected')
            ->get();

            $activeApplicationsCount = count($activeApplications);
            
            // get completed applications count
            $completedApplications = AppliedScholarship::where('applied_scholarships_status', 'Not Selected')
            ->orWhere('applied_scholarships_status', 'Disapproved')
            ->orWhere('applied_scholarships_status', 'Scholarship granted')
            ->get();

            $completedApplicationsCount = count($completedApplications);

            // adding both to get the total scholarships count
            $totalScholarships = $activeApplicationsCount + $completedApplicationsCount;
            
            // calulating the completed scholarships %age out of total
            $completedApplicationsPercentage = ($completedApplicationsCount/$totalScholarships) * 100;


            // Subscriptions card
            // get the subscriptions in current month

            $currentMonth = Carbon::now()->format('F');

            $currentMonthSubscriptions = Subscription::whereMonth('created_at', Carbon::now()->month)->get();

            // count the subscriptions to multiply with 3.99 to calculate the earning
            $currentMonthSubscriptionsCount = count($currentMonthSubscriptions);

            $earningsThisMonth = $currentMonthSubscriptionsCount * 3.99;
            
            
            // Subscriptions progress card
            // get all the subscriptions

            $subscriptions = Subscription::all();

            // count the subscriptions to multiply with 3.99 to calculate the earning
            $subscriptionsCount = count($subscriptions);

            $totalEarnings = $subscriptionsCount * 3.99;

            
            // Total users card
            $users = User::all();

            $usersCount = count($users);

            return view('admin.home', compact('activeApplicationsCount', 'completedApplicationsCount', 'completedApplicationsPercentage', 'earningsThisMonth', 'currentMonth', 'totalEarnings', 'usersCount'));
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
