<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMS - Application - Student Information</title>
    <link rel="shortcut icon" href="{{asset('Eziline/Scholarship Management System/public/favicon.ico')}}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{asset('Eziline/Scholarship Management System/public/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('Eziline/Scholarship Management System/public/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
</head>
<body>
    
    <div class="d-flex justify-content-between align-items-center shadow-sm" style="height: 80px; margin: 0 0 20px 0">
        <div class="logo">
            <img alt="Logo" src="{{asset('Eziline/Scholarship Management System/public/logo.png')}}" class="logo-default h-75px h-lg-80px" style="padding-left: 30px; padding-bottom: 10px"/>
        </div>
        <div class="title" style="width:60%">
            <h1>Application Form - Step 2</h1>
        </div>
    </div>

    {{-- card start --}}
    <div class="card shadow-sm" style="width:85%; margin: auto;">
        <div class="card-header">
            <h3 class="card-title">
                Current Employment Information
            </h3>
            {{-- <div class="card-toolbar">
                <a href="{{route('application.showFamilyMemberDetailsForm', $scholarship)}}"class="btn btn-sm btn-light">
                    Skip & Continue
                </a>
            </div> --}}
        </div>
        <div class="card-body">
            {{-- Form starts here --}}
            {{-- <form class="form" action="{{route('application.storeEmploymentDetails', $scholarship)}}" method="POST"> --}}
                @csrf
                <div class="card-body">
                    <h4 class="font-size-lg text-dark font-weight-bold mb-20">Are you currently working? If yes then fill this form otherwise skip & continue!</h4>

                    <div class="mb-15">
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Designation</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="applicant_employment_designation" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Name of Company/Organization</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="applicant_employment_company_name" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Total Monthly Gross Income in PKR</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="applicant_employment_gross_income" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Total Monthly Income in PKR</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="applicant_employment_monthly_income" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Telephone No</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="applicant_employment_telephone_number" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Email</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="applicant_employment_email" required/>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Save & Continue</button>
                </div>
            </form>
        </div>

        {{-- Script starts here --}}
    <script src="{{asset('Eziline/Scholarship Management System/public/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('Eziline/Scholarship Management System/public/js/scripts.bundle.js')}}"></script>
</body>
</html>