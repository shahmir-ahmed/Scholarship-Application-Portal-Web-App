<?php

namespace App\Http\Livewire;

use Livewire\Component;

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
use App\Models\AppliedScholarship;

use App\Models\Scholarship;
use Auth;

use Carbon\Carbon;

class MultiStepForm extends Component
{

    // step 1 data
    public $applicant_uni;
    public $applicant_degree;
    public $applicant_reg_no;
    public $applicant_name;
    public $applicant_semester;
    public $applicant_cgpa;
    public $applicant_gender;
    public $applicant_dob;
    public $applicant_cnic;
    public $applicant_martial_status;
    public $applicant_age;
    public $applicant_domicile;
    public $applicant_present_address;
    public $applicant_permanant_address;

    // step 2 data
    public $applicant_employment_designation;
    public $applicant_employment_company_name;
    public $applicant_employment_gross_income;
    public $applicant_employment_monthly_income;
    public $applicant_employment_telephone_number;
    public $applicant_employment_email;

    // step 3 data
    // public $applicant_family_members_name = [];
    // public $applicant_family_members_relation = [];
    // public $applicant_family_members_martial_status = [];
    // public $applicant_family_members_remarks = [];
    public $applicant_family_members = []; // array of family members

    // step 4 data
    public $applicant_family_members_earnings = [];

    // step 5 data
    public $applicant_family_members_currently_studying = [];

    // step 6 data
    public $applicant_father_details_name;
    public $applicant_father_details_cnic;
    public $applicant_father_details_vital_status;
    public $applicant_father_details_job_status;
    public $applicant_father_details_martial_status;
    public $applicant_father_details_company_name;
    public $applicant_father_details_mobile_number;
    public $applicant_father_details_occupation;
    public $applicant_father_details_nts;
    public $applicant_father_details_designation_grade;
    public $applicant_father_details_gross_income;
    public $applicant_father_details_monthly_income;
    public $applicant_father_details_applicant_name;
    public $applicant_father_details_applicant_relation;
    public $applicant_father_details_applicant_occupation_designation;
    public $applicant_father_details_applicant_monthly_financial_support;

    // step 7 data
    public $applicant_family_monthly_income = [];

    // step 8 data
    public $applicant_asset_monthly_incomes = [];

    // step 9 data
    public $applicant_family_accomodation_expenditures_type;
    public $applicant_family_accomodation_expenditures_status;
    public $applicant_family_accomodation_expenditures_rent_payment_type;
    public $applicant_family_accomodation_expenditures_plot_size;
    public $applicant_family_accomodation_expenditures_address;
    public $applicant_family_accomodation_expenditures_total_bed_rooms;
    public $applicant_family_accomodation_expenditures_total_acs;
    public $applicant_family_accomodation_expenditures_monthly_rent;
    public $applicant_family_accomodation_expenditures_annual_rent_expense;
    public $applicant_family_accomodation_expenditures_total_rent_expense;

    // step 10 data
    public $applicant_other_accomodation_expenditures_telephone;
    public $applicant_other_accomodation_expenditures_electricity;
    public $applicant_other_accomodation_expenditures_gas;
    public $applicant_other_accomodation_expenditures_water;
    public $applicant_other_accomodation_expenditures_education;
    public $applicant_other_accomodation_expenditures_accomodation;
    public $applicant_other_accomodation_expenditures_utilities;
    public $applicant_other_accomodation_expenditures_medical;
    public $applicant_other_accomodation_expenditures_misc;

    // step 11 data
    public $applicant_other_assets = [];

    // step 12 data
    public $applicant_owned_plots = [];

    // step 13 data
    public $applicant_worth_assets = [];

    // step 14 data
    public $applicant_loans_loan_one_reason;
    public $applicant_loans_loan_two_reason;
    public $applicant_loans_loan_three_reason;

    // step 15 data
    public $applicant_education_records = [];

    // step 16 data
    public $applicant_other_scholarships_institution_name;
    public $applicant_other_scholarships_name;
    public $applicant_other_scholarships_total_amount;
    public $applicant_other_scholarships_total_period;
    public $applicant_other_scholarships_class_level_granted;
    public $applicant_other_scholarships_purpose;


    // form steps count
    public $totalSteps = 16; // total steps in form 16
    public $currentStep = 1; // 1 set to default

    // progress bar variable
    public $progressValue = 0;

    // scholarship id variale to pass to the multistep form
    public $scholarshipID = 0;


    // set current step to 1
    public function mount($scholarshipId){
        $this->currentStep = 1;

        // saviing the scholarhip id passed from application view mount metjod is called when the livewire component is active and triggered from application view
        $this->scholarshipID = $scholarshipId;
    }

    // application form layout display
    public function apply($scholarshipId){

        // echo $scholarshipId;
        
        // saving the scholarship id in a public varaible so that multi-step-form view can access it  when submit button is clicked
        // $this->ID = $scholarshipId;
        // echo $this->scholarshipId;

        // dd('here');

        // scholarship name for title of application form
        $scholarshipName = Scholarship::where('scholarship_id', $scholarshipId)->get();


        // Code because of browser back button when application is submitted the back button opens the previous page again and the form reloads from here so check that user has applied to this scholarship or not already if yes then redirect the user to home page

        // based on the scholarsjhip id and the user id checking from applied scholarhsips table that user has already applied or not
        // $applicationDetails = AppliedScholarship::where('applied_scholarships_scholarship_id', $scholarshipId)
        // ->where('applied_scholarships_user_id', Auth::user()->id)->get();
        $applicationDetails = AppliedScholarship::where('applied_scholarships_scholarship_id', $scholarshipId)
        ->where('applied_scholarships_user_id', Auth::user()->id)->exists();

        // dd($scholarshipId, Auth::user()->id);

        // dd(empty($applicationDetails)); // error checking on empty, it is empty but it is showing false on empty because of some variables in it
        
        // if user has already applied
        // if(!empty($applicationDetails)){
            // dd($applicationDetails);
            // redirect to home
            // return redirect()->route('home');
        // }

        // if user has already applied
        if($applicationDetails){
            // redirect to home
            return redirect()->route('home');
        }

        
        // Checking on direct url enter in browser if scholarship has expired then user cannot apply
        foreach($scholarshipName as $details){
            $scholarshipLastDate = $details->scholarship_last_date;
        }

        // if deadline has passed
        if($scholarshipLastDate < Carbon::now()){
            // redirect to home page
            return redirect()->route('home');
        }


        // returning the application view with the progress value and the scholarship id
        // return view('user.scholarship.application', ['progressValue' => $this->progressValue, 'scholarshipId' => $scholarshipId]);
        // return view('user.scholarship.application');
        return view('user.scholarship.application', compact('scholarshipId', 'scholarshipName'));

    }

