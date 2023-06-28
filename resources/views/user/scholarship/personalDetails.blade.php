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
            <h1>Application Form</h1>
        </div>
    </div>

    {{-- card start --}}
    <div class="card shadow-sm" style="width:85%; margin: auto;">
        <div class="card-header">
            <h3 class="card-title">
                Student Information
            </h3>
            {{-- <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-light">
                    Skip & Continue
                </button>
            </div> --}}
        </div>
        <div class="card-body">
            {{-- Form starts here --}}
            {{-- <form class="form" action="{{route('application.storePersonalDetails', $scholarship)}}" method="POST"> --}}
                @csrf
                <div class="card-body">
                    <h4 class="font-size-lg text-dark font-weight-bold mb-20">Please fill in your personal details completely and correctly to the best of your knowledge!</h4>

                    <div class="mb-15">
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">University Name</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="applicant_uni" placeholder="Lahore University of Management & Sciences" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Degree title/Program</label>
                            <div class="col-lg-6">
                                <select name="applicant_degree" id="" class="form-control" required>
                                    <option value="">Select Degree</option>
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="International Relations">International Relations</option>
                                    <option value="Business Management System">Business Management System</option>
                                    <option value="Environmental Science">Environmental Science</option>
                                    <option value="Behaviour Science">Behaviour Science</option>
                                    <option value="Behaviour Science">Behaviour Science</option>
                                    <option value="Mathematical Science">Mathematical Science</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Media & Communication">Media & Communication</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Registration No</label>
                            <div class="col-lg-6">
                                <input type="text" name="applicant_reg_no" class="form-control" placeholder="" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Student Name</label>
                            <div class="col-lg-6">
                                <input type="text" name="applicant_name" class="form-control" placeholder="" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Semester</label>
                            <div class="col-lg-6">
                                <select name="applicant_semester" id="" class="form-control" required>
                                    <option value="">Select Degree</option>
                                    <option value="First Semester">First Semester</option>
                                    <option value="Second Semester">Second Semester</option>
                                    <option value="Third Semester">Third Semester</option>
                                    <option value="Fourth Semester">Fourth Semester</option>
                                    <option value="Fifth Semester">Fifth Semester</option>
                                    <option value="Sixth Semester">Sixth Semester</option>
                                    <option value="Seventh Semester">Seventh Semester</option>
                                    <option value="Eight Semester">Eight Semester</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">CGPA</label>
                            <div class="col-lg-6">
                                <input type="text" name="applicant_CGPA" class="form-control" placeholder="3.1" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Gender</label>
                            <div class="col-lg-6">
                                <select name="applicant_gender" id="" class="form-control" required>
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Date of birth</label>
                            <div class="col-lg-6">
                                <input type="date" max="{{date('Y-m-d')}}" name="applicant_dob" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">CNIC</label>
                            <div class="col-lg-6">
                                <input type="text" name="applicant_CNIC" class="form-control" placeholder="(xxxxx-xxxxxxx-x)" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Martial Status</label>
                            <div class="col-lg-6">
                                <select name="applicant_martial_status" id="" class="form-control" required>
                                    <option value="">Select Martial Status</option>
                                    <option value="Male">Single</option>
                                    <option value="Female">Married</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Age</label>
                            <div class="col-lg-6">
                                <input type="text" name="applicant_age" class="form-control" placeholder="19" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Domicile</label>
                            <div class="col-lg-6">
                                <input type="text" name="applicant_domicile" class="form-control" placeholder="Lahore" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Present Address</label>
                            <div class="col-lg-6">
                                <input type="text" name="applicant_present_address" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Permanant Address</label>
                            <div class="col-lg-6">
                                <input type="text" name="applicant_permanant_address" class="form-control" required/>
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