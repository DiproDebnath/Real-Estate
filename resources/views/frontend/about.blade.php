@extends('layouts.frontend')

@section('mainContent')
    <main class="content-offset-to-top">
        <div class="header-image-wrapper">
            <div class="bg" style="background-image: url('{{asset('frontend/assets/images/others/about.jpg')}}');"></div>
            <div class="mask"></div>
            <div class="header-image-content offset-bottom">
                <h1 class="title">About Us</h1>
                <p class="desc">We help you for find your house key</p>
            </div>
        </div>
        <div class="px-3">
            <div class="theme-container">
                <div class="mdc-card main-content-header pt-0">
                    <div class="section pt-0">
                        <div class="px-3">
                            <div class="theme-container">
                                <h1 class="section-title">our story</h1>
                                <p class="px-3">Nam enim diam, euismod in tincidunt in, euismod nec ligula. Aliquam erat volutpat. Integer vulputate lacus a volutpat aliquet. Mauris suscipit sollicitudin purus, et congue lectus dignissim vel. Vestibulum purus arcu, eleifend a odio non, bibendum dictum lectus. Nam vulputate accumsan quam facilisis aliquet. Cras accumsan et elit a consequat.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section mt-3">
            <div class="px-3">
                <div class="theme-container">
                    <h1 class="section-title">Our Services</h1>
                    <div class="services-wrapper row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2">
                            <div class="mdc-card h-100 w-100 text-center middle-xs p-3">
                                <i class="material-icons mat-icon-xlg primary-color">location_on</i>
                                <h2 class="capitalize fw-600 my-3">Find places anywhere in the world</h2>
                                <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum egestas nunc sed ultricies.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2">
                            <div class="mdc-card h-100 w-100 text-center middle-xs p-3">
                                <i class="material-icons mat-icon-xlg primary-color">supervisor_account</i>
                                <h2 class="capitalize fw-600 my-3">We have agents with experience</h2>
                                <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum egestas nunc sed ultricies.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2">
                            <div class="mdc-card h-100 w-100 text-center middle-xs p-3">
                                <i class="material-icons mat-icon-xlg primary-color">home</i>
                                <h2 class="capitalize fw-600 my-3">Buy or rent beautiful properties</h2>
                                <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum egestas nunc sed ultricies.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2">
                            <div class="mdc-card h-100 w-100 text-center middle-xs p-3">
                                <i class="material-icons mat-icon-xlg primary-color">format_list_bulleted</i>
                                <h2 class="capitalize fw-600 my-3">With agent account you can list properties</h2>
                                <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum egestas nunc sed ultricies.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </main>
@endsection
