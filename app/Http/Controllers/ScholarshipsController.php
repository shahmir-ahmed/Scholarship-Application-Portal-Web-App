<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use App\Models\AppliedScholarship;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;

use Auth;
use App\Models\Subscription;
use App\Models\User;

// for mailing
use Mail;
use App\Mail\ScholarshipMail;
use Carbon\Carbon;

class ScholarshipsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // if session not exists
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        $serial = 1;

        $scholarships = Scholarship::all();

        $count = count($scholarships);

        return view('scholarships.index', compact('count', 'serial', 'scholarships'));
    }

    /**
     * Sh
     * ow the form for creating a new resource.
     */
    public function create()
    {
        //
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        return view('scholarships.create');
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

        Scholarship::create([
            'scholarship_name' => $request->scholarshipName,
            'scholarship_desc' => $request->scholarshipDesc,
            'scholarship_eligibility_criteria' => $request->scholarshipEligibilityCriteria,
            'scholarship_last_date' => $request->scholarshipDueDate,
        ]);

        // send email to subscribed users using smtp of new scholarship

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

                    // changing date format in email
                    $date = new Carbon($request->scholarshipDueDate);

                    $formattedDate = $date->format('d-M-Y');

                    $scholarshipDeadline = $formattedDate;
                    
                    
                    // preparing mail
                    $body = "Hello ".$userName."!";
        
                    $mailData = [
                        'title' => 'Subject: New Scholarship Alert!',
                        'body' => $body,
                        'scholarshipName' => $request->scholarshipName,
                        'scholarshipDeadline' => $scholarshipDeadline,
                    ];
        
                    Mail::to($userEmail)->send(new ScholarshipMail($mailData));

                }
                
            }

            
        }

        return redirect()->route('scholarships.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Scholarship $scholarship)
    {

        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        // return view with details of specific scholarship
        $scholarshipID = $scholarship->scholarship_id;

        $Scholarship = Scholarship::where('scholarship_id', $scholarshipID)->get();

        return view('scholarships.show', compact('Scholarship'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Scholarship $scholarship)
    {

        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        // return selected scholarship to update in view

        $scholarshipID = $scholarship->scholarship_id;

        $Scholarship = Scholarship::where('scholarship_id', $scholarshipID)->get();

        return view('scholarships.edit', compact('Scholarship'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Scholarship $scholarship)
    {
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        // update the scholarship record in DB
        $scholarship->update([
            'scholarship_name' => $request->scholarshipName,
            'scholarship_desc' => $request->scholarshipDesc,
            'scholarship_eligibility_criteria' => $request->scholarshipEligibilityCriteria,
            'scholarship_last_date' => $request->scholarshipDueDate,
        ]);

        return redirect()->route('scholarships.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Scholarship $scholarship)
    {
        if(Session::get('admin')==NULL){
            return redirect()->route('admin.login');
        }

        // delete the scholarship from DB
        $scholarship->delete();

        return redirect()->route('scholarships.index');
    }

    // user to view a scholarship
    public function view($scholarshipId){

        // save the scholarship id passed from the route to the function which was in the url
        $scholarshipID = $scholarshipId;

        // find the scholarship using the id 
        $Scholarship = Scholarship::where('scholarship_id', $scholarshipID)->get();

        // check if user has applied for the schoalrship already by finding the record for the scholarship and user and passing to the view to show the apply button or not
        $applied = AppliedScholarship::where('applied_scholarships_scholarship_id', $scholarshipID)->where('applied_scholarships_user_id', Auth::user()->id)->get();

        // var_dump($applied);
        // check if record for the scholarship exists
        if($applied = AppliedScholarship::where('applied_scholarships_scholarship_id', $scholarshipID)->where('applied_scholarships_user_id', Auth::user()->id)->exists()){
            // do nothing
            // i.e. send same applied array
        }
        else{
            // make applied as null
            $applied=NULL;

        }

        // testing
        // foreach($applied as $appli){
        //     var_dump($appli);
        // dd($appli);
        // }

        // return the view to show the scholarship details with the scholarship object
        return view('user.scholarship.view', compact('Scholarship', 'applied'));

    }

}
