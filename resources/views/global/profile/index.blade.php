@extends('layouts.admin.app')
@section("title")
Profile
@endsection
@section('content')
    <div class="main-wrapper">
	
			@include('layouts.admin.sidebar')
	
		<div class="page-wrapper">
					
			@include('layouts.admin.header')

			<div class="page-content">
				<div class="profile-page tx-13">
				  <div class="row">
					<div class="col-12 grid-margin">
									<div class="profile-header">
										<div class="cover">
											<div class="gray-shade"></div>
											<figure>
												<img src="
												@if (!empty($employeeDetails->cover_img))
														{{$employeeDetails->cover_img}}
														@else
															https://via.placeholder.com/1148x272
														@endif
												" class="img-fluid" alt="profile cover" style="background-size: cover; max-height: 300px;">
											</figure>
											<div class="cover-body d-flex justify-content-between align-items-center">
												<div>
													<img class="profile-pic" src="{{ Auth::user()->user_dp ?? url('public/images/user.png') }}" alt="profile">
													<span class="profile-name">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}<span>
												</div>
												<div class="d-none d-md-block">
													<button class="btn btn-primary btn-icon-text btn-edit-profile">
														<i data-feather="edit" class="btn-icon-prepend"></i> Edit profile
													</button>
												</div>
											</div>
										</div>
										<div class="header-links">
											<ul class="links d-flex align-items-center mt-3 mt-md-0">
												<li class="header-link-item d-flex align-items-center">
													<i class="mr-1 icon-md" data-feather="columns"></i>
													<a class="pt-1px d-none d-md-block" href="#">
														@if (!empty($employeeDetails->department_id))
														{{$employeeDetails->department->department_name}}
														@else
															Not Updated
														@endif
													</a>
												</li>
												<li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
													<i class="mr-1 icon-md" data-feather="star"></i>
													<a class="pt-1px d-none d-md-block" href="#">
														@if (!empty($employeeDetails->current_designation_id))
														{{$employeeDetails->currentDesignation->designation}}
														@else
															Not Updated
														@endif
													</a>
												</li>
												<li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
													<i class="mr-1 icon-md" data-feather="user"></i>
													<a class="pt-1px d-none d-md-block" data-toggle="modal" data-target="#exampleModal" href="#">
														@if (!empty($employeeDetails->gender))
														{{$employeeDetails->gender}}
														@else
															Not Updated
														@endif
													</a>
												</li>
												<li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
													<i class="mr-1 icon-md" data-feather="gift"></i>
													<a class="pt-1px d-none d-md-block" href="#">
														@if (!empty($employeeDetails->dob))
														{{\Carbon\Carbon::parse($employeeDetails->dob)->format('d F Y') }}
														@else
															Not Updated
														@endif
													</a>
												</li>
												<li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
													<i class="mr-1 icon-md" data-feather="shield"></i>
													<a class="pt-1px d-none d-md-block" href="#">
														@if (!empty($employeeDetails->team_leader_id))
														{{$employeeDetails->teamLeader->firstname}} {{$employeeDetails->teamLeader->lastname}}
														@else
															Not Assigned
														@endif
													</a>
												</li>
												@if (in_array(Auth::user()->usertype, ['agent', 'Supervisor']))
													<li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
														<i class="mr-1 icon-md" data-feather="at-sign"></i>
														<a class="pt-1px d-none d-md-block" data-toggle="modal" data-target="#CallerModal" href="#">
														@if (!empty($employeeDetails->caller_name))
														{{$employeeDetails->caller_name}}
														@else
															Not Set
														@endif
														</a>
													</li>
												@endif
											</ul>
										</div>
						</div>
					</div>
							</div>
							<div class="row profile-body">
								<!-- left wrapper start -->
								<div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
									<div class="card rounded">
										<div class="card-body">
											<div class="d-flex align-items-center justify-content-between mb-2">
												<h6 class="card-title mb-0">About</h6>
												<div class="dropdown">
													<button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
													</button>
													<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
														<a class="dropdown-item d-flex align-items-center" data-toggle="modal" data-target="#EditAboutModal" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
													</div>
												</div>
											</div>
											<label class="tx-11 font-weight-bold mb-0 text-uppercase">Bio:</label>
											<p>
												@if (!empty($employeeDetails->bio))
												{{$employeeDetails->bio}}
												@else
													Nothing Added
												@endif
											</p>
											<div class="mt-3">
												<label class="tx-11 font-weight-bold mb-0 text-uppercase">Joined:</label>
												<p class="text-muted">
												@if (!empty($employeeDetails->company_join_on))
													{{ \Carbon\Carbon::parse($employeeDetails->company_join_on)->format('d F Y') }}
												@else
													Not Registered
												@endif
												</p>
											</div>
											<div class="mt-3">
												<label class="tx-11 font-weight-bold mb-0 text-uppercase">Emergency Contact:</label>
												<p class="text-muted">
												@if (!empty($employeeDetails->emergency_contact))
												{{$employeeDetails->emergency_contact}}
												@else
													Not Added
												@endif
												</p>
											</div>
											<div class="mt-3">
												<label class="tx-11 font-weight-bold mb-0 text-uppercase">Address:</label>
												<p class="text-muted">
													@if ($employeeAddress)
														<p>{{ $employeeAddress->address }}</p>
														<p>{{ $employeeAddress->district }}, {{ $employeeAddress->state }}</p>
														<p>{{ $employeeAddress->pincode }}</p>
														<p>{{ $employeeAddress->country }}</p>
													@else
														<p>No address found</p>
													@endif
												</p>
											</div>
											<div class="mt-3">
												<label class="tx-11 font-weight-bold mb-0 text-uppercase">Email:</label>
												<p class="text-muted">{{ Auth::user()->email }}</p>
											</div>
											<div class="mt-3">
												<label class="tx-11 font-weight-bold mb-0 text-uppercase">Phone:</label>
												<p class="text-muted">{{ Auth::user()->ccode }} {{ Auth::user()->phone }}</p>
											</div>
											<div class="mt-3 d-flex social-links">
												<a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon github">
													<i data-feather="github" data-toggle="tooltip" title="github.com/{{ $socialMediaLinks->github }}"></i>
												</a>
												<a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon twitter">
													<i data-feather="twitter" data-toggle="tooltip" title="twitter.com/{{ $socialMediaLinks->twitter }}"></i>
												</a>
												<a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon instagram">
													<i data-feather="instagram" data-toggle="tooltip" title="instagram.com/{{ $socialMediaLinks->instagram }}"></i>
												</a>
												<a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon linkedin">
													<i data-feather="linkedin" data-toggle="tooltip" title="instagram.com/{{ $socialMediaLinks->linkedin }}"></i>
												</a>
												<a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon facebook">
													<i data-feather="facebook" data-toggle="tooltip" title="instagram.com/{{ $socialMediaLinks->facebook }}"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- left wrapper end -->
								<!-- middle wrapper start -->
								<div class="col-md-8 col-xl-6 middle-wrapper">
									<div class="row">
										
									</div>
								</div>
								<!-- middle wrapper end -->
								<!-- right wrapper start -->
								<div class="d-none d-xl-block col-xl-3 right-wrapper">
									<div class="row">
										
									</div>
								</div>
								<!-- right wrapper end -->
							</div>
							@include('global.profile.gender_model')
							@include('global.profile.caller_name')
							@include('global.profile.edit_about_model')
				</div>
			</div>
	@include('layouts.admin.footer')
		</div>
	</div>
@endsection
