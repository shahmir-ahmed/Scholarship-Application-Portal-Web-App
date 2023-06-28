<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scholarship Details - SMS</title>
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
    {{-- View scholarship details and apply --}}
    <div class="d-flex justify-content-between align-items-center shadow-sm" style="height: 80px; margin: 0 0 20px 0">
        <div class="logo" style="width:10%">
            <a href="{{route('home')}}">
                <img alt="Logo" src="{{asset('Eziline/Scholarship Management System/public/logo.png')}}" class="logo-default h-75px h-lg-100px" style="padding-left: 30px; padding-bottom: 10px"/>
            </a>
        </div>
        @foreach($Scholarship as $details)
        <div class="title" style="width:90%; margin-right:120px; text-align:center;">
            <h1>Scholarship details for <i>{{$details->scholarship_name}}</i></h1>
        </div>
    </div>

            {{-- card start --}}
            
            <div class="card shadow-sm" style="width:85%; margin: auto;">
                <div class="card-header">
                    <h3 class="card-title">
                        {{$details->scholarship_name}}
                    </h3>
                </div>
                <div class="card-body">

                            <h4>Description:</h4>
                            <p>{{$details->scholarship_desc}}</p>

                            <h4>Eligibility Criteria:</h4>
                            <p style="white-space: pre-line">{{$details->scholarship_eligibility_criteria}}</p>

                            <h4>Last date to apply:</h4>
                            <p>
                                @php
                                    $date = $details->scholarship_last_date;

                                    $createDate = new DateTime($date);

                                    $strip = $createDate->format('d-m-Y');

                                    echo($strip); 	
                                @endphp
                            </p>
                            {{-- <p>{{$details->scholarship_last_date}}</p> --}}

                        </div>
                        <div class="card-footer">
                            <div class="text-center" style="width: 30%; margin:auto;">

                                @php
                                 $todayDate = date('Y-m-d');
                                @endphp

                                {{-- If the scholarship last date has passed --}}
                                @if($details->scholarship_last_date < $todayDate)
                                <a href="#" onclick="alert('Sorry the last date has passed!')" class="w-100 btn btn-secondary" disabled>Apply</a>
                                {{-- If user is logegd in --}}
                                {{-- @elseif(Auth::check()) --}}
                                {{-- If user has not applied to this scholarship --}}
                                @elseif($applied==NULL)
                                <a href="{{route('scholarship.apply', ['scholarshipId' => $details->scholarship_id])}}" class="w-100 btn btn-primary">Apply</a>
                                {{-- <a href="{{route('scholarship.apply', ['scholarshipId' => $details->scholarship_id])}}" class="w-100 btn btn-primary">Apply</a> --}}
                                @else
                                <a href="{{route('profile')}}" class="w-100 btn btn-success">You have already applied!</a>
                                @endif

                                
                                {{-- If not logged in --}}
                                {{-- @else
                                <a href="{{route('login')}}" class="w-100 btn btn-primary">Apply</a>
                                @endif --}}
                            </div>
                        </div>
                    </div>
                    @endforeach

        {{-- Script starts here --}}
    <script src="{{asset('Eziline/Scholarship Management System/public/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('Eziline/Scholarship Management System/public/js/scripts.bundle.js')}}"></script>

</body>
</html>
