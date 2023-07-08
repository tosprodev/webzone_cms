<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
	<!-- core:css -->
	<link rel="stylesheet" href="{{ url('public/vendors/core/core.css') }}">
	<link rel="stylesheet" href="{{ url('public/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
	<link rel="stylesheet" href="{{ url('public/fonts/feather-font/css/iconfont.css') }}">
	<link rel="stylesheet" href="{{ url('public/vendors/flag-icon-css/css/flag-icon.min.css') }}">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{ url('public/css/demo_1/style.css') }}">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{ url('public/images/favicon.png') }}" />
</head>
<body>
    <!-- Main Content -->
    <main>
        <!-- Add your main content here -->
        @yield('content')
    </main>
  <script src="{{ url('public/vendors/core/core.js') }}"></script>
  <script src="{{ url('public/vendors/chartjs/Chart.min.js') }}"></script>
  <script src="{{ url('public/vendors/jquery.flot/jquery.flot.js') }}"></script>
  <script src="{{ url('public/vendors/jquery.flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ url('public/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ url('public/vendors/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ url('public/vendors/progressbar.js/progressbar.min.js') }}"></script>
  <script src="{{ url('public/vendors/feather-icons/feather.min.js') }}"></script>
  <script src="{{ url('public/js/template.js') }}"></script>
  <script src="{{ url('public/js/dashboard.js') }}"></script>
  <script src="{{ url('public/js/datepicker.js') }}"></script>
</body>
</html>    
