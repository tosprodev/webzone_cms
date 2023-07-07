@extends('layouts.app')
@section("title")
Login
@endsection
@section('content')
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                	<div class="col-md-6 pr-md-0">
                  		<div class="auth-left-wrapper">
                    		<!-- Add content for the left section if needed -->
                    		

                  		</div>
                	</div>
                	<div class="col-md-6 pl-md-0">
                  		<div class="auth-form-wrapper px-4 py-5">
                    		<a href="#" class="noble-ui-logo d-block mb-2">{{ config('app.owner', 'Laravel') }}<span>{{ config('app.name', 'Laravel') }}</span></a>
                    		<h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>
                    		<form class="forms-sample" method="POST" action="{{ route('login') }}">
                    		    @if(session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                
                                @if ($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                      			@csrf
                      			<div class="form-group">
                        			<label for="login">Email address or Username</label>
                        			<input type="text" class="form-control" id="login" name="login" placeholder="Email address or Username" required>
                      			</div>
                      			<div class="form-group">
                        			<label for="password">Password</label>
                        			<input type="password" class="form-control" id="password" name="password" autocomplete="password" placeholder="Password" required>
                      			</div>
                      			<div class="form-check form-check-flat form-check-primary">
                        			<label class="form-check-label">
                          				<input type="checkbox" class="form-check-input">
                          				Remember me
                        			</label>
                      			</div>
                      			<div class="mt-3">
                          			<button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0" style="padding-right: 50px; padding-left: 50px;">
                          				Login
                          			</button>
                      			</div>
                      			<a href="{{ route('password.request') }}" class="d-block mt-3 text-muted">Forgot Password</a>
                    		</form>
                  		</div>
                	</div>
             	 </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	@endsection
