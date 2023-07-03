@extends('layouts.app')

@section('title', 'Subscription')

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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Subscription</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('admin.home')}}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('subscriptions.index')}}" class="text-muted text-hover-primary">All Subscriptions</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Subscription</li>
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
                    <h1 class="mb-3">Subscription details</h1>
                    <!--end::Title-->
                </div>
                <div class="mb-13">
                    <!--begin::Description-->
                    <div class="text-solid fw-semibold fs-5">Below are the details of the subscription:</div>
                        <!--end::Description-->
                </div>
                <!--end::Heading-->
                
                <div class="mb13">
                    @foreach($Subscription as $subscription)

                    <h4>Subscriber name:</h4>
                    <p>{{$subscription->name}}</p>

                    <h4>Email:</h4>
                    <p>{{$subscription->email}}</p>

                    {{-- removing time from data and correcting the format --}}
                    @php
                        $date = $subscription->created_at;

                        $createDate = new DateTime($date);

                        $strip = $createDate->format('d-m-Y');
                    @endphp       
                    
                    <h4>Purchased date:</h4>
                    <p>{{$strip}}</p>

                    {{-- Calculating date 30 days after subscription date --}}
                    @php
                        $subscriptionDate = $subscription->created_at;

                        // Calculate the date after 30 days
                        $dateAfter30Days = date('d-m-Y', strtotime($subscriptionDate . ' +30 days'));
                    @endphp                
                    
                    <h4>Expiring date:</h4>
                    <p>{{$dateAfter30Days}}</p>

                    {{-- Based on the difference between starting and today's date checking if subscription has expired or not --}} 
                    {{-- Alternate way --}}
                    {{-- Another way can be to directly check if ending date is greater than today's date then the subscription is active otherwise it is expired --}}
                    @php
                        // subscription purchased date
                        $date = $subscription->created_at;

                        // today's date
                        $now = time(); // or your date as well
                        // echo $now;
                        $your_date = strtotime($date); // converting subscription date to strtotime
                        // echo $your_date;
                        $datediff = $now - $your_date; // calculating difference between dates
                        
                        // rounding off the difference
                        $rounded = round($datediff / (60 * 60 * 24));

                        // echo $rounded;

                        // if days from subscription purchased date till today are less than 30 (means subscription is new i.e. active)
                        if($rounded<30){
                            $active = true;
                        }
                        else{
                            $active = false;
                        }
                    @endphp

                    @if($active==true)
                    <h4>Status:</h4>
                    <p style="color: green!important;">Active</p>
                    @else
                    <h4>Status:</h4>
                    <p style="color: red!important;">Expired</p>
                    @endif                   

                    @endforeach
                </div>
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection