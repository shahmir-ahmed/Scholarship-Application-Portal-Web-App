<?php

namespace App\Http\Controllers;

use App\Models\ApplicantPersonalDetail;
use App\Models\ApplicantEmploymentDetail;
use App\Models\ApplicantFamilyMember;
use App\Models\ApplicantAssetMonthlyIncome;
use App\Models\ApplicantEducationRecord;
use App\Models\ApplicantFamilyAccomodationExpenditure;
use App\Models\ApplicantFamilyMemberEarning;
use App\Models\ApplicantFamilyMonthlyIncome;
use App\Models\ApplicantFatherDetail;
use App\Models\ApplicantLoan;
use App\Models\ApplicantOtherAccomodationExpenditure;
use App\Models\ApplicantOtherAsset;
use App\Models\ApplicantOtherScholarship;
use App\Models\ApplicantOwnedPlot;
use App\Models\ApplicantWorthAsset;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Auth;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application): RedirectResponse
    {
        //
    }


    // Apply for a scholarship

    // // Return personal details form
    // public function showPersonalDetailsForm($scholarship){

    //     // echo $scholarship;

    //     // return form with the scholarship id for which user is applying
    //     return view('user.scholarship.personalDetails', compact('scholarship'));
    // }

    // // similarly functions for saving applicant/user details for the application
    
    // // save the personal details of applicant in table
    // public function storePersonalDetails(Request $request, $scholarship){

    //     $userId = Auth::id();

    //     ApplicantPersonalDetail::create([
    //         'applicant_name' => $request->applicant_name,
    //         'applicant_age' => $request->applicant_age,
    //         'applicant_gender' => $request->applicant_gender,
    //         'applicant_DOB' => $request->applicant_dob,
    //         'applicant_CNIC' => $request->applicant_CNIC,
    //         'applicant_martial_status' => $request->applicant_martial_status,
    //         'applicant_domicile' => $request->applicant_domicile,
    //         'applicant_present_address' => $request->applicant_present_address,
    //         'applicant_permanant_address' => $request->applicant_permanant_address,
    //         'applicant_reg_no' => $request->applicant_reg_no,
    //         'applicant_degree' => $request->applicant_degree,
    //         'applicant_semester' => $request->applicant_semester,
    //         'applicant_university' => $request->applicant_uni,
    //         'applicant_CGPA' => $request->applicant_CGPA,
    //         'applicant_user_id' => $userId,
    //         'applicant_scholarship_id' => $request->scholarship
    //     ]);

    //     // show next employment details form
    //     return redirect()->route('application.showEmploymentDetailsForm', $scholarship);

    // }







    // // Return employment details form
    // public function showEmploymentDetailsForm($scholarship){

    //     // return form with the scholarship id for which user is applying
    //     return view('user.scholarship.employmentDetails', compact('scholarship'));
    // }

    // // save the employment details of applicant in table (if any)
    // public function storeEmploymentDetails(Request $request, $scholarship){

    //     $userId = Auth::id();

    //     ApplicantEmploymentDetail::create([
    //         'applicant_employment_designation' => $request->applicant_employment_designation,
    //         'applicant_employment_company_name' => $request->applicant_employment_company_name,
    //         'applicant_employment_gross_income' => $request->applicant_employment_gross_income,
    //         'applicant_employment_monthly_income' => $request->applicant_employment_monthly_income,
    //         'applicant_employment_telephone_number' => $request->applicant_employment_telephone_number,
    //         'applicant_employment_email' => $request->applicant_employment_email,
    //         'applicant_employment_user_id' => $userId,
    //         'applicant_employment_scholarship_id' => $request->scholarship,
    //     ]);

    //     // show next employment details form
    //     return redirect()->route('application.showFamilyMemberDetailsForm', $scholarship);

    // }

    





    // // Return employment details form
    // public function showFamilyMemberDetailsForm($scholarship){

    //     // return form with the scholarship id for which user is applying
    //     return view('user.scholarship.familyMemberDetails', compact('scholarship'));
    // }

    // // save the family member details of applicant in from table in DB table
    // public function storeFamilyMemberDetails(Request $request, $scholarship){

    //     // Get form data
    //     $formData = $request->input('formData');

    //     // Connect to database
    //     $data = json_decode($formData, true);

    //     $userId = Auth::id();

    //     foreach ($data as $value) {
    //         // Insert data into database
    //         ApplicantFamilyMember::create([
    //             // 'name' => $value[0],
    //             // 'email' => $value[1],
    //             // 'phone' => $value[2],
                
    //         ]);
    //     }

    //     // Send response
    //     $response = array('success' => true);
    //     return response()->json($response);
        
    //     // show next family members earning details form
    //     return redirect()->route('application.showFamilyMemberDetailsForm', $scholarship);

    // }


}
