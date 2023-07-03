<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ScholarApplica - My Account</title>
    <link rel="shortcut icon" href="{{asset('Eziline/Scholarship Management System/public/favicon.ico')}}" />
    <link href="{{asset('Eziline/Scholarship Management System/public/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    <style>
        body {
            margin-top: 20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }

        .main-body {
            padding: 15px;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm>.col,
        .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }

        .h-100 {
            height: 100% !important;
        }

        .shadow-none {
            box-shadow: none !important;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->
            <form method="POST" action="{{route('update-profile')}}" enctype="multipart/form-data">
                
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                    {{-- Is there is subscription record for user --}}
                    @if($anySubcription)
                    <div class="card" style="height: 371px !important;">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                @if($base64Image==NULL)
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="User"
                                    class="rounded-circle" width="150">
                                @else
                                    <!-- Display the image -->
                                    <img src="{{ 'data:image/png;base64,' . $base64Image }}" alt="Image" name="userImage" width="150" height="150px" style="border-radius:47%;">
                                    @endif
                                <div class="mt-3">
                                    <h4>{{Auth::user()->name}}</h4>
                                </div>
                            </div>
                            <hr>
                            {{-- Is there is subscription record for user --}}
                            {{-- @if($anySubcription) --}}
                            <div class="mt-3">
                                <h4>
                                    Subscription details: 
                                    {{-- (Current/Past) --}}
                                </h4>
                                <br>
                                <p>
                                    <b>Duration:</b>&nbsp;{{$subscriptionStartDate}} <b>-</b> {{$subscriptionExpiryDate}}</p>
                                @if($subscriptionStatus == "Active")
                                <p>
                                    <b>Status:</b>&nbsp; 
                                    <span style="color:green!important;">{{$subscriptionStatus}}</span>
                                </p>
                                @else
                                <p><b>Status:</b>&nbsp; <span style="color:red!important;">{{$subscriptionStatus}}</span></p>
                                @endif
                            </div>
                            <hr>
                            {{-- @endif --}}

                            @else

                            <div class="card" style="height: 301px !important;">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        @if($base64Image==NULL)
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="User"
                                            class="rounded-circle" width="150">
                                        @else
                                            <!-- Display the image -->
                                            <img src="{{ 'data:image/png;base64,' . $base64Image }}" alt="Image" name="userImage" width="150" height="150px" style="border-radius:47%;">
                                            @endif
                                        <div class="mt-3">
                                            <h4>{{Auth::user()->name}}</h4>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="mt-3">
                                        <p class="text-center fs-12">
                                             No subscription details found!
                                        </p>
                                    </div>
                                    <hr>
                            @endif
                        </div>
                    </div>
                    {{-- <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-globe mr-2 icon-inline">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path
                                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                        </path>
                                    </svg>Website</h6>
                                <span class="text-secondary">https://bootdey.com</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-github mr-2 icon-inline">
                                        <path
                                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                        </path>
                                    </svg>Github</h6>
                                <span class="text-secondary">bootdey</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-twitter mr-2 icon-inline text-info">
                                        <path
                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                        </path>
                                    </svg>Twitter</h6>
                                <span class="text-secondary">@bootdey</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-instagram mr-2 icon-inline text-danger">
                                        <rect x="2" y="2" width="20" height="20" rx="5"
                                            ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>Instagram</h6>
                                <span class="text-secondary">bootdey</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-facebook mr-2 icon-inline text-primary">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                        </path>
                                    </svg>Facebook</h6>
                                <span class="text-secondary">bootdey</span>
                            </li>
                        </ul>
                    </div> --}}
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mt-5">Profile picture</h6>
                                </div>
                                <div class="col-sm-9 text-secondary mt-5">
                                    <input type="file" name="userImage" id="">
                                </div>
                            </div>
                            <hr>
                                @csrf
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mt-5">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="{{Auth::user()->name}}" name="name" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mt-5">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="{{Auth::user()->email}}" name="emailAddress" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button class="btn btn-info " onclick="return confirm('Are you sure you want to update your profile?')" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row gutters-sm">
                        <div class="col-sm-12 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3 material-icons text-info mr-2">
                                        Applied scholarships: ({{count($appliedScholarships)}})
                                    </h6>
                                    {{-- <small>Web Design</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Website Markup</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%"
                                            aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>One Page</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%"
                                            aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Mobile Template</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%"
                                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Backend API</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%"
                                            aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        
                        {{-- <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i
                                            class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                    <small>Web Design</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Website Markup</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%"
                                            aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>One Page</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%"
                                            aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Mobile Template</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%"
                                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Backend API</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%"
                                            aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    

                    {{-- Cards of scholarship on which user has applied --}}

                    @php
                        $count=0;
                    @endphp

                    <div class="row gutters-sm">
                    @foreach($appliedScholarships as $appliedScholarship)

                        {{-- count to know that there are shcolarship applications for this user or not --}}
                        @php
                        $count++
                        @endphp

                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3 material-icons mr-2 fw-normal">
                                        <b>Name:&nbsp;</b> {{$appliedScholarship->scholarship_name}}
                                    </h6>
                                    @php
                                        // {{-- removing time from data and correcting the format --}}
                                        $date = $appliedScholarship->created_at;

                                        $createDate = new DateTime($date);

                                        $strippedDate = $createDate->format('d-m-Y h:ma');

                                        $appliedDate = $strippedDate;
                                    @endphp
                                    <h6 class="d-flex align-items-center mb-3 material-icons mr-2 fw-normal">
                                        <b>Date applied:&nbsp;</b> {{$appliedDate}}</h6>
                                        
                                        @if($appliedScholarship->applied_scholarships_status == "Submitted")

                                        <h6 style="color: #25a3f5!important" class="d-flex align-items-center mb-3 material-icons mr-2">
                                        <span style="color:black!important;">Status:&nbsp;</span>  
                                        {{$appliedScholarship->applied_scholarships_status}}
                                        </h6>

                                        @elseif($appliedScholarship->applied_scholarships_status == "Verified")

                                        <h6 style="color: #2bcb43!important" class="d-flex align-items-center mb-3 material-icons mr-2">
                                        <span style="color:black!important;">Status:&nbsp;</span>  {{$appliedScholarship->applied_scholarships_status}}
                                        </h6>

                                        @elseif($appliedScholarship->applied_scholarships_status == "Disapproved")

                                        <h6 style="color: #ef1a64!important"  class="d-flex align-items-center mb-3 material-icons mr-2">
                                        <span style="color:black!important;">Status:&nbsp;</span>  {{$appliedScholarship->applied_scholarships_status}}
                                        </h6>

                                        @elseif($appliedScholarship->applied_scholarships_status == "Selected")

                                        <h6 style="color: #c916a3!important"  class="d-flex align-items-center mb-3 material-icons mr-2">
                                        <span style="color:black!important;">Status:&nbsp;</span>  {{$appliedScholarship->applied_scholarships_status}}
                                        </h6>

                                        @elseif($appliedScholarship->applied_scholarships_status == "Not Selected")

                                        <h6 style="color: #efbb1a!important"  class="d-flex align-items-center mb-3 material-icons mr-2">
                                        <span style="color:black!important;">Status:&nbsp;</span>  {{$appliedScholarship->applied_scholarships_status}}
                                        </h6>

                                        @elseif($appliedScholarship->applied_scholarships_status == "Scholarship granted")

                                        <h6 style="color: #2bcb43!important"  class="d-flex align-items-center mb-3 material-icons mr-2">
                                        <span style="color:black!important;">Status:&nbsp;</span>  {{$appliedScholarship->applied_scholarships_status}}
                                        </h6>

                                        @endif           

                                        {{-- Status: {{$application->applied_scholarships_status}} --}}
                                </div>
                            </div>
                        </div>
                        
                    @endforeach
                    </div>

                    @if($count==0)
                    <div class="col-sm-12 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3 material-icons mr-2">
                                    You have not applied to any scholasrhips!
                                </h6>
                            </div>
                        </div>
                    </div>
                    @endif

                    
                </div>
            </div>

        </div>
    </div>

</body>

</html>
