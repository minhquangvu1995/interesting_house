<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/head.js') }}" type="javascript"></script>
</head>
<body>
@section('components')
    @include('components.header')
    @include('components.bootstrap-sidebar')
@show
@yield('content')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>