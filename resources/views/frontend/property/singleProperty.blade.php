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
                            <button id="page-sidenav-toggle" class="mdc-icon-button material-icons text-muted d-md-none d-lg-none d-xl-none">
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
                        <div class="mdc-card p-3 mt-3">
                            <h2 class="uppercase text-center fw-500 mb-2">Description</h2>
                            <p>{{$property->description}}</p>
                        </div>
                        <div class="mdc-card p-5 mt-5">
                            <h2 class="uppercase text-center fw-500 mb-2">Leave a Reply</h2>
                            <div class="row pb-3 p-relative">
                                <div class="divider"></div>
                            </div>
                            <div class="reviews mt-3">
                                <div class="review-item">
                                    <img src="assets/images/avatars/avatar-1.png" alt="avatar-1" class="author-img">
                                    <div class="review-content">
                                        <p class="d-flex mb-0">
                                            <span class="author-name">Bruno Vespa</span>
                                            <i class="material-icons text-muted px-1" title="Dissatisfied">sentiment_dissatisfied</i>
                                        </p>
                                        <p class="text-muted fw-500 mb-2"><small>13 January, 2018 at 7:09</small></p>
                                        <p class="text">Integer id eros et mi fringilla imperdiet. In dictum turpis eget magna viverra condimentum. Ut malesuada interdum ultrices. Proin tristique sem pellentesque, posuere dui in, maximus magna. Aenean vehicula, tortor gravida elementum tincidunt, justo lorem vestibulum ex, eget egestas arcu tellus in magna.</p>
                                    </div>
                                </div>
                                <div class="review-item">
                                    <img src="assets/images/avatars/avatar-2.png" alt="avatar-2" class="author-img">
                                    <div class="review-content">
                                        <p class="d-flex mb-0">
                                            <span class="author-name">Julia Aniston</span>
                                            <i class="material-icons text-muted px-1" title="Very Satisfied">sentiment_very_satisfied</i>
                                        </p>
                                        <p class="text-muted fw-500 mb-2"><small>04 February, 2018 at 10:22</small></p>
                                        <p class="text">Nulla accumsan, lacus sed suscipit rutrum, turpis augue accumsan metus, in accumsan urna mi vehicula lorem. Pellentesque semper nibh vitae augue placerat finibus. Nulla sed porttitor nunc, quis tristique sem. Quisque in varius nisl. Integer turpis lorem, ultricies sed sem nec, commodo molestie arcu. Nulla finibus ex tortor, et suscipit magna semper consectetur. Cras sit amet metus dui. Maecenas eget dui at ex varius malesuada vel non felis.</p>
                                    </div>
                                </div>
                                <div class="review-item">
                                    <img src="assets/images/avatars/avatar-3.png" alt="avatar-3" class="author-img">
                                    <div class="review-content">
                                        <p class="d-flex mb-0">
                                            <span class="author-name">Andy Warhol</span>
                                            <i class="material-icons text-muted px-1" title="Neutral">sentiment_neutral</i>
                                        </p>
                                        <p class="text-muted fw-500 mb-2"><small>14 February, 2018 at 11:10</small></p>
                                        <p class="text">Pellentesque hendrerit vel turpis aliquam placerat. Suspendisse ullamcorper congue feugiat. Etiam gravida metus ac massa posuere venenatis. Pellentesque vehicula lobortis dolor, ac pretium dolor maximus quis. Fusce vitae iaculis mauris, quis posuere ex. Mauris vitae convallis nibh. Etiam eget enim at orci interdum maximus nec in ante.</p>
                                    </div>
                                </div>
                            </div>
                            <h3 class="uppercase mt-3">Leave your review</h3>
                            <div class="row pb-2 p-relative">
                                <div class="divider"></div>
                            </div>
                            <p class="mt-3 text-muted">Your email address will not be published. Required fields are marked *</p>
                            <h3 class="row flex-nowrap middle-xs my-2 text-muted">
                                <span>Your Rating:</span>
                                <button class="mdc-icon-button d-flex middle-xs center-xs p-0" title="Very Dissatisfied">
                                    <span class="material-icons mat-icon-lg">sentiment_very_dissatisfied</span>
                                </button>
                                <button class="mdc-icon-button d-flex middle-xs center-xs p-0" title="Dissatisfied">
                                    <span class="material-icons mat-icon-lg">sentiment_dissatisfied</span>
                                </button>
                                <button class="mdc-icon-button d-flex middle-xs center-xs p-0" title="Neutral">
                                    <span class="material-icons mat-icon-lg">sentiment_neutral</span>
                                </button>
                                <button class="mdc-icon-button d-flex middle-xs center-xs p-0" title="Satisfied">
                                    <span class="material-icons mat-icon-lg">sentiment_satisfied</span>
                                </button>
                                <button class="mdc-icon-button d-flex middle-xs center-xs p-0" title="Very Satisfied">
                                    <span class="material-icons mat-icon-lg">sentiment_very_satisfied</span>
                                </button>
                            </h3>
                            <form action="javascript:void(0);" class="row comment-form">
                                <div class="col-xs-12">
                                    <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100 custom-field my-2">
                                        <textarea class="mdc-text-field__input" rows="5"></textarea>
                                        <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="feedback-message" class="mdc-floating-label">Your review</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                        <input class="mdc-text-field__input">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Your name</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                        <input class="mdc-text-field__input">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Your email</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 text-center mt-3">
                                    <button class="mdc-button mdc-button--raised" type="button">
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Submit review</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <aside class="mdc-drawer mdc-drawer--modal page-sidenav">
                        <a href="#" class="h-0"></a>
                        <div class="mdc-card p-3">
                            <div class="widget">
                                <div class="mdc-card o-hidden">
                                    <a href="agent.blade.php">
                                        <img src="assets/images/agents/a-4.jpg" alt="agent-4" class="d-block mw-100">
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
                                            <a href="javascript:void(0);" class="mdc-button">
                                                <span class="mdc-button__ripple"></span>
                                                <span class="mdc-button__label">View Profile</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget-title bg-primary">Reply to the listing</div>
                                <form action="javascript:void(0);">
                                    <p>Interested in renting or buying this property? Then send us an email.</p>
                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                        <input class="mdc-text-field__input">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Name</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                        <input class="mdc-text-field__input">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Email</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                        <input class="mdc-text-field__input">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Phone</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                    <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100 custom-field my-2">
                                        <textarea class="mdc-text-field__input" rows="5" placeholder="Message is required"></textarea>
                                        <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="feedback-message" class="mdc-floating-label">Message</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                    <div class="row around-xs middle-xs p-2 mb-3">
                                        <button class="mdc-button mdc-button--raised bg-accent" type="button">
                                            <span class="mdc-button__ripple"></span>
                                            <span class="mdc-button__label">Send email</span>
                                        </button>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </aside>
                    <div class="mdc-drawer-scrim page-sidenav-scrim"></div>
                </div>
            </div>
        </div>
    </main>
    @endsection
