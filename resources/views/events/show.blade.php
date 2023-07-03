@extends('layouts.app')

@section('title', 'Event')

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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Events</h1>
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
                            <a href="{{route('events.index')}}" class="text-muted text-hover-primary">All Events</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Event</li>
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
                            <h1 class="mb-3">Event details</h1>
                            <!--end::Title-->
                        </div>
                        <div class="mb-13">
                            <!--begin::Description-->
                            <div class="text-solid fw-semibold fs-5">Below are the details of the event:</div>
                                <!--end::Description-->
                        </div>
                        <!--end::Heading-->
                        
                        <div class="mb13">
                            @foreach($Event as $details)

                            <h4>Name:</h4>
                            <p>{{$details->event_name}}</p>
                            
                            <h4>Location:</h4>
                            <p>{{$details->event_location}}</p>

                            @php
                                $date = $details->event_date;

                                $createDate = new DateTime($date);

                                $correctedDate = $createDate->format('d-F-Y');
                            @endphp
                            
                            <h4>Date:</h4>
                            <p>{{$correctedDate}}</p>

                            @php
                                $time = $details->event_time;

                                $createTime = new DateTime($time);

                                $strippedTime = $createTime->format('H:ma');
                            @endphp

                            <h4>Time:</h4>
                            <p>{{$strippedTime}}</p>

                            <h4>Description:</h4>
                            <p style="white-space: pre-line">{{$details->event_desc}}</p>

                            @endforeach
                        </div>
                    </div>
                    <!--end::Content container-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->
@endsection