    // render the livewire form view
    public function render()
    {
        // echo $scholarshipId;
        // echo $this->scholarshipId;

        // return view('livewire.multi-step-form', ['scholarshipId' => $this->scholarshipId]);
        return view('livewire.multi-step-form');
    }

    // increase form step count
    public function increaseStep(){
        // dd('increaseStep() method called!');
        // dd($this->currentStep);

        $this->resetErrorBag();
        $this->emit('scrollToTop');
        $this->validateData();
        // dd('here');

        // Here when current form validated has no error 
        // And on 16 step i want to submit the form if the form is valid
         if($this->currentStep==16){
            // dd($this);
            $this->submitForm();
         }

         
         // Step 3 form family members earinings info needs to be filled to move to next form otherwise dont
        if($this->currentStep==3){
           // if there is no record entered of family memeber
           if(empty($this->applicant_family_members)){

                // set alert message in session
               $this->showAlert('Please enter family member details!');

               return;
           }
           else{
                // destroy alert variable in session
               session()->forget('alert');
           }
        }

        
        // Step 4 form family members info needs to be filled to move to next form otherwise dont
        if($this->currentStep==4){
           // if there is no record entered of family memeber
           if(empty($this->applicant_family_members_earnings)){
                // set alert message in session
               $this->showAlert('Please enter family member earnings details!');
               
               return;
           }
           else{
                // destroy alert variable in session
               session()->forget('alert');
           }
       }
       
       // Step 7 form family monthly income info needs to be filled to move to next form otherwise dont
       if($this->currentStep==7){
          // if there is no record entered of family memeber
          if(empty($this->applicant_family_monthly_income)){
              // set alert message in session
              $this->showAlert('Please enter family monthly income details!');

              return;
          }
          else{
              // destroy alert variable in session
              session()->forget('alert');
          }
       }

       // Step 15 form educational record info needs to be filled to move to next form otherwise dont
       if($this->currentStep==15){
          // if there is no record entered of family memeber
          if(empty($this->applicant_education_records)){
              // set alert message in session
              $this->showAlert('Please enter educational record details!');

              return;
          }
          else{
              // destroy alert variable in session
              session()->forget('alert');
          }
       }

        // increase current step count
        $this->currentStep++;
    
        
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
            // dd('here');
        }
        
