@extends('layouts.app')

@section('title', 'Edit Application Status')

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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">News</h1>
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
                        <li class="breadcrumb-item text-muted">All Applications</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Edit Application Status</li>
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
                        <!--begin:Form-->
                                <form id="kt_modal_new_target_form" class="form" action="{{route('applications.update', $appliedScholarshipId)}}" method="POST">

                                    @csrf
                                    <!--begin::Heading-->
                                    <div class="mb-13 text-center">
                                        <!--begin::Title-->
                                        <h1 class="mb-3">Edit Application Status</h1>
                                        <!--end::Title-->
                                    </div>
                                    <div class="mb-13">
                                        <!--begin::Description-->
                                        <div class="text-solid fw-semibold fs-5">Please select the new status of the application below:</div>
                                            <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">Status</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select the new status of application"></i>
                                        </label>
                                        <!--end::Label-->
                                        <select class="form form-control" name="newApplicationStatus" id="" required>

                                            @foreach($applicationStatus as $currentStatus)

                                            <option value="{{$currentStatus->applied_scholarships_status}}">{{$currentStatus->applied_scholarships_status}}</option>
                                            
                                            {{-- <option value="">-----Select new status-----</option> --}}

                                                @foreach($statusList as $statusOption)

                                                @if($statusOption!=$currentStatus->applied_scholarships_status)

                                                {{-- // then display --}}
                                                <option value="{{$statusOption}}">{{$statusOption}}</option>

                                                @else

                                                {{-- Not display --}}
                                                
                                                @endif


                                                {{-- // to iterate from list of status array --}}
                                                @endforeach

                                            {{-- // to iterate from current status array --}}
                                            @endforeach

                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                    <div class="text-center" style="text-align:center; width: 80%; margin:auto">
                                        <button onclick="return confirm('Are you sure you want to update status?')" style="width: 100%" type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                                <!--end:Form-->
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
									<a href="https://keenthemes.com/" target="_blank" class="text-gray-800 text-hover-primary">SMS</a>
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