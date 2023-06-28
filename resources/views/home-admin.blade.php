{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.app')

@section('title', 'Home')

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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Dashboard</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a class="text-muted text-hover-primary">Home</a>
                        </li>
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
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                        <!--begin::Card widget 20-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-100 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('assets/media/patterns/vector-1.png')">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Applications</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                        <span>43 Pending</span>
                                        <span>72%</span>
                                    </div>
                                    <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                        <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 20-->
                        
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                        <!--begin::Card widget 17-->
                        <div class="card card-flush h-md-100 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Currency-->
                                        <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                                        <!--end::Currency-->
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
                                        <!--end::Amount-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-light-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->2.2%</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span class="text-gray-400 pt-1 fw-semibold fs-6">Subscriptions Earnings in April</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                <!--begin::Chart-->
                                <div class="d-flex flex-center me-5 pt-2">
                                    <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
                                </div>
                                <!--end::Chart-->
                                <!--begin::Labels-->
                                <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                    <!--begin::Label-->
                                    <div class="d-flex fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-500 flex-grow-1 me-4">ABL</div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fw-semibold align-items-center my-3">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-500 flex-grow-1 me-4">HBL</div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-500 flex-grow-1 me-4">Others</div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 17-->
                        
                    </div>
                    <!--end::Col-->
                    
                </div>
                {{-- End row --}}
                <!--begin::Row-->
									<div class="row g-5 g-xl-8">
										<div class="col-xl-3">
											<!--begin::Statistics Widget 5-->
											<a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8">
												<!--begin::Body-->
												<div class="card-body">
													<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
													<span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
															<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
															<rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
															<rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">500M$</div>
													<div class="fw-semibold text-gray-400">Subscriptions Progress</div>
												</div>
												<!--end::Body-->
											</a>
											<!--end::Statistics Widget 5-->
										</div>
										<div class="col-xl-3">
											<!--begin::Statistics Widget 5-->
											<a href="#" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
												<!--begin::Body-->
												<div class="card-body">
													<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
													<span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="currentColor" />
															<path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="currentColor" />
															<path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<div class="text-gray-100 fw-bold fs-2 mb-2 mt-5">+3000</div>
													<div class="fw-semibold text-gray-100">New Users</div>
												</div>
												<!--end::Body-->
											</a>
											<!--end::Statistics Widget 5-->
										</div>
										<div class="col-xl-3">
											<!--begin::Statistics Widget 5-->
											<a href="#" class="card bg-warning hoverable card-xl-stretch mb-xl-8">
												<!--begin::Body-->
												<div class="card-body">
													<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
													<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
															<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<div class="text-white fw-bold fs-2 mb-2 mt-5">$50,000</div>
													<div class="fw-semibold text-white">Milestone Reached</div>
												</div>
												<!--end::Body-->
											</a>
											<!--end::Statistics Widget 5-->
										</div>
										<div class="col-xl-3">
											<!--begin::Statistics Widget 5-->
											<a href="#" class="card bg-info hoverable card-xl-stretch mb-5 mb-xl-8">
												<!--begin::Body-->
												<div class="card-body">
													<!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->
													<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M10.9607 12.9128H18.8607C19.4607 12.9128 19.9607 13.4128 19.8607 14.0128C19.2607 19.0128 14.4607 22.7128 9.26068 21.7128C5.66068 21.0128 2.86071 18.2128 2.16071 14.6128C1.16071 9.31284 4.96069 4.61281 9.86069 4.01281C10.4607 3.91281 10.9607 4.41281 10.9607 5.01281V12.9128Z" fill="currentColor" />
															<path d="M12.9607 10.9128V3.01281C12.9607 2.41281 13.4607 1.91281 14.0607 2.01281C16.0607 2.21281 17.8607 3.11284 19.2607 4.61284C20.6607 6.01284 21.5607 7.91285 21.8607 9.81285C21.9607 10.4129 21.4607 10.9128 20.8607 10.9128H12.9607Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<div class="text-white fw-bold fs-2 mb-2 mt-5">$50,000</div>
													<div class="fw-semibold text-white">Milestone Reached</div>
												</div>
												<!--end::Body-->
											</a>
											<!--end::Statistics Widget 5-->
										</div>
									</div>
									<!--end::Row-->
                                    <!--begin::Row-->
									<div class="row g-5 g-xl-8">
										<div class="col-xl-4">
											<!--begin: Statistics Widget 6-->
											<div class="card bg-light-success card-xl-stretch mb-xl-8">
												<!--begin::Body-->
												<div class="card-body my-3">
													<a href="#" class="card-title fw-bold text-success fs-5 mb-3 d-block">Application Progress</a>
													<div class="py-1">
														<span class="text-dark fs-1 fw-bold me-2">50%</span>
														<span class="fw-semibold text-muted fs-7">Avarage</span>
													</div>
													<div class="progress h-7px bg-success bg-opacity-50 mt-7">
														<div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<!--end:: Body-->
											</div>
											<!--end: Statistics Widget 6-->
										</div>
										<div class="col-xl-4">
											<!--begin: Statistics Widget 6-->
											<div class="card bg-light-warning card-xl-stretch mb-xl-8">
												<!--begin::Body-->
												<div class="card-body my-3">
													<a href="#" class="card-title fw-bold text-warning fs-5 mb-3 d-block">Company Finance</a>
													<div class="py-1">
														<span class="text-dark fs-1 fw-bold me-2">15%</span>
														<span class="fw-semibold text-muted fs-7">48k Goal</span>
													</div>
													<div class="progress h-7px bg-warning bg-opacity-50 mt-7">
														<div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<!--end:: Body-->
											</div>
											<!--end: Statistics Widget 6-->
										</div>
										<div class="col-xl-4">
											<!--begin: Statistics Widget 6-->
											<div class="card bg-light-primary card-xl-stretch mb-5 mb-xl-8">
												<!--begin::Body-->
												<div class="card-body my-3">
													<a href="#" class="card-title fw-bold text-primary fs-5 mb-3 d-block">Marketing Analysis</a>
													<div class="py-1">
														<span class="text-dark fs-1 fw-bold me-2">76%</span>
														<span class="fw-semibold text-muted fs-7">400k Impressions</span>
													</div>
													<div class="progress h-7px bg-primary bg-opacity-50 mt-7">
														<div class="progress-bar bg-primary" role="progressbar" style="width: 76%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<!--end:: Body-->
											</div>
											<!--end: Statistics Widget 6-->
										</div>
									</div>
									<!--end::Row-->
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
                <a href="https://keenthemes.com/" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
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