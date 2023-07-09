@extends('layouts.admin.app')
@section("title")
Agent Dashboard
@endsection
@section('content')
    <div class="main-wrapper">
	
			@include('layouts.admin.sidebar')
	
		<div class="page-wrapper">
					
			@include('layouts.admin.header')

			<div class="page-content">
				
			</div>
	@include('layouts.admin.footer')
		</div>
	</div>
@endsection
