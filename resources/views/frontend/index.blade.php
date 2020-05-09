@extends("layouts.frontend")

@section('mainContent')

<main class="content-offset-to-top">
    <div class="header-image-wrapper">
        <div class="bg"></div>
        <div class="mask"></div>
        <div class="header-image-content home-page offset-bottom">
            <h1 class="title">Find your house key</h1>
            <p class="desc">Leading Real Estate Company</p>
            <div class="mt-4">

            </div>
        </div>
    </div>
    <div class="px-3">
        <div class="theme-container">
            <div class="mdc-card main-content-header">
                    @include('partials.frontend.searchbar', ['categories'])
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
                            <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                vestibulum egestas nunc sed ultricies.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2">
                        <div class="mdc-card h-100 w-100 text-center middle-xs p-3">
                            <i class="material-icons mat-icon-xlg primary-color">supervisor_account</i>
                            <h2 class="capitalize fw-600 my-3">We have agents with experience</h2>
                            <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                vestibulum egestas nunc sed ultricies.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2">
                        <div class="mdc-card h-100 w-100 text-center middle-xs p-3">
                            <i class="material-icons mat-icon-xlg primary-color">home</i>
                            <h2 class="capitalize fw-600 my-3">Buy or rent beautiful properties</h2>
                            <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                vestibulum egestas nunc sed ultricies.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2">
                        <div class="mdc-card h-100 w-100 text-center middle-xs p-3">
                            <i class="material-icons mat-icon-xlg primary-color">format_list_bulleted</i>
                            <h2 class="capitalize fw-600 my-3">With agent account you can list properties</h2>
                            <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                vestibulum egestas nunc sed ultricies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</main>

@endsection
