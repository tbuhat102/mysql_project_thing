<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <!-- Include the compiled CSS from Vite -->
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <!-- This is where the content of each page will be injected -->
    @yield('content')
</body>
</html>
