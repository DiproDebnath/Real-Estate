@extends("layouts.frontend")

@section('mainContent')
    <main>
        <div class="px-3">
            <div class="theme-container">
                <div class="page-drawer-container single-property mt-3">
                    <div class="page-sidenav-content">
                        <div class="mdc-card row between-xs middle-xs p-3">
                            <div>
                                <h2 class="uppercase">{{$property->title}}</h2>
                                <p class="row flex-nowrap address mb-0">
                                    <i class="material-icons text-muted">location_on</i>
                                    <span class="fw-500 text-muted">{{$property->area}}, {{$property->city}}</span>
                                </p>
                            </div>
                            <div class="column mx-3">
                                <h2 class="primary-color price">
                                    @foreach($property->statuses as $stats)
                                        @if($stats->title == 'For Sale')
                                            <span>$ {{$property->price}}</span>
                                        @elseif($stats->title == 'For Rent')
                                            <span>$ {{$property->price}}/month</span>
                                        @endif
                                    @endforeach
                                </h2>
                            </div>
                            <button id="page-sidenav-toggle"
                                    class="mdc-icon-button material-icons text-muted d-md-none d-lg-none d-xl-none">
                                more_vert
                            </button>
                        </div>
                        <div class="mdc-card p-3 mt-3">
                            <div class="main-carousel mb-3">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach($property->property_images as $image)
                                            <div class="swiper-slide">
                                                <img src="{{asset('property/gellary/')}}/{{$image->image}}"
                                                     alt="slide image"
                                                     data-src="{{asset('property/gellary/')}}/{{$image->image}}"
                                                     class="slide-item swiper-lazy">
                                                <div class="swiper-lazy-preloader"></div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="swiper-button-prev swipe-arrow mdc-fab mdc-fab--mini primary">
                                        <span class="mdc-fab__ripple"></span>
                                        <span class="mdc-fab__icon material-icons">keyboard_arrow_left</span>
                                    </button>
                                    <button class="swiper-button-next swipe-arrow mdc-fab mdc-fab--mini primary">
                                        <span class="mdc-fab__ripple"></span>
                                        <span class="mdc-fab__icon material-icons">keyboard_arrow_right</span>
                                    </button>
                                </div>
                            </div>

                            <div class="small-carousel">
                                <div id="small-carousel" class="swiper-container">
                                    <div class="swiper-wrapper">
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
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="mdc-card p-3 mt-3">
                            <h2 class="uppercase text-center fw-500 mb-2">Details</h2>
                            <div class="row details">
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Property Type:</span>
                                    <span>{{$property->property_cat->category}}</span>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Property Status:</span>
                                    <div class="row list">
                                        <span>Hot Offer</span>
                                        <span class="last">No Fees</span>
                                    </div>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>City:</span>
                                    <span>{{$property->city}}</span>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Zip Code:</span>
                                    <span>{{$property->zip_code}}</span>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Neighborhood:</span>
                                    <div class="row list">
                                        <span>{{$property->area}}</span>

                                    </div>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Street:</span>
                                    <div class="row list">
                                        <span>{{$property->street}}</span>

                                    </div>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Bedrooms:</span>
                                    <span>{{$property->additional_detail->bedrooms}}</span>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Bathrooms:</span>
                                    <span>{{$property->additional_detail->bathrooms}}</span>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Garages:</span>
                                    <span>{{$property->additional_detail->garages}}</span>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Property size:</span>
                                    <span>{{$property->additional_detail->area}} ft²</span>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Year Built:</span>
                                    <span>{{$property->additional_detail->year_built}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="mdc-card p-3 mt-3">
                            <h2 class="uppercase text-center fw-500 mb-2">Additional features</h2>
                            <div class="row details">
                                @foreach($property->additional_features as $feature)
                                    <div class="row col-xs-12 col-sm-6 item">
                                        <span>{{$feature->name}}:</span>
                                        <span>{{$feature->value}}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="mdc-card p-3 my-3">
                            <h2 class="uppercase text-center fw-500 mb-2">Description</h2>
                            <p>{{$property->description}}</p>
                        </div>

                    </div>

                    <aside class="mdc-drawer mdc-drawer--modal page-sidenav">
                        <a href="#" class="h-0"></a>
                        <div class="mdc-card p-3">
                            <div class="widget">
                                <div class="mdc-card o-hidden">
                                    <a href="agent.blade.php">
                                        <img src="{{asset('profile/')}}/{{$agent->image}}" alt="agent-4"
                                             class="d-block mw-100">
                                    </a>
                                    <div class="p-3">
                                        <h2 class="fw-600">{{$agent->name}}</h2>

                                        <p class="mt-3 text-muted fw-500">
                                            {{$agent->bio}}
                                        </p>

                                        <p class="row middle-xs">
                                            <i class="material-icons primary-color">email</i>
                                            <span class="mx-2 text-muted fw-500">{{$agent->email}}</span></p>

                                        <div class="row pb-3 p-relative">
                                            <div class="divider"></div>
                                        </div>
                                        <div class="row between-xs middle-xs">
                                            <div class="row start-xs middle-xs">
                                            </div>
                                            <a href="{{route('public_single_agent', $agent->id)}}" class="mdc-button">
                                                <span class="mdc-button__ripple"></span>
                                                <span class="mdc-button__label">View Profile</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(Auth::guest())

                                <div class="widget">
                                    <div class="widget-title bg-primary">Reply to the listing</div>
                                    <form action="{{route('messages.store')}}" method="post">
                                        @csrf
                                        <p>Interested in renting or buying this property? Then send us an email.</p>
                                        <input class="mdc-text-field__input" name="agent_id" type="hidden"
                                               value="{{$agent->id}}">
                                        <input class="mdc-text-field__input" name="subject" type="hidden"
                                               value="{{$property->title}}">
                                        <div
                                            class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100 custom-field my-2 ">
                                        <textarea name="body" class="mdc-text-field__input" rows="5"
                                                  placeholder="Message is required"></textarea>
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="feedback-message"
                                                           class="mdc-floating-label">Message</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                        <div class="row around-xs middle-xs p-2 mb-3">
                                            <button class="mdc-button mdc-button--raised bg-accent" type="submit">
                                                <span class="mdc-button__ripple"></span>
                                                <span class="mdc-button__label">Send email</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            @elseif($agent->id != auth()->user()->id)
                                <div class="widget">
                                    <div class="widget-title bg-primary">Reply to the listing</div>
                                    <form action="{{route('messages.store')}}" method="post">
                                        @csrf
                                        <p>Interested in renting or buying this property? Then send us an email.</p>
                                        <input class="mdc-text-field__input" name="agent_id" type="hidden"
                                               value="{{$agent->id}}">
                                        <input class="mdc-text-field__input" name="subject" type="hidden"
                                               value="{{$property->title}}">
                                        <div
                                            class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100 custom-field my-2 ">
                                        <textarea name="body" class="mdc-text-field__input" rows="5"
                                                  placeholder="Message is required"></textarea>
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="feedback-message"
                                                           class="mdc-floating-label">Message</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                        <div class="row around-xs middle-xs p-2 mb-3">
                                            <button class="mdc-button mdc-button--raised bg-accent" type="submit">
                                                <span class="mdc-button__ripple"></span>
                                                <span class="mdc-button__label">Send email</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            @endif

                        </div>
                    </aside>
                    <div class="mdc-drawer-scrim page-sidenav-scrim"></div>
                </div>
            </div>
        </div>
    </main>
@endsection
