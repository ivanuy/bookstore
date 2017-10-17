<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookstore</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <a class="navbar-brand navbar-header" href="{{ url('/asd') }}">Bookstore</a>
            <a class="navbar-brand navbar-header pull-right" href="#">Sign up</a>
            <a class="navbar-brand navbar-header pull-right" href="#">Sign in</a>
            <a class="navbar-brand navbar-header pull-right" href="#"></a>
        </div>
    </nav>

    <div class="container">
        @yield('products')
    </div>
</body>
</html>
