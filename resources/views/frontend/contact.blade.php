@extends('layouts.frontend')

@section('mainContent')
    <main class="content-offset-to-top main-toolbar-fixed">
        <div class="header-image-wrapper">
            <div class="bg" style="background-image: url('{{asset('frontend/assets/images/others/about.jpg')}}')"></div>
            <div class="mask"></div>
            <div class="header-image-content offset-bottom">
                <h1 class="title">Contact Us</h1>
                <p class="desc">Got a question? We'll give you straight answer</p>
            </div>
        </div>
        <div class="px-3">
            <div class="theme-container">
                <div class="mdc-card main-content-header mb-5">
                    <div class="row around-xs">
                        <div class="col-xs-12 col-sm-4">
                            <div class="column center-xs middle-xs text-center">
                                <i class="material-icons mat-icon-lg primary-color">home</i>
                                <h3 class="primary-color py-1">ADDRESS :</h3>
                                <span class="text-muted fw-500">2903 Avenue Z, Brooklyn, New York City</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="column center-xs middle-xs text-center">
                                <i class="material-icons mat-icon-lg primary-color">call</i>
                                <h3 class="primary-color py-1">PHONES :</h3>
                                <span class="text-muted fw-500">(212) 457-2308</span>
                                <span class="text-muted fw-500">(212) 457-2309</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="column center-xs middle-xs text-center">
                                <i class="material-icons mat-icon-lg primary-color">mail_outline</i>
                                <h3 class="primary-color py-1">E-MAIL :</h3>
                                <span class="text-muted fw-500">contact@example.com</span>
                                <span class="text-muted fw-500">info@example.com</span>
                            </div>
                        </div>
                        <div class="col-xs-12 mt-3 px-3 p-relative">
                            <div class="divider w-100"></div>
                        </div>
                        <h3 class="w-100 text-center py-3">CONTACT US</h3>
                        @if(session('sendmessage'))
                            {{session('sendmessage')}}
                        @else
                            <form action="{{route('messages.store')}}" class="contact-form row" method="post">
                                @csrf
                                <div class="col-xs-12 col-sm-12  p-2">
                                    <input class="mdc-text-field__input" name="agent_id" type="hidden"
                                           value="{{$user->id}}">
                                    <div class="mdc-text-field mdc-text-field--outlined w-100">
                                        <input class="mdc-text-field__input" name="subject"
                                               placeholder="Phone is required">
                                        <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label" style="">Subject</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 p-2">
                                    <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100">
                                    <textarea class="mdc-text-field__input" rows="5" name="body"
                                              placeholder="Message is required"></textarea>
                                        <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label" style="">Message</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                @can('isAdmin')
                                    @else
                                    <div class="col-xs-12 w-100 py-3 text-center">
                                        <button class="mdc-button mdc-button--raised mdc-ripple-upgraded" type="submit">
                                            <span class="mdc-button__ripple"></span>
                                            <span class="mdc-button__label">Submit</span>
                                        </button>
                                    </div>
                                @endcan
                            </form>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </main>

@endsection