        // progress calculate
         if($this->currentStep==16){
            // calculate the new progress value based on the current step number
            $this->progressValue = round(($this->currentStep/16)*100)-1; // b/c on last step 99%
         }
         else{
            // calculate the new progress value based on the current step number
            $this->progressValue = round(($this->currentStep/16)*100); 
         }
         
    }


    // public function confirmAndIncreaseStep()
    // {
    //     if ($this->confirm('Are you sure you want to submit the form?')) {
    //         // Perform the necessary actions
    //         $this->increaseStep();
    //     }
    // }



    // skip a form
    public function skipStep(){
        
        // // step is skipped so need to empty the data saved by livewrire againsts the skipped form
        // unset($formData);

        // $this->formData = 

        $this->resetErrorBag();

        // if step 16 i.e. last form  then submit form
        if($this->currentStep==16){
            // dd($this);
            $this->submitForm();
         }

        $this->currentStep++;

         // progress calculate
        if($this->currentStep!=17){
            // calculate the new progress value based on the current step number
            $this->progressValue = round(($this->currentStep/16)*100); 
        }

         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }

    // decrease form step count
    public function decreaseStep(){

        $this->resetErrorBag();

        $this->emit('scrollToTop');

        $this->currentStep--;

        // calculate the new progress value based on the current step number
        // $this->progressValue = round(($this->currentStep/16)*100); 

        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function showAlert($message)
    {
        // store a message in a alert variable in session
        session()->flash('alert', $message);
    }



    // get the current progress value
    // public function getProgressValue(){
    //     return $this->progressValue;
    // }


    // validate every field in multi step form
    public function validateData(){

        // applicant personal details form
        if($this->currentStep == 1){
            $this->validate([
                'applicant_uni'=>'required|string|regex:/^[^0-9]*$/',
                'applicant_degree'=>'required',
                'applicant_reg_no'=>'required|string',
                'applicant_name'=>'required|string|regex:/^[^0-9]*$/',
                'applicant_semester'=>'required',
                'applicant_cgpa'=>'required|numeric|regex:/^\d{1}\.\d{1,2}$/',
                'applicant_gender'=>'required',
                'applicant_dob'=>'required|before:today',
                'applicant_cnic'=>'required|max:15|regex:/^[0-9-]+$/',
                'applicant_martial_status'=>'required',
                'applicant_age'=>'required|integer|digits:2',
                'applicant_domicile'=>'required|string|regex:/^[^0-9]*$/',
                'applicant_present_address'=>'required|string',
                'applicant_permanant_address'=>'required|string',
            ]);
        }
        // applicant employment details form
        else if($this->currentStep == 2){
            $this->validate([
                'applicant_employment_designation' => 'required|string|regex:/^[^0-9]*$/',
                'applicant_employment_company_name' => 'required|string|regex:/^[^0-9]*$/',
                'applicant_employment_gross_income' => 'required|integer',
                'applicant_employment_monthly_income' => 'required|integer',
                'applicant_employment_telephone_number' => 'required|regex:/^[0-9()+-]+$/|max:12',
                'applicant_employment_email' => 'required|email',
            ]);
        }
        // applicant family members details form
        else if($this->currentStep == 3){

            // to validate for every family member record
            foreach($this->applicant_family_members as $index => $family_member){

                $this->validate([
                        // 'applicant_family_members_name' => 'required|string|regex:/^[^0-9]*$/',
                        // 'applicant_family_members_relation' => 'required|string|regex:/^[^0-9]*$/',
                        // 'applicant_family_members_martial_status' => 'required|string',
                    
                        'applicant_family_members.'.$index.'.name' => 'required|regex:/^[a-zA-Z\s.]+$/
                        ',
                        'applicant_family_members.'.$index.'.relation' => 'required|regex:/^[a-zA-Z\s.]+$/',
                        'applicant_family_members.'.$index.'.status' => 'required',
                        'applicant_family_members.'.$index.'.remarks' => 'regex:/^[a-zA-Z\s.]+$/',  
                        // regex tells that this field should match this pattern and nothing else than this  
                ]);

            }

        }
        // family member earnings details step form
        else if($this->currentStep == 4){

            // redolved using session varaibles in increaseStep metrhod
            // if(empty($this->applicant_family_members_earnings)){
            //     echo '<script>alert("Please enter family member details!");</script>';
            //     // $this->validate([
            //     //     'applicant_family_members_earnings' => 'required'
            //     // ]);
            // }
            // else{
                // to validate for every family member record
                foreach($this->applicant_family_members_earnings as $index => $family_member){

                    $this->validate([        
                            'applicant_family_members_earnings.'.$index.'.name' => 'required|regex:/^[a-zA-Z\s.]+$/
                            ',
                            'applicant_family_members_earnings.'.$index.'.relation' => 'required|regex:/^[a-zA-Z\s.]+$/',
                            'applicant_family_members_earnings.'.$index.'.occupation' => 'required',
                            'applicant_family_members_earnings.'.$index.'.organization' => 'required|regex:/^[a-zA-Z\s.]+$/', 
                            'applicant_family_members_earnings.'.$index.'.designation' => 'required', 
                            'applicant_family_members_earnings.'.$index.'.monthly_gross_income' => 'required|regex:/^[0-9,]+$/', 
                            'applicant_family_members_earnings.'.$index.'.remarks' => 'regex:/^[a-zA-Z\s.]+$/', 
                    ]);

                }
            // }
        }
        // Siblings details form step
        else if($this->currentStep == 5){

            // to validate for every family member cuurrently studying record
                foreach($this->applicant_family_members_currently_studying as $index => $family_member){
                $this->validate([
                    'applicant_family_members_currently_studying.'.$index.'.name' => 'required|regex:/^[a-zA-Z\s.]+$/
                            ',
                    'applicant_family_members_currently_studying.'.$index.'.relation' => 'required|regex:/^[a-zA-Z\s.]+$/',
                    'applicant_family_members_currently_studying.'.$index.'.institution' => 'required',
                    'applicant_family_members_currently_studying.'.$index.'.fpm' => 'required|regex:/^[0-9,]+$/', 
                ]);
            }
        }
        // applicant father details step
        else if($this->currentStep == 6){
            $this->validate([
                'applicant_father_details_name' => 'required|regex:/^[^0-9]*$/',
                'applicant_father_details_cnic' => 'required|max:15|regex:/^[0-9-]+$/',
                'applicant_father_details_vital_status' => 'required',
                'applicant_father_details_job_status' => 'required',
                'applicant_father_details_martial_status' => 'required',
                'applicant_father_details_company_name' => 'required',
                'applicant_father_details_mobile_number' => 'required|regex:/^[0-9-]+$/|max:12',
                'applicant_father_details_occupation' => 'required',
                'applicant_father_details_nts' => 'required',
                'applicant_father_details_designation_grade' => 'required',
                'applicant_father_details_gross_income' => 'required|regex:/^[0-9,]+$/',
                'applicant_father_details_monthly_income' => 'required|regex:/^[0-9,]+$/',
                'applicant_father_details_applicant_name' => 'required|regex:/^[a-zA-Z\s.]+$/',
                'applicant_father_details_applicant_relation' => 'required|regex:/^[a-zA-Z\s.]+$/',
                'applicant_father_details_applicant_occupation_designation' => 'required',
                'applicant_father_details_applicant_monthly_financial_support' => 'required|regex:/^[0-9,]+$/',
            ]);
        }
        
        // family monthly income details step
        else if($this->currentStep == 7){

            foreach($this->applicant_family_monthly_income as $index => $member){
                $this->validate([
                    'applicant_family_monthly_income.'.$index.'.name' => 'required|regex:/^[a-zA-Z\s.]+$/
                                ',
                    'applicant_family_monthly_income.'.$index.'.relation' => 'required|regex:/^[a-zA-Z\s.]+$/',
                    'applicant_family_monthly_income.'.$index.'.monthly_income_from_assets' => 'required|regex:/^[0-9,]+$/',
                    'applicant_family_monthly_income.'.$index.'.monthly_gross_income' => 'required|regex:/^[0-9,]+$/', 
                    'applicant_family_monthly_income.'.$index.'.monthly_net_income' => 'required|regex:/^[0-9,]+$/', 
                ]);
            }
        }
        
        // asset monthly income details step
        else if($this->currentStep == 8){

            foreach($this->applicant_asset_monthly_incomes as $index => $member){
                $this->validate([
                    'applicant_asset_monthly_incomes.'.$index.'.type' => 'required',
                    'applicant_asset_monthly_incomes.'.$index.'.to_father' => 'required|regex:/^[0-9,]+$/',
                    'applicant_asset_monthly_incomes.'.$index.'.to_mother' => 'required|regex:/^[0-9,]+$/',
                    'applicant_asset_monthly_incomes.'.$index.'.to_spouse' => 'required|regex:/^[0-9,]+$/', 
                    'applicant_asset_monthly_incomes.'.$index.'.to_self' => 'required|regex:/^[0-9,]+$/', 
                    'applicant_asset_monthly_incomes.'.$index.'.to_other' => 'required|regex:/^[0-9,]+$/', 
                ]);
            }
        }

        // accomodation expenditure details step
        else if($this->currentStep == 9){
            $this->validate([
                'applicant_family_accomodation_expenditures_type' => 'required',
                'applicant_family_accomodation_expenditures_status' => 'required',
                'applicant_family_accomodation_expenditures_rent_payment_type' => 'required',
                'applicant_family_accomodation_expenditures_plot_size' => 'required',
                'applicant_family_accomodation_expenditures_address' => 'required',
                'applicant_family_accomodation_expenditures_total_bed_rooms' => 'required',
                'applicant_family_accomodation_expenditures_total_acs' => 'required',
                'applicant_family_accomodation_expenditures_monthly_rent' => 'required|regex:/^[0-9,]+$/',
                'applicant_family_accomodation_expenditures_annual_rent_expense' => 'required|regex:/^[0-9,]+$/',
                'applicant_family_accomodation_expenditures_total_rent_expense' => 'required|regex:/^[0-9,]+$/',
            ]);
        }

        // other family expenditures details step
        else if($this->currentStep == 10){
            $this->validate([
                'applicant_other_accomodation_expenditures_telephone' => 'required|regex:/^[0-9,]+$/',
                'applicant_other_accomodation_expenditures_electricity' => 'required|regex:/^[0-9,]+$/',
                'applicant_other_accomodation_expenditures_gas' => 'required|regex:/^[0-9,]+$/',
                'applicant_other_accomodation_expenditures_water' => 'required|regex:/^[0-9,]+$/',
                'applicant_other_accomodation_expenditures_education' => 'required|regex:/^[0-9,]+$/',
                'applicant_other_accomodation_expenditures_accomodation' => 'required|regex:/^[0-9,]+$/',
                'applicant_other_accomodation_expenditures_utilities' => 'required|regex:/^[0-9,]+$/',
                'applicant_other_accomodation_expenditures_medical' => 'required|regex:/^[0-9,]+$/',
                'applicant_other_accomodation_expenditures_misc' => 'required|regex:/^[0-9,]+$/',
            ]);
        }

        // applicant employment details step
        else if($this->currentStep == 11){

            // to check for every row in the applicant other assets array
            foreach($this->applicant_other_assets as $index => $asset){
                $this->validate([
                    'applicant_other_assets.'.$index.'.transport_type' => 'required',
                    'applicant_other_assets.'.$index.'.model_no' => 'required|regex:/^[0-9]+$/',
                    'applicant_other_assets.'.$index.'.engine_capacity' => 'required',
                    'applicant_other_assets.'.$index.'.reg_no' => 'required|regex:/^[0-9a-zA-Z-]+$/',
                    'applicant_other_assets.'.$index.'.ownership_period' => 'required|regex:/^[0-9a-zA-Z.\s]+$/',
                ]);
            }
        }

        // Owned plots details step
        else if($this->currentStep == 12){
            // to check for every row in the applicant owned plots array
            foreach($this->applicant_owned_plots as $index => $asset){
                $this->validate([
                    'applicant_owned_plots.'.$index.'.asset_title' => 'required',
                    'applicant_owned_plots.'.$index.'.quantity' => 'required|regex:/^[0-9]+$/',
                    'applicant_owned_plots.'.$index.'.size' => 'required|regex:/^[0-9a-zA-Z.\s]+$/',
                    'applicant_owned_plots.'.$index.'.location' => 'required',
                    'applicant_owned_plots.'.$index.'.cultivable_area' => 'required|regex:/^[0-9a-zA-Z.\s]+$/',
                    'applicant_owned_plots.'.$index.'.agricultural' => 'required|regex:/^[0-9a-zA-Z.\s]+$/',
                ]);
            }
        }

        // applicant employment details step
        else if($this->currentStep == 13){
            // to check for every row in the applicant worth of assets and its share to entities array
            foreach($this->applicant_worth_assets as $index => $asset){
                $this->validate([
                    'applicant_worth_assets.'.$index.'.asset_title' => 'required',
                    'applicant_worth_assets.'.$index.'.to_father' => 'required|regex:/^[0-9,]+$/',
                    'applicant_worth_assets.'.$index.'.to_mother' => 'required|regex:/^[0-9,]+$/',
                    'applicant_worth_assets.'.$index.'.to_spouse' => 'required|regex:/^[0-9,]+$/',
                    'applicant_worth_assets.'.$index.'.to_guardian' => 'required|regex:/^[0-9,]+$/',
                ]);
            }
        }

        // Previous scholarship taken details step
        else if($this->currentStep == 14){
            $this->validate([
                'applicant_loans_loan_one_reason' => 'required',
                'applicant_loans_loan_two_reason' => 'required',
                'applicant_loans_loan_three_reason' => 'required',
            ]);
        }

        // applicant educational record details step
        else if($this->currentStep == 15){
            // to check for every row in the applicant educational records array
            foreach($this->applicant_education_records as $index => $record){
                $this->validate([
                    'applicant_education_records.'.$index.'.level_of_study' => 'required',
                    'applicant_education_records.'.$index.'.institution_name' => 'required',
                    'applicant_education_records.'.$index.'.per_month_fees' => 'required|regex:/^[0-9,]+$/',
                    'applicant_education_records.'.$index.'.from_date' => 'required',
                    'applicant_education_records.'.$index.'.to_date' => 'required',
                    'applicant_education_records.'.$index.'.gpa_division' => 'required|regex:/^[0-9A-Z.]+$/',
                    'applicant_education_records.'.$index.'.cgpa_percentage' => 'required|regex:/^[0-9.%]+$/',
                ]);
            }
        }
        
        // applicant prevoius scholarship details step
        else if($this->currentStep == 16){
            $this->validate([
                'applicant_other_scholarships_institution_name' => 'required|regex:/^[a-zA-Z\s.]+$/',
                'applicant_other_scholarships_name' => 'required',
                'applicant_other_scholarships_total_amount' => 'required|regex:/^[0-9,]+$/',
                'applicant_other_scholarships_total_period' => 'required|regex:/^[0-9.a-zA-Z]+$/',
                'applicant_other_scholarships_class_level_granted' => 'required',
                'applicant_other_scholarships_purpose' => 'required',
            ]);
        }
    }
    
    // STEP 3 FORM
    // when a new row is added in the table, the array (row) for the new family member data is empty and pushed in the family members array and when the user fills the data in fields livewire automatically binds the data to the correct index (0,1,2) for the key (name, relation).
    public function addFamilyMember()
    {
        $this->resetErrorBag(); // clear all the errors on fields

        $newFamilyMember = [
            'name' => '',
            'relation' => '',
            'status' => '',
            'remarks' => ''
        ];
        
        array_push($this->applicant_family_members, $newFamilyMember);
    }
    

    // the removeFamilyMember() method takes an $index parameter that specifies the index of the family member to remove from the $applicant_family_members array.
    public function removeFamilyMember($index)
    {
        $this->resetErrorBag(); // clear all the errors on fields

        // dd('deleting');
        unset($this->applicant_family_members[$index]);
        $this->applicant_family_members = array_values($this->applicant_family_members);
    }
    
    // when a field is updated in family member form
    // public function updatedFamilyMember($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }



    // public function addFamilyMember()
    // {
    //     $this->applicant_family_members_name[] = ;
    //     $this->applicant_family_members_relation[$index] = [applicant_family_members_relation];
    //     // similarly save for each row input field data in array so that when moving onto next form and when validating the livewire does not consider it as a single value but as multiple and retains the multiple field values
    // }



    // public function removeFamilyMember($index)
    // {
    //     unset($this->applicant_family_members_name[$index]);
    //     unset($this->applicant_family_members_relation[$index]);
    // }

    

    // STEP 4 FORM

    // create new family member earning empty record and place in array
    public function addFamilyMemberEarning()
    {
        $this->resetErrorBag(); // clear all the errors on fields

        $newFamilyMemberEarning = [
            'name' => '',
            'relation' => '',
            'occupation' => '',
            'organization' => '',
            'designation' => '',
            'monthly_gross_income' => '',
            'remarks' => ''
        ];
        
        array_push($this->applicant_family_members_earnings, $newFamilyMemberEarning);
    }

    // remove the record of member from array using index
    public function removeFamilyMemberEarning($index)
    {
        $this->resetErrorBag(); // clear all the errors on fields

        // dd('deleting');
        unset($this->applicant_family_members_earnings[$index]);
        $this->applicant_family_members_earnings = array_values($this->applicant_family_members_earnings);
    }


    // STEP 5 FORM
    public function addFamilyMemberCurrentlyStudying(){
        $this->resetErrorBag(); // clear all the errors on fields

        $newFamilyMemberCurrentlyStudying = [
            'name' => '',
            'relation' => '',
            'institution' => '',
            'fees' => '',
        ];
        
        array_push($this->applicant_family_members_currently_studying, $newFamilyMemberCurrentlyStudying);

    }

    public function removeFamilyMemberCurrentlyStudying($index){
        $this->resetErrorBag(); // clear all the errors on fields
        
        unset($this->applicant_family_members_currently_studying[$index]);
        $this->applicant_family_members_currently_studying = array_values($this->applicant_family_members_currently_studying);
    }


    // STEP 7 FORM
    public function addFamilyMonthlyIncome(){
        $this->resetErrorBag(); // clear all the errors on fields

        $newFamilyMonthlyIncome = [
            'name' => '',
            'relation' => '',
            'monthly_income_from_assets' => '',
            'monthly_gross_income' => '',
            'monthly_net_income' => '',
        ];
        
        array_push($this->applicant_family_monthly_income, $newFamilyMonthlyIncome);
    }

    public function removeFamilyMonthlyIncome($index){
        $this->resetErrorBag(); // clear all the errors on fields

        unset($this->applicant_family_monthly_income[$index]);
        $this->applicant_family_monthly_income = array_values($this->applicant_family_monthly_income);
    }

    // STEP 8 FORM
    public function addAssetMonthlyIncome(){
        $this->resetErrorBag(); // clear all the errors on fields

        $newAssetMonthlyIncome = [
            'type' => '',
            'to_father' => '',
            'to_mother' => '',
            'to_spouse' => '',
            'to_self' => '',
            'to_other' => '',
        ];
        
        array_push($this->applicant_asset_monthly_incomes, $newAssetMonthlyIncome);
    }

    public function removeAssetMonthlyIncome($index){
        $this->resetErrorBag(); // clear all the errors on fields

        unset($this->applicant_asset_monthly_incomes[$index]);
        $this->applicant_asset_monthly_incomes = array_values($this->applicant_asset_monthly_incomes);
    }


    // STEP 11 FORM
    public function addOtherAsset(){
        $this->resetErrorBag(); // clear all the errors on fields

        $newOtherAsset = [
            'transport_type' => '',
            'model_no' => '',
            'engine_capacity' => '',
            'reg_no' => '',
            'ownership_period' => '',
        ];
        
        array_push($this->applicant_other_assets, $newOtherAsset);
    }

    public function removeOtherAsset($index){
        $this->resetErrorBag(); // clear all the errors on fields

        unset($this->applicant_other_assets[$index]);
        $this->applicant_other_assets = array_values($this->applicant_other_assets);
    }


    // STEP 12 FORM
    public function addOwnedPlot(){
        $this->resetErrorBag(); // clear all the errors on fields when a new row is added in the table

        $newOwnedPlot = [
            'asset_title' => '',
            'quantity' => '',
            'size' => '',
            'location' => '',
            'cultivable_area' => '',
            'agricultural' => '',
        ];
        
        array_push($this->applicant_owned_plots, $newOwnedPlot);
    }

    public function removeOwnedPlot($index){
        $this->resetErrorBag(); // clear all the errors on fields when any row is remove from the table

        unset($this->applicant_owned_plots[$index]);
        $this->applicant_owned_plots = array_values($this->applicant_owned_plots);
    }


    // STEP 13 FORM
    public function addWorthAsset(){
        $this->resetErrorBag(); // clear all the errors on fields when a new row is added in the table

        $newWorthAsset = [
            'asset_title' => '',
            'to_father' => '',
            'to_mother' => '',
            'to_spouse' => '',
            'to_guardian' => '',
        ];
        
        array_push($this->applicant_worth_assets, $newWorthAsset);
    }

    public function removeWorthAsset($index){
        $this->resetErrorBag(); // clear all the errors on fields when any row is remove from the table

        unset($this->applicant_worth_assets[$index]);
        $this->applicant_worth_assets = array_values($this->applicant_worth_assets);
    }


    // STEP 15 FORM
    public function addEducationRecord(){
        $this->resetErrorBag(); // clear all the errors on fields when a new row is added in the table

        $newEducationRecord = [
            'level_of_study' => '',
            'institution_name' => '',
            'per_month_fees' => '',
            'from_date' => '',
            'to_date' => '',
            'gpa_division' => '',
            'cgpa_percentage' => '',
        ];
        
        array_push($this->applicant_education_records, $newEducationRecord);
    }

    public function removeEducationRecord($index){
        $this->resetErrorBag(); // clear all the errors on fields when any row is remove from the table

        unset($this->applicant_education_records[$index]);
        $this->applicant_education_records = array_values($this->applicant_education_records);
    }

    // the confirmAndIncreaseStep() method that will be called when the button is clicked. This method shows the confirm() dialog box and handles the if statement to prevent the wire:click event from triggering the increaseStep() function if the user clicks the cancel option.

    // If the user clicks the OK option, the if statement evaluates to true, and the increaseStep() function is called to perform the necessary action.
    // public function confirmAndIncreaseStep()
    // {
    //     if (confirm('Are you sure you want to submit form?')) { // ERROR DUE TO CONFIRM() METHOD IS A JS METHOD SO CANNOT BE CALLED FROM PHP CODE
    //         $this->increaseStep();
    //     }
    // }




    // submit form data
    public function submitForm(){

        // $scholarshipId = request()->input('scholarshipId');

        // dd();
        // dd($scholarshipId,$this); // correct data printing till here
        // dd($ID, $this); // correct data printing till here
        // dd($scholarshipId, $this->applicant_other_scholarships_institution_name);

        // dd($this);


        // Storing personal details of student in database

        ApplicantPersonalDetail::create([
            'applicant_name' => $this->applicant_name,	
            'applicant_age' => $this->applicant_age,	
            'applicant_gender' => $this->applicant_gender,	
            'applicant_DOB' => $this->applicant_dob,	
            'applicant_CNIC' => $this->applicant_cnic,	
            'applicant_martial_status' => $this->applicant_martial_status,	
            'applicant_domicile' => $this->applicant_domicile,	
            'applicant_present_address' => $this->applicant_present_address,	
            'applicant_permanant_address' => $this->applicant_permanant_address,	
            'applicant_reg_no' => $this->applicant_reg_no,	
            'applicant_degree' => $this->applicant_degree,	
            'applicant_semester' => $this->applicant_semester,	
            'applicant_university' => $this->applicant_uni,	
            'applicant_CGPA' => $this->applicant_cgpa,	
            'applicant_user_id' => Auth::user()->id,	
            'applicant_scholarship_id' => $this->scholarshipID,
        ]);

        // Storing applicant employment details (if any)
        if(!empty($this->applicant_employment_company_name)){
            ApplicantEmploymentDetail::create([
                'applicant_employment_designation' => $this->applicant_employment_designation,	
                'applicant_employment_company_name' => $this->applicant_employment_company_name,	
                'applicant_employment_gross_income' => $this->applicant_employment_gross_income,	
                'applicant_employment_monthly_income' => $this->applicant_employment_monthly_income,	
                'applicant_employment_telephone_number' => $this->applicant_employment_telephone_number,	
                'applicant_employment_email' => $this->applicant_employment_email,	
                'applicant_employment_user_id' => Auth::user()->id,
                'applicant_employment_scholarship_id' => $this->scholarshipID,
            ]);
        }


        // Storing applicant family members details
        // foreach($this->applicant_family_members as $index => $family_member){
        //     'applicant_family_members_name' => $family_detail,	
        //     'applicant_family_members_martial_status' => $family_detail,	
        //     'applicant_family_members_relation' => $family_detail	,
        //     'applicant_family_members_remarks' => $family_detail,	
        //     'applicant_family_members_user_id' => ,
        //     'applicant_family_members_scholarship_id' => ,
        // }

        foreach ($this->applicant_family_members as $familyMember) {
            ApplicantFamilyMember::create([
                'applicant_family_members_name' => $familyMember['name'],
                'applicant_family_members_martial_status' => $familyMember['status'],
                'applicant_family_members_relation' => $familyMember['relation'],
                'applicant_family_members_remarks' => $familyMember['remarks'],
                'applicant_family_members_user_id' => Auth::user()->id,
                'applicant_family_members_scholarship_id' => $this->scholarshipID,
            ]);
        }


        // Store ApplicantFamilyMemberEarnings records
        
            foreach ($this->applicant_family_members_earnings as $member_earnings) {
                ApplicantFamilyMemberEarning::create([
                    'applicant_family_member_earnings_member_name' => $member_earnings['name'],
                    'applicant_family_member_earnings_member_relation' => $member_earnings['relation'],
                    'applicant_family_member_earnings_member_occupation' => $member_earnings['occupation'],
                    'applicant_family_member_earnings_member_organization' => $member_earnings['organization'],
                    'applicant_family_member_earnings_member_designation' => $member_earnings['designation'],
                    'applicant_family_member_earnings_member_monthly_income' => $member_earnings['monthly_gross_income'],
                    'applicant_family_member_earnings_member_remarks' => $member_earnings['remarks'],
                    'applicant_family_member_earnings_user_id' => Auth::user()->id,
                    'applicant_family_member_earnings_scholarship_id' => $this->scholarshipID,
                ]);
            }


        // Store ApplicantFamilyMemberCurrentlyStudyingDetail records
        if(!empty($this->applicant_family_members_currently_studying)){
            foreach ($this->applicant_family_members_currently_studying as $studying_member) {
                ApplicantFamilyMemberCurrentlyStudyingDetail::create([
                    'applicant_family_member_currently_studying_detail_name' => $studying_member['name'],
                    'applicant_family_member_currently_studying_detail_relation' => $studying_member['relation'],
                    'applicant_family_member_currently_studying_detail_institution' => $studying_member['institution'],
                    'applicant_family_member_currently_studying_detail_fpm' => $studying_member['fpm'],
                    'applicant_family_member_currently_studying_detail_user_id' => Auth::user()->id,
                    'applicant_family_member_currently_studying_detail_scholarship_id' => $this->scholarshipID,
                ]);
            }
        }

        // Store ApplicantFatherDetail record
        ApplicantFatherDetail::create([
            'applicant_father_details_name' => $this->applicant_father_details_name,
            'applicant_father_details_CNIC' => $this->applicant_father_details_cnic,
            'applicant_father_details_vital_status' => $this->applicant_father_details_vital_status,
            'applicant_father_details_job_status' => $this->applicant_father_details_job_status,
            'applicant_father_details_martial_status' => $this->applicant_father_details_martial_status,
            'applicant_father_details_mobile_number' => $this->applicant_father_details_mobile_number,
            'applicant_father_details_occupation' => $this->applicant_father_details_occupation,
            'applicant_father_details_company_name' => $this->applicant_father_details_company_name,
            'applicant_father_details_NTS' => $this->applicant_father_details_nts,
            'applicant_father_details_designation_grade' => $this->applicant_father_details_designation_grade,
            'applicant_father_details_monthly_income' => $this->applicant_father_details_monthly_income,
            'applicant_father_details_gross_income' => $this->applicant_father_details_gross_income,
            'applicant_father_details_applicant_name' => $this->applicant_father_details_applicant_name,
            'applicant_father_details_applicant_relation' => $this->applicant_father_details_applicant_relation,
            'applicant_father_details_applicant_occupation_designation' => $this->applicant_father_details_applicant_occupation_designation,
            'applicant_father_details_applicant_monthly_financial_support' => $this->applicant_father_details_applicant_monthly_financial_support,
            'applicant_father_details_user_id' => Auth::user()->id,
            'applicant_father_details_scholarship_id' => $this->scholarshipID,
        ]);

        // Store ApplicantFamilyMonthlyIncome record
        foreach($this->applicant_family_monthly_income as $monthly_income){
            ApplicantFamilyMonthlyIncome::create([
                'applicant_family_monthly_incomes_member_name' => $monthly_income['name'],
                'applicant_family_monthly_incomes_member_relation' => $monthly_income['relation'],
                'applicant_family_monthly_incomes_member_monthly_asset_income' => $monthly_income['monthly_income_from_assets'],
                'applicant_family_monthly_incomes_member_monthly_gross_income' => $monthly_income['monthly_gross_income'],
                'applicant_family_monthly_incomes_member_monthly_net_income' => $monthly_income['monthly_net_income'],
                'applicant_family_monthly_incomes_user_id' => Auth::user()->id,
                'applicant_family_monthly_incomes_scholarship_id' => $this->scholarshipID,
            ]);
        }

        // Store ApplicantAssetMonthlyIncome record
        if(!empty($this->applicant_asset_monthly_incomes)){
            foreach($this->applicant_asset_monthly_incomes as $asset_monthly_income){
                ApplicantAssetMonthlyIncome::create([
                    'applicant_asset_monthly_incomes_type' => $asset_monthly_income['type'],
                    'applicant_asset_monthly_incomes_to_father' => $asset_monthly_income['to_father'],
                    'applicant_asset_monthly_incomes_to_mother' => $asset_monthly_income['to_mother'],
                    'applicant_asset_monthly_incomes_to_spouse' => $asset_monthly_income['to_spouse'],
                    'applicant_asset_monthly_incomes_to_self' => $asset_monthly_income['to_self'],
                    'applicant_asset_monthly_incomes_to_other' => $asset_monthly_income['to_other'],
                    'applicant_asset_monthly_incomes_user_id' => Auth::user()->id,
                    'applicant_asset_monthly_incomes_scholarship_id' => $this->scholarshipID,
                ]);
            }
        }

        // Store ApplicantFamilyAccomodationExpenditure record
        ApplicantFamilyAccomodationExpenditure::create([
            'applicant_family_accomodation_expenditures_type' => $this->applicant_family_accomodation_expenditures_type,
            'applicant_family_accomodation_expenditures_status' => $this->applicant_family_accomodation_expenditures_status,
            'applicant_family_accomodation_expenditures_rent_payment_type' => $this->applicant_family_accomodation_expenditures_rent_payment_type,
            'applicant_family_accomodation_expenditures_plot_size' => $this->applicant_family_accomodation_expenditures_plot_size,
            'applicant_family_accomodation_expenditures_address' => $this->applicant_family_accomodation_expenditures_address,
            'applicant_family_accomodation_expenditures_total_bed_rooms' => $this->applicant_family_accomodation_expenditures_total_bed_rooms,
            'applicant_family_accomodation_expenditures_total_ACs' => $this->applicant_family_accomodation_expenditures_total_acs,
            'applicant_family_accomodation_expenditures_monthly_rent' => $this->applicant_family_accomodation_expenditures_monthly_rent,
            'applicant_family_accomodation_expenditures_annual_rent_expense' => $this->applicant_family_accomodation_expenditures_annual_rent_expense,
            'applicant_family_accomodation_expenditures_total_rent_expense' => $this->applicant_family_accomodation_expenditures_total_rent_expense,
            'applicant_family_accomodation_expenditures_user_id' => Auth::user()->id,
            'applicant_family_accomodation_expenditures_scholarship_id' => $this->scholarshipID,
        ]);

        // Store ApplicantOtherAccomodationExpenditure record
        ApplicantOtherAccomodationExpenditure::create([
            'applicant_other_accomodation_expenditures_telephone' => $this->applicant_other_accomodation_expenditures_telephone,
            'applicant_other_accomodation_expenditures_electricity' => $this->applicant_other_accomodation_expenditures_electricity,
            'applicant_other_accomodation_expenditures_gas' => $this->applicant_other_accomodation_expenditures_gas,
            'applicant_other_accomodation_expenditures_water' => $this->applicant_other_accomodation_expenditures_water,
            'applicant_other_accomodation_expenditures_education' => $this->applicant_other_accomodation_expenditures_education,
            'applicant_other_accomodation_expenditures_accomodation' => $this->applicant_other_accomodation_expenditures_accomodation,
            'applicant_other_accomodation_expenditures_utilities' => $this->applicant_other_accomodation_expenditures_utilities,
            'applicant_other_accomodation_expenditures_medical' => $this->applicant_other_accomodation_expenditures_medical,
            'applicant_other_accomodation_expenditures_misc' => $this->applicant_other_accomodation_expenditures_misc,
            'applicant_other_accomodation_expenditures_user_id' => Auth::user()->id,
            'applicant_other_accomodation_expenditures_scholarship_id' => $this->scholarshipID,
        ]);

        // Store ApplicantOtherAsset record
        foreach($this->applicant_other_assets as $other_asset){
            ApplicantOtherAsset::create([
                'applicant_other_assets_transport_type' => $other_asset['transport_type'],
                'applicant_other_assets_model_no' => $other_asset['model_no'],
                'applicant_other_assets_engine_capacity' => $other_asset['engine_capacity'],
                'applicant_other_assets_reg_no' => $other_asset['reg_no'],
                'applicant_other_assets_ownership_period' => $other_asset['ownership_period'],
                'applicant_other_assets_user_id' => Auth::user()->id,
                'applicant_other_assets_scholarship_id' => $this->scholarshipID,
            ]);
        }

        // Store ApplicantOwnedPlot record
        if(!empty($this->applicant_owned_plots)){
            foreach($this->applicant_owned_plots as $owned_plot){
                ApplicantOwnedPlot::create([
                    'applicant_owned_plots_asset_type' => $owned_plot['asset_title'],
                    'applicant_owned_plots_quantity' => $owned_plot['quantity'],
                    'applicant_owned_plots_size' => $owned_plot['size'],
                    'applicant_owned_plots_location' => $owned_plot['location'],
                    'applicant_owned_plots_cultivable_area' => $owned_plot['cultivable_area'],
                    'applicant_owned_plots_agricultural' => $owned_plot['agricultural'],
                    'applicant_owned_plots_user_id' => Auth::user()->id,
                    'applicant_owned_plots_scholarship_id' => $this->scholarshipID,
                ]);
            }
        }

        // Store ApplicantWorthAsset record
        foreach($this->applicant_worth_assets as $worth_asset){
            ApplicantWorthAsset::create([
                'applicant_worth_assets_asset_title' => $worth_asset['asset_title'],
                'applicant_worth_assets_to_father' => $worth_asset['to_father'],
                'applicant_worth_assets_to_mother' => $worth_asset['to_mother'],
                'applicant_worth_assets_to_spouse' => $worth_asset['to_spouse'],
                'applicant_worth_assets_to_guardian' => $worth_asset['to_guardian'],
                'applicant_worth_assets_user_id' => Auth::user()->id,
                'applicant_worth_assets_scholarship_id' => $this->scholarshipID,
            ]);
        }

        // Store ApplicantLoan record
        if($this->applicant_loans_loan_one_reason!=NULL){
        ApplicantLoan::create([
            'applicant_loans_loan_one_reason' => $this->applicant_loans_loan_one_reason,
            'applicant_loans_loan_two_reason' => $this->applicant_loans_loan_two_reason,
            'applicant_loans_loan_three_reason' => $this->applicant_loans_loan_three_reason,
            'applicant_loans_user_id' => Auth::user()->id,
            'applicant_loans_scholarship_id' => $this->scholarshipID,
        ]);
    }

        // Store ApplicantEducationRecord records
        foreach ($this->applicant_education_records as $educationRecord) {
            ApplicantEducationRecord::create([
                'applicant_education_records_level_of_study' => $educationRecord['level_of_study'],
                'applicant_education_records_institution_name' => $educationRecord['institution_name'],
                'applicant_education_records_per_month_fees' => $educationRecord['per_month_fees'],
                'applicant_education_records_from_date' => $educationRecord['from_date'],
                'applicant_education_records_to_date' => $educationRecord['to_date'],
                'applicant_education_records_gpa_division' => $educationRecord['gpa_division'],
                'applicant_education_records_cgpa_percentage' => $educationRecord['cgpa_percentage'],
                'applicant_education_records_user_id' => Auth::user()->id,
                'applicant_education_records_scholarship_id' => $this->scholarshipID,
            ]);
        }

        // Store ApplicantOtherScholarship record
        if($this->applicant_other_scholarships_institution_name!=NULL){
        ApplicantOtherScholarship::create([
            'applicant_other_scholarships_institution_name' => $this->applicant_other_scholarships_institution_name,
            'applicant_other_scholarships_name' => $this->applicant_other_scholarships_name,
            'applicant_other_scholarships_total_amount' => $this->applicant_other_scholarships_total_amount,
            'applicant_other_scholarships_total_period' => $this->applicant_other_scholarships_total_period,
            'applicant_other_scholarships_class_level_granted' => $this->applicant_other_scholarships_class_level_granted,
            'applicant_other_scholarships_purpose' => $this->applicant_other_scholarships_purpose,
            'applicant_other_scholarships_user_id' => Auth::user()->id,
            'applicant_other_scholarships_scholarship_id' => $this->scholarshipID,
        ]);
    }

    // Create record that user has appplied to the scholarship now
    AppliedScholarship::create([
        'applied_scholarships_user_id' => Auth::user()->id,
        'applied_scholarships_scholarship_id' => $this->scholarshipID,
        'applied_scholarships_status' => "Submitted"
    ]);
    
    // set alert message
    $this->emit('show-alert', ['message' => 'Application form submitted successfully!']);

    // $this->emit('replaceUrl');

    // redirect to user dashboard
    return redirect()->route('profile');

    }


}
