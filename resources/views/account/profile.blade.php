<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMS | My Account</title>
    <link rel="shortcut icon" href="{{asset('Eziline/Scholarship Management System/public/favicon.ico')}}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{asset('Eziline/Scholarship Management System/public/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('Eziline/Scholarship Management System/public/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{asset('Eziline/Scholarship Management System/public/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('Eziline/Scholarship Management System/public/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
        {{-- FontAwesome Icon CDN --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
					<!--begin::Header-->
					<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center justify-content-between">
								<!--begin::Logo-->
								<div class="d-flex align-items-center flex-equal">
									<!--begin::Mobile menu toggle-->
									<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
										<span class="svg-icon svg-icon-2hx">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
												<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Mobile menu toggle-->
									<!--begin::Logo image-->
									<a href="{{route('home')}}">
										<img alt="Logo" src="{{asset('Eziline/Scholarship Management System/public/logo.png')}}" class="logo-default h-75px h-lg-100px"/>
										<img alt="Logo" src="{{asset('Eziline/Scholarship Management System/public/logo.png')}}" class="logo-sticky h-50px h-lg-85px" />
									</a>
									<!--end::Logo image-->
								</div>
								<!--end::Logo-->
								<!--begin::Toolbar-->
                                <div class="flex-equal text-end ms-1">

                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();" class="btn btn-danger">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                    </form>
                                </div>
								<!--end::Toolbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
                    <div class="content-wrapper" style="width: 88%; margin:auto;">

                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Profile Details</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Content-->
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <!--begin::Form-->
                            <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" action="{{route(profile.update, Auth::user()->id)}}">
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('../assets/media/svg/avatars/blank.svg')">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(../assets/media/avatars/300-1.jpg)"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                                    <input type="hidden" name="avatar_remove">
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                            <!--begin::Hint-->
                                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                            <!--end::Hint-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="{{strtok(Auth::user()->name, ' ')}}">
                                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                <!--end::Col-->

                                                @php
                                                $lNamePosition = strpos(Auth::user()->name, ' ')
                                                @endphp
                                                <!--begin::Col-->
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="{{substr(Auth::user()->name, $lNamePosition+1)}}">
                                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    
                                </div>
                                {{-- <!--end::Card body-->
                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                                </div>
                                <!--end::Actions--> --}}
                            <input type="hidden"></form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>

                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Sign-in Method</h3>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Content-->
                        <div id="kt_account_settings_signin_method" class="collapse show">
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">
                                <!--begin::Email Address-->
                                <div class="d-flex flex-wrap align-items-center">
                                    <!--begin::Label-->
                                    <div id="kt_signin_email">
                                        <div class="fs-6 fw-bold mb-1">Email Address</div>
                                        <div class="fw-semibold text-gray-600">
                                            <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailAddress" value="">
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                    {{-- <!--begin::Edit-->
                                    <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                                        <!--begin::Form-->
                                        <form id="kt_signin_change_email" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                                            <div class="row mb-6">
                                                <div class="col-lg-6 mb-4 mb-lg-0">
                                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                                        <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email Address</label>
                                                        <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="support@keenthemes.com">
                                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                                        <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm Password</label>
                                                        <input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword">
                                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update Email</button>
                                                <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                            </div>
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Edit-->
                                    <!--begin::Action-->
                                    <div id="kt_signin_email_button" class="ms-auto">
                                        <button class="btn btn-light btn-active-light-primary">Change Email</button>
                                    </div>
                                    <!--end::Action--> --}}
                                </div>
                                <!--end::Email Address-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-6"></div>
                                <!--end::Separator-->
                                <!--begin::Password-->
                                <div class="d-flex flex-wrap align-items-center mb-10">
                                    <!--begin::Label-->
                                    <div id="kt_signin_password" class="d-none">
                                        <div class="fs-6 fw-bold mb-1">Password</div>
                                        <div class="fw-semibold text-gray-600">************</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Edit-->
                                    <div id="kt_signin_password_edit" class="flex-row-fluid">
                                        <!--begin::Form-->
                                        <form id="kt_signin_change_password" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                                            <div class="row mb-1">
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                                        <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
                                                        <input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" value="">
                                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                                        <label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>
                                                        <input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword">
                                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                                        <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>
                                                        <input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword">
                                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                </div>
                                            </div>
                                            <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-6"></div>
                                            <!--end::Separator-->
                                            <div class="d-flex" style="justify-content: flex-end;">
                                                <button id="kt_password_submit" type="submit" class="btn btn-primary me-2 px-6">Save Changes</button>
                                                <button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                            </div>
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Edit-->
                                    {{-- <!--begin::Action-->
                                    <div id="kt_signin_password_button" class="ms-auto d-none">
                                        <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                                    </div>
                                    <!--end::Action--> --}}
                                </div>
                                <!--end::Password-->
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Content-->
                    </div>
                </div>

                <!--begin::Javascript-->
		<script>var hostUrl = "assets/index.html";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('/Eziline/Scholarship Management System/public/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('/Eziline/Scholarship Management System/public/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{asset('/Eziline/Scholarship Management System/public/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('/Eziline/Scholarship Management System/public/custom/account/settings/signin-methods.js')}}"></script>
		<script src="{{asset('/Eziline/Scholarship Management System/public/custom/account/settings/profile-details.js')}}"></script>
		<script src="{{asset('/Eziline/Scholarship Management System/public/custom/account/settings/deactivate-account.js')}}"></script>
		<script src="{{asset('/Eziline/Scholarship Management System/public/custom/pages/user-profile/general.js')}}"></script>
		<script src="{{asset('/Eziline/Scholarship Management System/public/widgets.bundle.js')}}"></script>
		<script src="{{asset('/Eziline/Scholarship Management System/public/custom/widgets.js')}}"></script>
		<script src="{{asset('/Eziline/Scholarship Management System/public/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('/Eziline/Scholarship Management System/public/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{asset('/Eziline/Scholarship Management System/public/custom/utilities/modals/create-app.js')}}"></script>
		<script src="{{asset('/Eziline/Scholarship Management System/public/custom/utilities/modals/offer-a-deal/type.js')}}"></script>
		<script src="{{asset('/Eziline/Scholarship Management System/public/custom/utilities/modals/offer-a-deal/details.js')}}"></script>
		<script src="{{asset('/Eziline/Scholarship Management System/public/custom/utilities/modals/offer-a-deal/finance.js')}}"></script>
		<script src="{{asset('/Eziline/Scholarship Management System/public/custom/utilities/modals/offer-a-deal/complete.js')}}"></script>
		<script src="{{asset('/Eziline/Scholarship Management System/public/custom/utilities/modals/offer-a-deal/main.js')}}"></script>
		<script src="{{asset('/Eziline/Scholarship Management System/public/custom/utilities/modals/two-factor-authentication.js')}}"></script>
		<script src="{{asset('/Eziline/Scholarship Management System/public/custom/utilities/modals/users-search.js')}}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
</body>
</html>