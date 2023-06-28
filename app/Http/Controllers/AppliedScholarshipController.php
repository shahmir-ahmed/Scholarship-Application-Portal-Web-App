<?php

namespace App\Http\Controllers;

use App\Models\AppliedScholarship;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;

// application data all models
use App\Models\ApplicantPersonalDetail;
use App\Models\ApplicantEmploymentDetail;
use App\Models\ApplicantFamilyMember;
use App\Models\ApplicantFamilyMemberEarning;
use App\Models\ApplicantFamilyMemberCurrentlyStudyingDetail;
use App\Models\ApplicantAssetMonthlyIncome;
use App\Models\ApplicantEducationRecord;
use App\Models\ApplicantFatherDetail;
use App\Models\ApplicantFamilyAccomodationExpenditure;
use App\Models\ApplicantFamilyMonthlyIncome;
use App\Models\ApplicantLoan;
use App\Models\ApplicantOtherAccomodationExpenditure;
use App\Models\ApplicantOtherAsset;
use App\Models\ApplicantOtherScholarship;
use App\Models\ApplicantOwnedPlot;
use App\Models\ApplicantWorthAsset;

use App\Models\User;
use App\Models\Scholarship;


class AppliedScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // retrieve all the applications for the scholarships and return in the index view

        $applications = DB::table('applied_scholarships')
                            ->join('scholarships', 'applied_scholarships.applied_scholarships_scholarship_id', '=', 'scholarships.scholarship_id')
                            ->join('users', 'applied_scholarships.applied_scholarships_user_id', '=', 'users.id')
                            ->select('applied_scholarships.applied_scholarships_id', 'applied_scholarships.applied_scholarships_status', 'applied_scholarships.created_at', 'scholarships.scholarship_name', 'users.name', 'applied_scholarships.applied_scholarships_scholarship_id', 'applied_scholarships.applied_scholarships_user_id')
                            ->get();

        // $applications = DB::table('applied_scholarships')
        //                     ->join('scholarships', 'applied_scholarships.applied_scholarships_scholarship_id', '=', 'scholarships.scholarship_id')
        //                     ->join('users', 'applied_scholarships.applied_scholarships_user_id', '=', 'users.id')
        //                     ->select('applied_scholarships.applied_scholarships_id', 'applied_scholarships.applied_scholarships_status', 'applied_scholarships.created_at', 'scholarships.scholarship_name', 'users.name', 'applied_scholarships.applied_scholarships_scholarship_id', 'applied_scholarships.applied_scholarships_user_id')
        //                     ->orderBy('scholarships.scholarship_name', 'asc') // Sort by scholarship_name in ascending order
        //                     ->get();


        $serial=1;

        $count = count($applications);

                            // dd($applications);
                            // dd($applications[$serial]);

        // dd($applications);

        return view('applications.index', compact('count','serial','applications'));
    }

    /**
     * Display the specified resource.
     */
    public function show($appliedScholarshipId, $userId, $scholarshipId)
    {
        //

        // dd($appliedScholarshipId, $userId, $scholarshipId);

        // get the application status details

        $applicationDetails = AppliedScholarship::where('applied_scholarships_id', $appliedScholarshipId)->select('applied_scholarships_status', 'created_at')->first();

        // dd($applicationDetails->applied_scholarships_status);
        // dd($applicationDetails->created_at->format('d-m-Y H:i:s'));

        $applicationStatus = $applicationDetails->applied_scholarships_status;

        $applicationCreatedAt = $applicationDetails->created_at->format('d-m-Y H:i:s');

        // get the user details
        $userDetails = User::where('id', $userId)->get();

        // scholarship details
        $scholarshipDetails = Scholarship::where('scholarship_id', $scholarshipId)->get();


        // getting the user application data from individual table

        $applicantPersonalDetails = ApplicantPersonalDetail::where('applicant_user_id', $userId)->where('applicant_scholarship_id', $scholarshipId)->get()->toArray();


        $applicantEmploymentDetails = ApplicantEmploymentDetail::where('applicant_employment_user_id', $userId)->where('applicant_employment_scholarship_id', $scholarshipId)->get()->toArray();


        $applicantFamilyMembers = ApplicantFamilyMember::where('applicant_family_members_user_id', $userId)
        ->where('applicant_family_members_scholarship_id', $scholarshipId)
        ->get()->toArray();


        $applicantFamilyMemberEarnings = ApplicantFamilyMemberEarning::where('applicant_family_member_earnings_user_id', $userId)
        ->where('applicant_family_member_earnings_scholarship_id', $scholarshipId)
        ->get()->toArray();


        $applicantFamilyMemberStudyingDetails = ApplicantFamilyMemberCurrentlyStudyingDetail::where('applicant_family_member_currently_studying_detail_user_id', $userId)
        ->where('applicant_family_member_currently_studying_detail_scholarship_id', $scholarshipId)
        ->get()->toArray();            

    
        $applicantFatherDetails = ApplicantFatherDetail::where('applicant_father_details_user_id', $userId)
        ->where('applicant_father_details_scholarship_id', $scholarshipId)
        ->get()->toArray();
            

        $applicantFamilyMonthlyIncomes = ApplicantFamilyMonthlyIncome::where('applicant_family_monthly_incomes_user_id', $userId)
        ->where('applicant_family_monthly_incomes_scholarship_id', $scholarshipId)
        ->get()->toArray();
    

        $applicantAssetMonthlyIncomes = ApplicantAssetMonthlyIncome::where('applicant_asset_monthly_incomes_user_id', $userId)
        ->where('applicant_asset_monthly_incomes_scholarship_id', $scholarshipId)
        ->get()->toArray();

    
        $applicantFamilyAccomodationExpenditures = ApplicantFamilyAccomodationExpenditure::where('applicant_family_accomodation_expenditures_user_id', $userId)
        ->where('applicant_family_accomodation_expenditures_scholarship_id', $scholarshipId)
        ->get()->toArray();


        $applicantOtherAccomodationExpenditures = ApplicantOtherAccomodationExpenditure::where('applicant_other_accomodation_expenditures_user_id', $userId)
        ->where('applicant_other_accomodation_expenditures_scholarship_id', $scholarshipId)
        ->get()->toArray();

        
        $applicantOtherAssets = ApplicantOtherAsset::where('applicant_other_assets_user_id', $userId)
        ->where('applicant_other_assets_scholarship_id', $scholarshipId)
        ->get()->toArray();

    
        $applicantOwnedPlots = ApplicantOwnedPlot::where('applicant_owned_plots_user_id', $userId)
        ->where('applicant_owned_plots_scholarship_id', $scholarshipId)
        ->get()->toArray();

        
        $applicantWorthAssets = ApplicantWorthAsset::where('applicant_worth_assets_user_id', $userId)
        ->where('applicant_worth_assets_scholarship_id', $scholarshipId)
        ->get()->toArray();


        $applicantLoans = ApplicantLoan::where('applicant_loans_user_id', $userId)
        ->where('applicant_loans_scholarship_id', $scholarshipId)
        ->get()->toArray();
        
        
        $applicantEducationRecords = ApplicantEducationRecord::where('applicant_education_records_user_id', $userId)
        ->where('applicant_education_records_scholarship_id', $scholarshipId)
        ->get()->toArray();

        
        $applicantOtherScholarshipDetails = ApplicantOtherScholarship::where('applicant_other_scholarships_user_id', $userId)
        ->where('applicant_other_scholarships_scholarship_id', $scholarshipId)
        ->get()->toArray();


        // dd(
        //     compact(
        //         'applicantPersonalDetails',
        //         'applicantEmploymentDetails',
        //         'applicantFamilyMembers',
        //         'applicantFamilyMemberEarnings',
        //         'applicantFamilyMemberStudyingDetails',
        //         'applicantFatherDetails',
        //         'applicantFamilyMonthlyIncomes',
        //         'applicantAssetMonthlyIncomes',
        //         'applicantFamilyAccomodationExpenditures',
        //         'applicantOtherAccomodationExpenditures',
        //         'applicantOtherAssets',
        //         'applicantOwnedPlots',
        //         'applicantWorthAssets',
        //         'applicantLoans',
        //         'applicantEducationRecords',
        //         'applicantOtherScholarshipDetails',
        //         'applicantOtherScholarshipDetails',
        //         )
        //     );

        return view('applications.show', compact(
                    'scholarshipDetails',
                    'userDetails',
                    'applicationStatus',
                    'applicationCreatedAt',
                    'applicantPersonalDetails',
                    'applicantEmploymentDetails',
                    'applicantFamilyMembers',
                    'applicantFamilyMemberEarnings',
                    'applicantFamilyMemberStudyingDetails',
                    'applicantFatherDetails',
                    'applicantFamilyMonthlyIncomes',
                    'applicantAssetMonthlyIncomes',
                    'applicantFamilyAccomodationExpenditures',
                    'applicantOtherAccomodationExpenditures',
                    'applicantOtherAssets',
                    'applicantOwnedPlots',
                    'applicantWorthAssets',
                    'applicantLoans',
                    'applicantEducationRecords',
                    'applicantOtherScholarshipDetails',
        ));

    }

    /**
     * Edit the specified application status.
     */
    public function edit($appliedScholarshipId)
    {
        // get the scholarship status
        $applicationStatus = AppliedScholarship::where('applied_scholarships_id', $appliedScholarshipId)->get('applied_scholarships_status');

        // list of status options
        $statusList = ['Submitted', 'Verified', 'Disapproved', 'Selected', 'Not Selected', 'Scholarship granted'];
        
        // return the view to edit the status
        return view('applications.edit', compact('applicationStatus', 'appliedScholarshipId', 'statusList'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $appliedScholarshipId)
    {

        // update the application status

        $newStatus = $request->newApplicationStatus;

        AppliedScholarship::where('applied_scholarships_id', $appliedScholarshipId)->update([
            'applied_scholarships_status' => $newStatus
        ]);

        return redirect()->route('applications.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($appliedScholarshipId, $userId, $scholarshipId)
    {
        //

        // using the user and scholarship id for the applied scholarship from the applied scholarship table we will delete the individual application record from the tables

        // dd($appliedScholarshipId, $scholarshipId, $userId);

        // using user anscholarship id first delete application form data then the applied scholarship table record using scholarship id

        // delete application form data from individual tables

        ApplicantPersonalDetail::where('applicant_user_id', $userId)->where('applicant_scholarship_id', $scholarshipId)->delete();


        ApplicantEmploymentDetail::where('applicant_employment_user_id', $userId)->where('applicant_employment_scholarship_id', $scholarshipId)->delete();


        ApplicantFamilyMember::where('applicant_family_members_user_id', $userId)
        ->where('applicant_family_members_scholarship_id', $scholarshipId)
        ->delete();


        ApplicantFamilyMemberEarning::where('applicant_family_member_earnings_user_id', $userId)
        ->where('applicant_family_member_earnings_scholarship_id', $scholarshipId)
        ->delete();


        ApplicantFamilyMemberCurrentlyStudyingDetail::where('applicant_family_member_currently_studying_detail_user_id', $userId)
        ->where('applicant_family_member_currently_studying_detail_scholarship_id', $scholarshipId)
        ->delete();            

    
        ApplicantFatherDetail::where('applicant_father_details_user_id', $userId)
        ->where('applicant_father_details_scholarship_id', $scholarshipId)
        ->delete();
            

        ApplicantFamilyMonthlyIncome::where('applicant_family_monthly_incomes_user_id', $userId)
        ->where('applicant_family_monthly_incomes_scholarship_id', $scholarshipId)
        ->delete();
    

        ApplicantAssetMonthlyIncome::where('applicant_asset_monthly_incomes_user_id', $userId)
        ->where('applicant_asset_monthly_incomes_scholarship_id', $scholarshipId)
        ->delete();

    
        ApplicantFamilyAccomodationExpenditure::where('applicant_family_accomodation_expenditures_user_id', $userId)
        ->where('applicant_family_accomodation_expenditures_scholarship_id', $scholarshipId)
        ->delete();


        ApplicantOtherAccomodationExpenditure::where('applicant_other_accomodation_expenditures_user_id', $userId)
        ->where('applicant_other_accomodation_expenditures_scholarship_id', $scholarshipId)
        ->delete();

        
        ApplicantOtherAsset::where('applicant_other_assets_user_id', $userId)
        ->where('applicant_other_assets_scholarship_id', $scholarshipId)
        ->delete();

    
        ApplicantOwnedPlot::where('applicant_owned_plots_user_id', $userId)
        ->where('applicant_owned_plots_scholarship_id', $scholarshipId)
        ->delete();

        
        ApplicantWorthAsset::where('applicant_worth_assets_user_id', $userId)
        ->where('applicant_worth_assets_scholarship_id', $scholarshipId)
        ->delete();


        ApplicantLoan::where('applicant_loans_user_id', $userId)
        ->where('applicant_loans_scholarship_id', $scholarshipId)
        ->delete();
        
        
        ApplicantEducationRecord::where('applicant_education_records_user_id', $userId)
        ->where('applicant_education_records_scholarship_id', $scholarshipId)
        ->delete();

        
        ApplicantOtherScholarship::where('applicant_other_scholarships_user_id', $userId)
        ->where('applicant_other_scholarships_scholarship_id', $scholarshipId)
        ->delete();

        // now delete the applied scholarship record
        DB::table('applied_scholarships')->where('applied_scholarships_id', $appliedScholarshipId)->delete();

        // show all applications updated table
        return redirect()->route('applications.index');
    }

    

}
