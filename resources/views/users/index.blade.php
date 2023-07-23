@extends('layouts.app')

@section('title', 'Users')

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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Users</h1>
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
                        <li class="breadcrumb-item text-muted">All Users</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->
                </div>
                <!--end::Actions-->
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
												<span class="card-label fw-bold fs-3 mb-1">All Users</span>
												<span class="text-muted mt-1 fw-semibold fs-7">Total {{$count}} users</span>
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
															<th class="w-45px">
																S#
															</th>
                                                            <th class="min-w-100px">Name</th>
															<th class="min-w-60px">Email</th>
															<th class="min-w-100px">Account created on</th>
															<th class="w-160px text-start">Actions</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
                                                        @foreach($users as $user)
														<tr>
															<td>
																<span class="text-dark fw-bold fs-6">{{$serial++}}.</span>
															</td>
															<td>
																<span class="text-dark fs-6">{{$user->name}}</span>
															</td>
															<td>
																<span class="text-dark fs-6">{{$user->email}}</span>
															</td>
                                                            {{-- removing time from data and correcting the format --}}
															@php
                                                                $date = $user->created_at;

                                                                $createDate = new DateTime($date);

                                                                $strip = $createDate->format('d-m-Y');
                                                            @endphp
															<td>
																<span class="text-dark fs-6">{{$strip}}</span>
															</td>

															<td>
																<a href="{{route('users.show', $user)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																	<span class="svg-icon svg-icon-3">
                                                                        <i class="fa-solid fa-eye"></i>
																	</span>
																	<!--end::Svg Icon-->
																</a>
                                                                
                                                                <form style="display: inline" action="{{ route('users.destroy', $user) }}" method="POST">
                                    
                                                                    @method('DELETE')
                                    
                                                                    @csrf
                                                                    
                                                                    <button class="btn btn-link btn btn-icon btn-bg-light btn-active-color-primary btn-sm" onclick="return confirm('Are you sure you want to delete the user account? \nNote: Deleting user account will delete all the aplications and subscriptions of the user!')" type="submit" class="btn-outline-primary">
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