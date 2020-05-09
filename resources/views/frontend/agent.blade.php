@extends("layouts.frontend")

@section('mainContent')
    <main>
        <div class="px-3">
            <div class="theme-container">
                <div class="mdc-card mt-5 p-5">
                    <div class="row agent-wrapper">
                        <div class="col-xs-12 col-sm-6 col-md-4 p-3">
                            @if($agent->image)

                                <img src="{{asset('profile/')}}/{{$agent->image}}" alt="agent-image"
                                     class="mw-100 d-block">

                            @else

                                <img src="{{asset('frontend/assets/images/others/user.jpg')}}" alt="agent-image"
                                     class="mw-100 d-block">

                            @endif

                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 p-3">
                            <h2 class="fw-600">{{$agent->name}}</h2>

                            <p class="mt-3 text-muted fw-500">
                                {{$agent->bio}}
                            </p>


                            <p class="row middle-xs"><i class="material-icons primary-color">email</i>
                                <span class="mx-2 text-muted fw-500">  {{$agent->email}}</span></p>

                            <div class="row start-xs middle-xs">
                                <div class="row start-xs middle-xs">

                                </div>
                            </div>
                            <p class="uppercase fw-600 text-muted mt-5 mb-0 p-relative">
                                Listed Properties<span class="badge primary md">{{$agent->properties->count()}}</span>
                            </p>
                        </div>

                        @if(Auth::guest())
                            <div class="col-xs-12 col-md-4 p-3">
                                <form action="{{route('messages.store')}}" method="post">
                                    @csrf
                                    <h3 class="uppercase">Contact Me</h3>
                                    <input class="mdc-text-field__input" name="agent_id" type="hidden"
                                           value="{{$agent->id}}">
                                    <div class="mdc-text-field mdc-text-field--outlined w-100 mt-3">
                                        <input class="mdc-text-field__input" name="subject" type="text"
                                        >
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="name" class="mdc-floating-label">Property Name</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>

                                    <div
                                        class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100 mt-3">
                                        <textarea name="body" id="message" class="mdc-text-field__input"
                                                  rows="5"></textarea>
                                        <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="message" class="mdc-floating-label">Message</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                    <div class="w-100 text-center mt-4">
                                        <button type="submit" class="mdc-button mdc-button--raised bg-accent">
                                            <span class="mdc-button__ripple"></span>
                                            <span class="mdc-button__label">Send Email</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        @elseif( $agent->id != auth()->user()->id)
                            <div class="col-xs-12 col-md-4 p-3">
                                <form action="{{route('messages.store')}}" method="post">
                                    @csrf
                                    <h3 class="uppercase">Contact Me</h3>
                                    <input class="mdc-text-field__input" name="agent_id" type="hidden" placeholder="Property Name"
                                           value="{{$agent->id}}">

                                    <div class="mdc-text-field mdc-text-field--outlined w-100 mt-3">
                                        <input class="mdc-text-field__input" name="subject" type="text"
                                        >
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="name" class="mdc-floating-label"></label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>

                                    <div
                                        class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100 mt-3">
                                        <textarea name="body" id="message" class="mdc-text-field__input"
                                                  rows="5"></textarea>
                                        <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="message" class="mdc-floating-label">Message</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                    <div class="w-100 text-center mt-4">
                                        <button type="submit" class="mdc-button mdc-button--raised bg-accent">
                                            <span class="mdc-button__ripple"></span>
                                            <span class="mdc-button__label">Send Email</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
                <h3 class="uppercase mt-3">My Listing</h3>
                <div class="page-drawer-container mt-3">
                    <div class="page-sidenav-content">
                        <div class="properties-wrapper row mt-0">
                            <div class="row px-2 w-100">
                                <div
                                    class="row mdc-card between-xs middle-xs w-100 p-2 filter-row mdc-elevation--z1 text-muted">
                                    <div class="row middle-xs d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex">

                                        <button class="mdc-icon-button material-icons view-type" data-view-type="list"
                                                data-col="1" data-full-width-page="false">view_list
                                        </button>
                                        <button class="mdc-icon-button view-type" data-view-type="grid" data-col="2"
                                                data-full-width-page="false">
                                            <svg class="material-icons mat-icon-sm" viewBox="0 0 25 25">
                                                <path d="M3,11H11V3H3M3,21H11V13H3M13,21H21V13H13M13,3V11H21V3"/>
                                            </svg>
                                        </button>
                                        <button
                                            class="mdc-icon-button view-type material-icons d-none d-lg-flex d-xl-flex"
                                            data-view-type="grid" data-col="3" data-full-width-page="false">view_module
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @foreach($agent->properties as $property)
                                <div class="row item col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                    <div class="mdc-card property-item grid-item column-3">
                                        <div class="thumbnail-section">

                                            <div class="row property-status">
                                                {{--                                            <span class="green">{{$property->statuses[0]}}</span>--}}
                                            </div>
                                            <div class="property-image">
                                                <div class="swiper-container">
                                                    <div class="swiper-wrapper">
                                                        @if($property->property_images->count() > 0)
                                                            @foreach($property->property_images as $image)
                                                                <div class="swiper-slide">
                                                                    <img
                                                                        src="{{asset('property/gellary/')}}/{{$image->image}}"
                                                                        alt="slide image"
                                                                        data-src="{{asset('property/gellary/')}}/{{$image->image}}"
                                                                        class="slide-item swiper-lazy">
                                                                    <div class="swiper-lazy-preloader"></div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    <div class="swiper-pagination white"></div>
                                                    <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i
                                                            class="material-icons mat-icon-lg">keyboard_arrow_left</i>
                                                    </button>
                                                    <button class="mdc-icon-button swiper-button-next swipe-arrow"><i
                                                            class="material-icons mat-icon-lg">keyboard_arrow_right</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="property-content-wrapper">
                                            <div class="property-content">
                                                <div class="content">
                                                    <h1 class="title"><a
                                                            href="{{route('properties.show', $property->id)}}">{{$property->title}}</a>
                                                    </h1>
                                                    <p class="row address flex-nowrap">
                                                        <i class="material-icons text-muted">location_on</i>
                                                        <span>{{$property->area }}, {{$property->city}}</span>
                                                    </p>
                                                    <div class="row between-xs middle-xs">
                                                        <h3 class="primary-color price">
                                                            <span>${{$property->price}}/month</span>
                                                        </h3>
                                                        <div class="row start-xs middle-xs ratings" title="29">
                                                            <i class="material-icons mat-icon-sm">star</i>
                                                            <i class="material-icons mat-icon-sm">star</i>
                                                            <i class="material-icons mat-icon-sm">star</i>
                                                            <i class="material-icons mat-icon-sm">star</i>
                                                            <i class="material-icons mat-icon-sm">star_half</i>
                                                        </div>
                                                    </div>
                                                    <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                        <div class="description mt-3">
                                                            <p>
                                                                {{$property->description}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="features mt-3">
                                                        <p><span>Property size</span><span>{{$property->additional_detail["area"]}}ft²</span>
                                                        </p>
                                                        <p>
                                                            <span>Bedrooms</span><span>{{$property->additional_detail['bedrooms']}}</span>
                                                        </p>
                                                        <p>
                                                            <span>Bathrooms</span><span>{{$property->additional_detail['bathrooms']}}</span>
                                                        </p>
                                                        <p>
                                                            <span>Garages</span><span>{{$property->additional_detail['garages']}}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="grow"></div>
                                                <div class="actions row between-xs middle-xs">
                                                    <p class="row date mb-0">

                                                    </p>
                                                    <a href="{{route('properties.show', $property->id)}}"
                                                       class="mdc-button mdc-button--outlined">
                                                        <span class="mdc-button__ripple"></span>
                                                        <span class="mdc-button__label">Details</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
