<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@section('title')Admin |@show</title>

    <!-- scripts -->
    <script src="https://unpkg.com/feather-icons"></script>

    @vite(['resources/sass/admin/app.scss', 'resources/js/admin/app.js'])
</head>

<body>
    <div class="container-scroller" id="app-admin">
        @yield('header')
        <div class="container-fluid page-body-wrapper">
            @yield('sidebar')
            <div class="main-panel">@yield('content')</div>
        </div>
    </div>

    <script>
        feather.replace()
    </script>
</body>
