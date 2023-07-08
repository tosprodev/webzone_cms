<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Include your CSS and JS files here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Add your header content here -->
        <h1>Admin Dashboard Header</h1>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Add your main content here -->
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <!-- Add your footer content here -->
        <p>Admin Dashboard Footer</p>
    </footer>
</body>
</html>
