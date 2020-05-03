<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Real Estate</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{asset("frontend/css/libs/swiper.min.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/css/libs/material-components-web.min.css")}}">
    @yield('styles')
    <link rel="stylesheet" href="{{asset("frontend/style.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/css/skins/blue.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/css/responsive.css")}}">
</head>
<body class="mdc-theme--background">
<div class="spinner-wrapper" id="preloader">
    <div class="spinner-container">
        <div class="spinner-outer">
            <div class="spinner">
                <div class="top-left mask">
                    <div class="plane"></div>
                </div>
                <div class="top-right mask">
                    <div class="plane"></div>
                </div>
                <div class="bottom-left mask">
                    <div class="plane"></div>
                </div>
                <div class="bottom-right mask">
                    <div class="plane"></div>
                </div>
            </div>
            <p class="spinner-text">Real Estate</p>
        </div>
    </div>
</div>
@include('partials.frontend.navbar')

@yield("mainContent")
<footer>
    <div class="px-3">
        <div class="theme-container">
            <div class="py-5 content">
                <div class="row between-xs">
                    <div class="col-xs-12 col-sm-5 col-md-4 p-0">
                        <a class="logo" href="{{Url('/')}}" style="color: white;text-decoration: none">
                            <h1>Real Estate</h1>
                        </a>
                        <p class="mt-5 mb-3 desc">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Nostrum
                            perspiciatis cupiditate numquam odio explicabo accusantium deserunt
                            incidunt.</p>

                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-3 p-0 feedback">
                        <h3>Site Links</h3>
                        <p class="row middle-xs mt-2">
                            <a href="{{ Url('/') }}" class="mdc-button active-link">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">Home</span>
                            </a>
                        </p>
                        <p class="row middle-xs mt-2">
                            <a href="{{ Url('/properties') }}" class="mdc-button active-link">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">Properties</span>
                            </a>
                        </p>
                        <p class="row middle-xs mt-2">
                            <a href="{{ Url('/agents') }}" class="mdc-button active-link">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">Agents</span>
                            </a>
                        </p>
                        <p class="row middle-xs mt-2">
                            <a href="{{ Url('/about') }}" class="mdc-button active-link">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">about</span>
                            </a>
                        </p>
                        <p class="row middle-xs mt-2">
                            <a href="{{ Url('/contact') }}" class="mdc-button active-link">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">contact</span>
                            </a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-4 p-0">
                        <p class="row middle-xs mt-2">
                            <i class="material-icons primary-color">location_on</i>
                            <span class="mx-2">2903 Avenue Z, Brooklyn, NY</span>
                        </p>
                        <p class="row middle-xs mt-1">
                            <i class="material-icons primary-color">call</i>
                            <span class="mx-2">(+88) 123 456 7890</span>
                        </p>
                        <p class="row middle-xs mt-1">
                            <i class="material-icons primary-color">mail_outline</i>
                            <span class="mx-2">contact@exmaple.com</span>
                        </p>
                        <p class="row middle-xs mt-1">
                            <i class="material-icons primary-color">schedule</i>
                            <span class="mx-2">Mon - Sun / 9:00AM - 8:00PM</span>
                        </p>
                        <div class="row start-xs middle-xs desc">
                            <a href="https://www.facebook.com/" target="blank" class="social-icon">
                                <svg class="material-icons mat-icon-lg" viewBox="0 0 24 24">
                                    <path
                                        d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z"/>
                                </svg>
                            </a>
                            <a href="https://twitter.com/" target="blank" class="social-icon">
                                <svg class="material-icons mat-icon-lg" viewBox="0 0 24 24">
                                    <path
                                        d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33Z"/>
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/" target="blank" class="social-icon">
                                <svg class="material-icons mat-icon-lg" viewBox="0 0 24 24">
                                    <path
                                        d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.46 12.92,11.24V10.13H10.13V18.5H12.92V13.57C12.92,12.8 13.54,12.17 14.31,12.17A1.4,1.4 0 0,1 15.71,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,5.95 7.81,5.19 6.88,5.19A1.69,1.69 0 0,0 5.19,6.88C5.19,7.81 5.95,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z"/>
                                </svg>
                            </a>
                            <a href="https://plus.google.com/" target="blank" class="social-icon">
                                <svg class="material-icons mat-icon-lg" viewBox="0 0 24 24">
                                    <path
                                        d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M19.5,12H18V10.5H17V12H15.5V13H17V14.5H18V13H19.5V12M9.65,11.36V12.9H12.22C12.09,13.54 11.45,14.83 9.65,14.83C8.11,14.83 6.89,13.54 6.89,12C6.89,10.46 8.11,9.17 9.65,9.17C10.55,9.17 11.13,9.56 11.45,9.88L12.67,8.72C11.9,7.95 10.87,7.5 9.65,7.5C7.14,7.5 5.15,9.5 5.15,12C5.15,14.5 7.14,16.5 9.65,16.5C12.22,16.5 13.96,14.7 13.96,12.13C13.96,11.81 13.96,11.61 13.89,11.36H9.65Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row between-xs middle-xs copyright">

            </div>
        </div>
    </div>
</footer>


<div id="back-to-top"><i class="material-icons">arrow_upward</i></div>
<script src="{{asset("frontend/js/libs/jquery.min.js")}}"></script>
<script src="{{asset("frontend/js/libs/material-components-web.min.js")}}"></script>
<script src="{{asset("frontend/js/libs/swiper.min.js")}}"></script>
@yield('javascripts')
<script src="{{asset("frontend/js/main.js")}}"></script>


</body>


</html>

