<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ url('public/vendors/core/core.css') }}">
	<link rel="stylesheet" href="{{ url('public/fonts/feather-font/css/iconfont.css') }}">
	<link rel="stylesheet" href="{{ url('public/vendors/flag-icon-css/css/flag-icon.min.css') }}">
	<link rel="stylesheet" href="{{ url('public/css/demo_1/style.css') }}">
  	<link rel="shortcut icon" href="{{ url('public/images/favicon.png') }}" />
</head>
<body>
    <!-- Your navigation bar or header section -->
    
    <!-- Content section -->
    <div>
        @yield('content')
    </div>

    <script src="{{ url('public/vendors/core/core.js') }}"></script>
	<script src="{{ url('public/vendors/feather-icons/feather.min.js') }}"></script>
	<script src="{{ url('public/js/template.js') }}"></script>
	<script src="{{ url('public/vendors/prismjs/prism.js') }}"></script>
	<script src="{{ url('public/vendors/clipboard/clipboard.min.js') }}"></script>
</body>
</html>