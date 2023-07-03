@extends('layouts.app')

@section('title', 'Applications')

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
				<!--begin::Tables Widget 13-->
				<div class="card mb-5 mb-xl-8">
					<!--begin::Header-->
					<div class="card-header border-0 pt-5">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bold fs-3 mb-1">All Applications</span>
							<span class="text-muted mt-1 fw-semibold fs-7">Total {{$count}} applications</span>
						</h3>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body py-3">
						<!--begin::Table container-->
						<div class="table-responsive">
							<!--begin::Table-->
							<table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
								<!--begin::Table head-->
								<thead>
									<tr class="fw-bold text-muted">
										<th class="w-25px">
											S#
										</th>
										<th class="min-w-140px">Scholarship name</th>
										<th class="min-w-140px">Applied by</th>
										<th class="min-w-140px">Status</th>
										<th class="min-w-100px">Applying date</th>
										<th class="min-w-100px text-center">Actions</th>
									</tr>
								</thead>
								<!--end::Table head-->
								<!--begin::Table body-->
								<tbody>
									
									@foreach($applications as $application)

									<tr>

										<td>
											<span class="text-dark fw-bold fs-6">{{$serial++}}.</span>
										</td>

										<td>
											<span href="#" class="text-dark fw-normal d-block mb-1 fs-6">{{$application->scholarship_name}}</span>
										</td>

										<td>
											<span class="text-dark fw-normal fs-6">{{$application->name}}</span>
										</td>

										<td>
											{{-- @if($application->applied_scholarships_status == "Submitted")
											<span style="color: rgb(125, 125, 14)!important" class="text-dark fw-bold d-block mb-1 fs-6">
											{{$application->applied_scholarships_status}}</span>
											@elseif($application->applied_scholarships_status == "Accepted")
											<span style="color: green" class="text-dark fw-bold d-block mb-1 fs-6">
											{{$application->applied_scholarships_status}}</span>
											@elseif($application->applied_scholarships_status == "Rejected")
											<span style="color: red" class="text-dark fw-bold d-block mb-1 fs-6">
											{{$application->applied_scholarships_status}}</span>
											@endif --}}

											@if($application->applied_scholarships_status == "Submitted")
											<span style="color: #25a3f5!important" class="text-dark fw-bold d-block mb-1 fs-6">
											{{$application->applied_scholarships_status}}</span>

											@elseif($application->applied_scholarships_status == "Verified")
											<span style="color: #2bcb43!important" class="text-dark fw-bold d-block mb-1 fs-6">
											{{$application->applied_scholarships_status}}</span>

											@elseif($application->applied_scholarships_status == "Disapproved")
											<span style="color: #ef1a64!important" class="text-dark fw-bold d-block mb-1 fs-6">
											{{$application->applied_scholarships_status}}</span>

											@elseif($application->applied_scholarships_status == "Selected")
											<span style="color: #c916a3!important" class="text-dark fw-bold d-block mb-1 fs-6">
											{{$application->applied_scholarships_status}}</span>

											@elseif($application->applied_scholarships_status == "Not Selected")
											<span style="color: #efbb1a!important" class="text-dark fw-bold d-block mb-1 fs-6">
											{{$application->applied_scholarships_status}}</span>

											@elseif($application->applied_scholarships_status == "Scholarship granted")
											<span style="color: #7823c7!important" class="text-dark fw-bold d-block mb-1 fs-6">
											{{$application->applied_scholarships_status}}</span>
											@endif
											
										</td>

										<td>
											<span class="text-dark fw-normal d-block mb-1 fs-6">
												@php
													$date = $application->created_at;

													$createDate = new DateTime($date);

													$strip = $createDate->format('d-m-Y');

													echo($strip); 	
												@endphp
												{{-- {{$application->created_at}} --}}
											</span>
										</td>

										<td class="text-center">

											{{-- <a href="{{route('applications.show', ['$userId' => $application->applied_scholarships_user_id, '$scholarshipId' => $application->applied_scholarships_scholarship_id])}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"> --}}
											<a href="{{route('applications.show', ['applicationId' => $application->applied_scholarships_id,
											'scholarshipId' => $application->applied_scholarships_scholarship_id,
											'userId' => $application->applied_scholarships_user_id])}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
												<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
												<span class="svg-icon svg-icon-3">
													<i class="fa-solid fa-eye"></i>
												</span>
												<!--end::Svg Icon-->
											</a>

											<a href="{{route('applications.edit', ['applicationId' => $application->applied_scholarships_id])}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
												<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
												<span class="svg-icon svg-icon-3">
													<i class="fa-solid fa-pencil"></i>
												</span>
												<!--end::Svg Icon-->
											</a>

											<form style="display: inline" action="{{ route('applications.destroy', ['applicationId' => $application->applied_scholarships_id,
												'scholarshipId' => $application->applied_scholarships_scholarship_id,
												'userId' => $application->applied_scholarships_user_id]) }}" method="POST">
				
												@csrf
												
												<button class="btn btn-link btn btn-icon btn-bg-light btn-active-color-primary btn-sm" onclick="return confirm('Are you sure you want to delete the application?')" type="submit" class="btn-outline-primary">
													<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
													<span class="svg-icon svg-icon-3">
														<i class="fa-solid fa-trash"></i>
													</span>
													<!--end::Svg Icon-->
												</button>
											</form>
										</td>
									</tr>

									@endforeach

								</tbody>
								<!--end::Table body-->
							</table>
							<!--end::Table-->
						</div>
						<!--end::Table container-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Tables Widget 13-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
						
@endsection