<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::to('/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ URL::to('/css/app.css') }}">
    @yield('styles')
</head>
<body>
@include('partials.header')

<div class="container">
    @yield('content')
</div>

<script src="{{ URL::to('/js/jquery.js') }}"></script>
<script src="{{ URL::to('/js/bootstrap.js') }}"></script>
@yield('scripts')
</body>
</html>
