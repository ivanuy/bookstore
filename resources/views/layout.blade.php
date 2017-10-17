<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookstore</title>
    <link rel="stylesheet" href="/css/app.css">
    @yield('meta')
</head>
<body>
    <nav class="navbar navbar-inverse navbar-static-top">
        <a class="navbar-brand navbar-header" href="{{ url('/admin') }}">Bookstore</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ URL::to('/js/jquery.js') }}"></script>
    @yield('scripts')
</body>
</html>
