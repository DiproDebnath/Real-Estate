<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset("backend/assets/vendor/bootstrap/css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{asset("backend/assets/vendor/fonts/circular-std/style.css")}}" />
    <link rel="stylesheet" href="{{asset("backend/assets/libs/css/style.css")}}" />
    <link rel="stylesheet" href="{{asset("backend/assets/vendor/fonts/fontawesome/css/fontawesome-all.css")}}" />
    <link rel="stylesheet" href="{{asset("backend/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css")}}" />
    @yield('styles')
</head>

<body>

<!-- main wrapper -->

<div class="dashboard-main-wrapper">

    <!-- navbar -->
@include('partials.backend.navbar')
    <!-- end navbar -->
    <!-- left sidebar -->
@include('partials.backend.sidebar')
    <!-- end left sidebar -->
    <!-- wrapper  -->
   @yield('mainContent')
    <!-- end wrapper  -->
</div>
<!-- end main wrapper  -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="{{asset("backend/assets/vendor/jquery/jquery-3.3.1.min.js")}}"></script>
<!-- bootstap bundle js -->
<script src="{{asset("backend/assets/vendor/bootstrap/js/bootstrap.bundle.js")}}"></script>
<!-- slimscroll js -->
<script src="{{asset("backend/assets/vendor/slimscroll/jquery.slimscroll.js")}}"></script>
<!-- main js -->
<script src="{{asset("backend/assets/libs/js/main-js.js")}}"></script>

@yield('javascripts')

</body>

</html>
