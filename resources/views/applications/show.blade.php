@extends('layouts.app')

@section('title', 'Application')

@section('content')
<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Applications</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('home')}}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('applications.index')}}" class="text-muted text-hover-primary">All Applications</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Application</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container-fluid">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Application details</h1>
                            <!--end::Title-->
                        </div>
                        <div class="mb-13">
                            <!--begin::Description-->
                            <div class="text-solid fw-semibold fs-4">Below are the details of the application:</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->

                        {{-- Submission details --}}

                        <div class="mb-13">
                                <hr>
                                    <div class="text-solid fw-bold h2" style="text-align: center">Submission details</div>
                                <hr>
                                <br>

                                @foreach($userDetails as $details)
                                <span class="h4">Submitted by: </span>
                                <span style="font-size:15px">{{$details->name}}</span> <br> <br>
                                @endforeach

                                <span class="h4">Application status: </span>
                                <span style="font-size:15px">{{$applicationStatus}}</span> <br> <br>
                                
                                <span class="h4">Date submitted:</span>
                                <span style="font-size:15px">{{$applicationCreatedAt}}</span> <br> <br>
                                
                                @foreach($scholarshipDetails as $details)
                                <span class="h4">Scholarship name:</span>
                                <span style="font-size:15px">{{$details->scholarship_name}}</span> <br>
                                @endforeach

                            </span>
                            
                        </div>

                        {{-- 1. Student Information --}}
                        
                        <div class="mb-13">
                            <!--begin::Description-->
                            <hr>
                            <div class="text-solid fw-bold h2" style="text-align: center">Student Information</div>
                            <hr>
                            <br>
                            <!--end::Description-->

                            @foreach($applicantPersonalDetails as $details)

                            <table class="table" style="width: 60%; margin:auto;">
                                <tbody>
                                    <tr>
                                        <td style="font-weight: 600">Student name</td>
                                        <td>{{$details['applicant_name']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Age</td>
                                        <td>{{$details['applicant_age']}}</td>
                                    </tr>

                                    <tr>
                                        <td style="font-weight: 600">Gender</td>
                                        <td>{{$details['applicant_gender']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Date of birth</td>
                                        <td>{{$details['applicant_DOB']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">CNIC</td>
                                        <td>{{$details['applicant_CNIC']}}</td>
                                    </tr>
                                    <tr>

                                        <td style="font-weight: 600">Marital status</td>
                                        <td>{{$details['applicant_martial_status']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Domicile</td>
                                        <td>{{$details['applicant_domicile']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Present address</td>
                                        <td>{{$details['applicant_present_address']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Permanant address</td>
                                        <td>{{$details['applicant_permanant_address']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Degree</td>
                                        <td>{{$details['applicant_degree']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Semester</td>
                                        <td>{{$details['applicant_semester']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">University</td>
                                        <td>{{$details['applicant_university']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Registration number</td>
                                        <td>{{$details['applicant_reg_no']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">CGPA/GPA</td>
                                        <td>{{$details['applicant_CGPA']}}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>

                            {{-- <h4>Student name:</h4>
                            <p>{{$details['applicant_name']}}</p>

                            <h4>Age:</h4>
                            <p>{{$details['applicant_age']}}</p>

                            <h4>Gender:</h4>
                            <p>{{$details['applicant_gender']}}</p>

                            <h4>Date of birth:</h4>
                            <p>{{$details['applicant_DOB']}}</p>

                            <h4>CNIC:</h4>
                            <p>{{$details['applicant_CNIC']}}</p>

                            <h4>Marital status:</h4>
                            <p>{{$details['applicant_martial_status']}}</p>

                            <h4>Domicile:</h4>
                            <p>{{$details['applicant_domicile']}}</p>

                            <h4>Present address:</h4>
                            <p>{{$details['applicant_present_address']}}</p>

                            <h4>Permanant address:</h4>
                            <p>{{$details['applicant_permanant_address']}}</p>

                            <h4>Degree:</h4>
                            <p>{{$details['applicant_degree']}}</p>

                            <h4>Semester:</h4>
                            <p>{{$details['applicant_semester']}}</p>

                            <h4>University:</h4>
                            <p>{{$details['applicant_university']}}</p>

                            <h4>Registration number:</h4>
                            <p>{{$details['applicant_reg_no']}}</p>

                            <h4>CGPA/GPA:</h4>
                            <p>{{$details['applicant_CGPA']}}</p> --}}

                            @endforeach

                        </div>

                        {{-- More tables below --}}

                        {{-- Current Employment Information --}}

                        <div class="mb-13">
                            
                            <!--begin::Description-->
                            <hr>
                            <div class="text-solid fw-bold h2" style="text-align: center">Current Employment Information</div>
                            <hr>
                            <br>
                            <!--end::Description-->

                            {{-- Current employment information --}}
                            @if($applicantEmploymentDetails!=NULL)

                            @foreach($applicantEmploymentDetails as $details)

                            <table class="table" style="width: 60%; margin:auto;">
                                <tbody>
                                    <tr>
                                        <td style="font-weight: 600">Designation</td>
                                        <td>{{$details['applicant_employment_designation']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Company name</td>
                                        <td>{{$details['applicant_employment_company_name']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Gross income</td>
                                        <td>{{$details['applicant_employment_gross_income']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Monthly income</td>
                                        <td>{{$details['applicant_employment_monthly_income']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Telephone number</td>
                                        <td>{{$details['applicant_employment_telephone_number']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">E-mail</td>
                                        <td>{{$details['applicant_employment_email']}}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>

                            @endforeach

                            @else

                            <h3 style="text-align: center">No information to show!</h3>

                            @endif
                        </div>

                        {{-- Family Members Information --}}

                        <div class="mb-13">

                            <!--begin::Description-->
                            <hr>
                            <div class="text-solid fw-bold h2" style="text-align: center">Family Members Information </div>
                            <hr>
                            <br>
                            <!--end::Description-->

                            {{-- Table of family members data --}}
                            
                            <table class="table" style="margin-left:20px">
                                <thead>
                                    <tr>
                                        <th scope="col" style="font-weight: 600">
                                            S#</th>
                                        <th scope="col" style="font-weight: 600">
                                            Family member name</th>
                                        <th scope="col" style="font-weight: 600">
                                            Relation with applicant</th>
                                        <th scope="col" style="font-weight: 600">
                                            Marital status</th>
                                        <th scope="col" style="font-weight: 600">
                                            Remarks***</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                     $serial=0;   
                                    @endphp

                                    @foreach($applicantFamilyMembers as $details)
                                    <tr>
                                        <th scope="row">{{++$serial}}</th>
                                        <td>{{$details['applicant_family_members_name']}}</td>
                                        <td>{{$details['applicant_family_members_martial_status']}}</td>
                                        <td>{{$details['applicant_family_members_relation']}}</td>
                                        <td>{{$details['applicant_family_members_remarks']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                        {{-- 4. Family Members Earnings Information --}}

                        <div class="mb-13">

                            <!--begin::Description-->
                            <hr>
                            <div class="text-solid fw-bold h2" style="text-align: center">Family Members Earnings Information </div>
                            <hr>
                            <br>
                            <!--end::Description-->

                            {{-- Table of family members data --}}
                            
                            <table class="table" style="margin-left:20px">
                                <thead>
                                    <tr>
                                        <th scope="col" style="font-weight: 600">
                                            S#</th>
                                        <th scope="col" style="font-weight: 600">
                                            Family member name</th>
                                        <th scope="col" style="font-weight: 600">
                                            Relation</th>
                                        <th scope="col" style="font-weight: 600">
                                            Occupation</th>
                                        <th scope="col" style="font-weight: 600">
                                            Organization</th>
                                        <th scope="col" style="font-weight: 600">
                                            Designation</th>
                                        <th scope="col" style="font-weight: 600">
                                            Monthly Gross Income</th>
                                        <th scope="col" style="font-weight: 600">
                                            Marital status</th>
                                        <th scope="col" style="font-weight: 600">
                                            Remarks***</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                     $serial=0;   
                                    @endphp

                                    @foreach($applicantFamilyMemberEarnings as $details)
                                    <tr>
                                        <th scope="row">{{++$serial}}</th>
                                        <td>{{$details['applicant_family_member_earnings_member_name']}}</td>
                                        <td>{{$details['applicant_family_member_earnings_member_relation']}}</td>
                                        <td>{{$details['applicant_family_member_earnings_member_occupation']}}</td>
                                        <td>{{$details['applicant_family_member_earnings_member_organization']}}</td>
                                        <td>{{$details['applicant_family_member_earnings_member_designation']}}</td>
                                        <td>{{$details['applicant_family_member_earnings_member_monthly_income']}}</td>
                                        <td>{{$details['applicant_family_member_earnings_member_remarks']}}</td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>

                        </div>
                        
                        {{-- 5. Brother/Sister/Family Member Studying (Sibling) --}}
                        <div class="mb-13">

                            <!--begin::Description-->
                            <hr>
                            <div class="text-solid fw-bold h2" style="text-align: center">Brother/Sister/Family Member Studying (Sibling) Information</div>
                            <hr>
                            <br>
                            <!--end::Description-->

                            {{-- Table of family members data --}}
                            
                            <table class="table" style="margin-left:20px">
                                <thead>
                                    <tr>
                                        <th scope="col" style="font-weight: 600">
                                            S#</th>
                                        <th scope="col" style="font-weight: 600">
                                            Name</th>
                                        <th scope="col" style="font-weight: 600">
                                            Relation</th>
                                        <th scope="col" style="font-weight: 600">
                                            Name of institution</th>
                                        <th scope="col" style="font-weight: 600">
                                            Fees per month</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                     $serial=0;   
                                    @endphp

                                    @foreach($applicantFamilyMemberStudyingDetails as $details)
                                    <tr>
                                        <th scope="row">{{++$serial}}</th>
                                        <td>{{$details['applicant_family_member_currently_studying_detail_name']}}</td>
                                        <td>{{$details['applicant_family_member_currently_studying_detail_relation']}}</td>
                                        <td>{{$details['applicant_family_member_currently_studying_detail_institution']}}</td>
                                        <td>{{$details['applicant_family_member_currently_studying_detail_fpm']}}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                        
                        {{-- 6. Father Information --}}
                        
                        <div class="mb-13">
                            <!--begin::Description-->
                            <hr>
                            <div class="text-solid fw-bold h2" style="text-align: center">Father Information</div>
                            <hr>
                            <br>
                            <!--end::Description-->

                            @foreach($applicantFatherDetails as $details)

                            <table class="table" style="width: 60%; margin:auto;">
                                <tbody>
                                    <tr>
                                        <td style="font-weight: 600">Father name</td>
                                        <td>{{$details['applicant_father_details_name']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Father CNIC</td>
                                        <td>{{$details['applicant_father_details_CNIC']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Vital status</td>
                                        <td>{{$details['applicant_father_details_vital_status']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Professional status</td>
                                        <td>{{$details['applicant_father_details_job_status']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Marital status</td>
                                        <td>{{$details['applicant_father_details_martial_status']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Office/Mobile No</td>
                                        <td>{{$details['applicant_father_details_mobile_number']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Occupation type</td>
                                        <td>{{$details['applicant_father_details_occupation']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Company/Organization name</td>
                                        <td>{{$details['applicant_father_details_company_name']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">NTS</td>
                                        <td>{{$details['applicant_father_details_NTS']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Designation & Grade</td>
                                        <td>{{$details['applicant_father_details_designation_grade']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Total Net Monthly Income/Salary/Pension/Other</td>
                                        <td>{{$details['applicant_father_details_monthly_income']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Gross Income</td>
                                        <td>{{$details['applicant_father_details_gross_income']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Name of Applicant</td>
                                        <td>{{$details['applicant_father_details_applicant_name']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Relationship</td>
                                        <td>{{$details['applicant_father_details_applicant_relation']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Occupation & Designation</td>
                                        <td>{{$details['applicant_father_details_applicant_occupation_designation']}}
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="font-weight: 600">Monthly Financial Support to Applicant in PKR</td>
                                        <td>{{$details['applicant_father_details_applicant_monthly_financial_support']}}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>

                            @endforeach

                        </div>

                        {{-- 7. Family Monthly Income --}}

                        <div class="mb-13">

                            <!--begin::Description-->
                            <hr>
                            <div class="text-solid fw-bold h2" style="text-align: center">Family Monthly Income Information</div>
                            <hr>
                            <br>
                            <!--end::Description-->

                            {{-- Table of family members data --}}
                            
                            <table class="table" style="margin-left:20px">
                                <thead>
                                    <tr>
                                        <th scope="col" style="font-weight: 600">
                                            S#</th>
                                        <th scope="col" style="font-weight: 600">
                                            Family member name</th>
                                        <th scope="col" style="font-weight: 600">
                                            Relationship</th>
                                        <th scope="col" style="font-weight: 600">
                                            Monthly income from assets</th>
                                        <th scope="col" style="font-weight: 600">
                                            Monthly gross income</th>
                                        <th scope="col" style="font-weight: 600">
                                            Monthly net income</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                     $serial=0;   
                                    @endphp

                                    @foreach($applicantFamilyMonthlyIncomes as $details)
                                    <tr>
                                        <th scope="row">{{++$serial}}</th>
                                        <td>{{$details['applicant_family_monthly_incomes_member_name']}}</td>
                                        <td>{{$details['applicant_family_monthly_incomes_member_relation']}}</td>
                                        <td>{{$details['applicant_family_monthly_incomes_member_monthly_asset_income']}}</td>
                                        <td>{{$details['applicant_family_monthly_incomes_member_monthly_gross_income']}}</td>
                                        <td>{{$details['applicant_family_monthly_incomes_member_monthly_net_income']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                        {{-- 8. Asset Monthly Income --}}

                        <div class="mb-13">

                            <!--begin::Description-->
                            <hr>
                            <div class="text-solid fw-bold h2" style="text-align: center">Asset Monthly Income Information</div>
                            <hr>
                            <br>
                            <!--end::Description-->

                            {{-- Table of family members data --}}
                            
                            <table class="table" style="margin-left:20px">
                                <thead>
                                    <tr>
                                        <th scope="col" style="font-weight: 600">
                                            S#</th>
                                        <th scope="col" style="font-weight: 600">
                                            Income Type</th>
                                        <th scope="col" style="font-weight: 600">
                                            Father</th>
                                        <th scope="col" style="font-weight: 600">
                                            Mother</th>
                                        <th scope="col" style="font-weight: 600">
                                            Spouse</th>
                                        <th scope="col" style="font-weight: 600">
                                            Self</th>
                                        <th scope="col" style="font-weight: 600">
                                            Other</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                     $serial=0;   
                                    @endphp

                                    @foreach($applicantAssetMonthlyIncomes as $details)
                                    <tr>
                                        <th scope="row">{{++$serial}}</th>
                                        <td>{{$details['applicant_asset_monthly_incomes_type']}}</td>
                                        <td>{{$details['applicant_asset_monthly_incomes_to_father']}}</td>
                                        <td>{{$details['applicant_asset_monthly_incomes_to_mother']}}</td>
                                        <td>{{$details['applicant_asset_monthly_incomes_to_spouse']}}</td>
                                        <td>{{$details['applicant_asset_monthly_incomes_to_self']}}</td>
                                        <td>{{$details['applicant_asset_monthly_incomes_to_other']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                        {{-- 9. Accomodation Expenditure --}}

                        <div class="mb-13">
                            <!--begin::Description-->
                            <hr>
                            <div class="text-solid fw-bold h2" style="text-align: center">Accomodation Expenditure Information</div>
                            <hr>
                            <br>
                            <!--end::Description-->

                            @foreach($applicantFamilyAccomodationExpenditures as $details)

                            {{-- <h4>House Type:</h4>
                            <p>{{$details['applicant_family_accomodation_expenditures_type']}}</p>

                            <h4>Status:</h4>
                            <p>{{$details['applicant_family_accomodation_expenditures_status']}}</p>
                            
                            <h4>Rent payment:</h4>
                            <p>{{$details['applicant_family_accomodation_expenditures_rent_payment_type']}}</p>
                            <h4>House Plot Size in sq covered area:</h4>
                            <p>{{$details['applicant_family_accomodation_expenditures_plot_size']}}</p>
                            
                            <h4>Accomodation Location/Address Name:</h4>
                            <p>{{$details['applicant_family_accomodation_expenditures_address']}}</p>
                            
                            <h4>Number of bed rooms:</h4>
                            <p>{{$details['applicant_family_accomodation_expenditures_total_bed_rooms']}}</p>
                            
                            <h4>Number of A.C:</h4>
                            <p>{{$details['applicant_family_accomodation_expenditures_total_ACs']}}</p>
                            
                            <h4>Accomodation Monthly Rent:</h4>
                            <p>{{$details['applicant_family_accomodation_expenditures_monthly_rent']}}</p>
                            
                            <h4>Accomodation Annual Rent:</h4>
                            <p>{{$details['applicant_family_accomodation_expenditures_annual_rent_expense']}}
                            </p>

                            <h4>Total Accomodation Rental Expenditure:</h4>
                            <p>{{$details['applicant_family_accomodation_expenditures_total_rent_expense']}}
                            </p> --}}

                            <table class="table" style="width: 50%; margin:auto;">
                                <tbody>
                                    <tr>
                                        <td style="font-weight: 600">House Type</td>
                                        <td>{{$details['applicant_family_accomodation_expenditures_type']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Status</td>
                                        <td>{{$details['applicant_family_accomodation_expenditures_status']}}</td>
                                    </tr>

                                    <tr>
                                        <td style="font-weight: 600">Rent payment</td>
                                        <td>{{$details['applicant_family_accomodation_expenditures_rent_payment_type']}}</td>
                                    </tr>
                                        
                                    <tr>
                                        <td style="font-weight: 600">House Plot Size in sq covered area</td>
                                        <td>{{$details['applicant_family_accomodation_expenditures_plot_size']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Accomodation Location/Address Name</td>
                                        <td>{{$details['applicant_family_accomodation_expenditures_address']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Number of bed rooms</td>
                                        <td>{{$details['applicant_family_accomodation_expenditures_total_bed_rooms']}}</td>
                                    </tr>

                                    <tr>
                                        <td style="font-weight: 600">Number of A.C</td>
                                        <td>{{$details['applicant_family_accomodation_expenditures_total_ACs']}}</td>
                                    </tr>

                                    <tr>
                                        <td style="font-weight: 600">Accomodation Monthly Rent</td>
                                        <td>{{$details['applicant_family_accomodation_expenditures_monthly_rent']}}</td>
                                    </tr>

                                    <tr>                                   
                                        <td style="font-weight: 600">Accomodation Annual Rent</td>
                                        <td>{{$details['applicant_family_accomodation_expenditures_annual_rent_expense']}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="font-weight: 600">Total Accomodation Rental Expenditure</td>
                                        <td>{{$details['applicant_family_accomodation_expenditures_total_rent_expense']}}
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>

                            @endforeach

                        </div>

                        {{-- 10. Other Accomodation Expenditure --}}

                        <div class="mb-13">
                            <!--begin::Description-->
                            <hr>
                            <div class="text-solid fw-bold h2" style="text-align: center">Other Accomodation Expenditure Information</div>
                            <hr>
                            <br>
                            <!--end::Description-->

                            @foreach($applicantOtherAccomodationExpenditures as $details)

                            
                            <table class="table table-bordered" style="width: 50%; margin:auto;">
                                <tbody>
                                    <tr>
                                        <td style="font-weight: 600">Telephone</td>
                                        <td>{{$details['applicant_other_accomodation_expenditures_telephone']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Electricity</td>
                                        <td>{{$details['applicant_other_accomodation_expenditures_electricity']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Gas</td>
                                        <td>{{$details['applicant_other_accomodation_expenditures_gas']}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Water</td>
                                        <td>{{$details['applicant_other_accomodation_expenditures_water']}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Education</td>
                                        <td>{{$details['applicant_other_accomodation_expenditures_education']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Accomodation</td>
                                        <td>{{$details['applicant_other_accomodation_expenditures_accomodation']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Utilities</td>
                                        <td>{{$details['applicant_other_accomodation_expenditures_utilities']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Medical</td>
                                        <td>{{$details['applicant_other_accomodation_expenditures_medical']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Misc</td>
                                        <td>
                                            {{$details['applicant_other_accomodation_expenditures_misc']}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            @endforeach

                        </div>


                        {{-- 11. Asset with current market value --}}

                        <div class="mb-13">

                            <!--begin::Description-->
                            <hr>
                            <div class="text-solid fw-bold h2" style="text-align: center">Asset with current market value information</div>
                            <hr>
                            <br>
                            <!--end::Description-->
                            
                            <table class="table" style="margin-left:20px">
                                <thead>
                                    <tr>
                                        <th scope="col" style="font-weight: 600">
                                            S#</th>
                                        <th scope="col" style="font-weight: 600">
                                            Transport Type</th>
                                        <th scope="col" style="font-weight: 600">
                                            Make/Model</th>
                                        <th scope="col" style="font-weight: 600">
                                            Engine Capacity (CC)</th>
                                        <th scope="col" style="font-weight: 600">
                                            Registration No</th>
                                        <th scope="col" style="font-weight: 600">
                                            Ownership Period</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                     $serial=0;   
                                    @endphp

                                    @foreach($applicantOtherAssets as $details)
                                    <tr>
                                        <th scope="row">{{++$serial}}</th>
                                        <td>{{$details['applicant_other_assets_transport_type']}}</td>
                                        <td>{{$details['applicant_other_assets_model_no']}}</td>
                                        <td>{{$details['applicant_other_assets_engine_capacity']}}</td>
                                        <td>{{$details['applicant_other_assets_reg_no']}}</td>
                                        <td>{{$details['applicant_other_assets_ownership_period']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                        {{-- 12. Area & Location of Land/Plots Owned --}}

                        <div class="mb-13">

                            <!--begin::Description-->
                            <hr>
                            <div class="text-solid fw-bold h2" style="text-align: center">Area & Location of Land/Plots Owned Information</div>
                            <hr>
                            <br>
                            <!--end::Description-->
                            
                            <table class="table" style="margin-left:20px">
                                <thead>
                                    <tr>
                                        <th scope="col" style="font-weight: 600">
                                            S#</th>
                                        <th scope="col" style="font-weight: 600">
                                            Asset title</th>
                                        <th scope="col" style="font-weight: 600">
                                            Qty</th>
                                        <th scope="col" style="font-weight: 600">
                                            Size</th>
                                        <th scope="col" style="font-weight: 600">
                                            Location</th>
                                        <th scope="col" style="font-weight: 600">
                                            Cultivable Area</th>
                                        <th scope="col" style="font-weight: 600">
                                            Agricultural</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                     $serial=0;   
                                    @endphp

                                    @foreach($applicantOwnedPlots as $details)
                                    <tr>
                                        <th scope="row">{{++$serial}}</th>
                                        <td>{{$details['applicant_owned_plots_asset_type']}}</td>
                                        <td>{{$details['applicant_owned_plots_quantity']}}</td>
                                        <td>{{$details['applicant_owned_plots_size']}}</td>
                                        <td>{{$details['applicant_owned_plots_location']}}</td>
                                        <td>{{$details['applicant_owned_plots_cultivable_area']}}</td>
                                        <td>{{$details['applicant_owned_plots_agricultural']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            

                        </div>

                        {{-- 13. Asset Worth Current Market Value --}}

                        <div class="mb-13">

                            <!--begin::Description-->
                            <hr>
                            <div class="text-solid fw-bold h2" style="text-align: center">Asset Worth Current Market Value Information</div>
                            <hr>
                            <br>
                            <!--end::Description-->
                            
                            <table class="table" style="margin-left:20px">
                                <thead>
                                    <tr>
                                        <th scope="col" style="font-weight: 600">
                                            S#</th>
                                        <th scope="col" style="font-weight: 600">
                                            Asset title</th>
                                        <th scope="col" style="font-weight: 600">
                                            Father</th>
                                        <th scope="col" style="font-weight: 600">
                                            Mother</th>
                                        <th scope="col" style="font-weight: 600">
                                            Spouse</th>
                                        <th scope="col" style="font-weight: 600">
                                            Guardian</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                     $serial=0;   
                                    @endphp

                                    @foreach($applicantWorthAssets as $details)
                                    <tr>
                                        <th scope="row">{{++$serial}}</th>
                                        <td>{{$details['applicant_worth_assets_asset_title']}}</td>
                                        <td>{{$details['applicant_worth_assets_to_father']}}</td>
                                        <td>{{$details['applicant_worth_assets_to_mother']}}</td>
                                        <td>{{$details['applicant_worth_assets_to_spouse']}}</td>
                                        <td>{{$details['applicant_worth_assets_to_guardian']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        
                        {{-- 14. Loan Taken for Application Education --}}
                        
                        <div class="mb-13">
                            <!--begin::Description-->
                            <hr>
                            <div class="text-solid fw-bold h2" style="text-align: center">Loan Taken for Application Education Information</div>
                            <hr>
                            <br>
                            <!--end::Description-->
                            
                            @if($applicantLoans!=NULL)
                            
                            @foreach($applicantLoans as $details)

                            
                            <table class="table table-bordered" style="width: 50%; margin:auto;">
                                <tbody>
                                    <tr>
                                        <td style="font-weight: 600">Statement of Purpose 1</td>
                                        <td>{{$details['applicant_loans_loan_one_reason']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Statement of Purpose 2</td>
                                        <td>{{$details['applicant_loans_loan_two_reason']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Statement of Purpose 3</td>
                                        <td>{{$details['applicant_loans_loan_three_reason']}}</td>
                                    </tr>
                                </tbody>
                            </table>

                            @endforeach

                            @else

                            <h3 style="text-align: center">No information to show!</h3>
                            
                            @endif

                        </div>

                        {{-- 15. Applicant Educational Records --}}

                        <div class="mb-13">
            
                            <!--begin::Description-->
                            <hr>
                            <div class="text-solid fw-bold h2" style="text-align: center">Applicant Educational Records Information</div>
                            <hr>
                            <br>
                            <!--end::Description-->
                            
                            <table class="table" style="margin-left:20px">
                                <thead>
                                    <tr>
                                        <th scope="col" style="font-weight: 600">
                                            S#</th>
                                        <th scope="col" style="font-weight: 600">
                                            Level of study</th>
                                        <th scope="col" style="font-weight: 600">
                                            Name of institute</th>
                                        <th scope="col" style="font-weight: 600">
                                            Per month fees</th>
                                        <th scope="col" style="font-weight: 600">
                                            From</th>
                                        <th scope="col" style="font-weight: 600">
                                            To</th>
                                        <th scope="col" style="font-weight: 600">
                                            GPA/Division</th>
                                        <th scope="col" style="font-weight: 600">
                                            %/CGPA</th>
                                    </tr>
                                </thead>
                                <tbody>
            
                                    @php
                                     $serial=0;   
                                    @endphp
            
                                    @foreach($applicantEducationRecords as $details)
                                    <tr>
                                        <th scope="row">{{++$serial}}</th>
                                        <td>{{$details['applicant_education_records_level_of_study']}}</td>
                                        <td>{{$details['applicant_education_records_institution_name']}}</td>
                                        <td>{{$details['applicant_education_records_per_month_fees']}}</td>
                                        <td>{{$details['applicant_education_records_from_date']}}</td>
                                        <td>{{$details['applicant_education_records_to_date']}}</td>
                                        <td>{{$details['applicant_education_records_gpa_division']}}</td>
                                        <td>{{$details['applicant_education_records_cgpa_percentage']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
            
                        </div>


                        {{-- 16. Other Scholarships --}}

                        <div class="mb-13">
                            <!--begin::Description-->
                            <hr>
                            <div class="text-solid fw-bold h2" style="text-align: center">Other Scholarships Information</div>
                            <hr>
                            <br>
                            <!--end::Description-->
                            
                            @if($applicantOtherScholarshipDetails!=NULL)
                            
                            @foreach($applicantOtherScholarshipDetails as $details)

                            
                            <table class="table table-bordered" style="width: 50%; margin:auto;">
                                <tbody>
                                    <tr>
                                        <td style="font-weight: 600">Name of institution</td>
                                        <td>{{$details['applicant_other_scholarships_institution_name']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Scholarship Name</td>
                                        <td>{{$details['applicant_other_scholarships_name']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Total Scholarship Amount</td>
                                        <td>{{$details['applicant_other_scholarships_total_amount']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Total Scholarship Period</td>
                                        <td>{{$details['applicant_other_scholarships_total_period']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Class/Level at which scholarship was granted</td>
                                        <td>{{$details['applicant_other_scholarships_class_level_granted']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600">Statement of Purpose</td>
                                        <td>{{$details['applicant_other_scholarships_purpose']}}</td>
                                    </tr>
                                </tbody>
                            </table>

                            @endforeach

                            @else

                            <h3 style="text-align: center">No information to show!</h3>
                            
                            @endif

                        </div>
                        
                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->
                    <!--begin::Footer-->
						<div id="kt_app_footer" class="app-footer">
							<!--begin::Footer container-->
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2023&copy;</span>
									<a href="{{{route('admin.home')}}}" class="text-gray-800 text-hover-primary">SMS</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://keenthemes.com/" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.keenthemes.com/" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end:::Main-->
@endsection