@extends("layouts.frontend")

@section('mainContent')
    <main>
        <div class="px-3">
            <div class="theme-container">
                <div class="py-3">
                    <div class="mdc-card p-3">
                        <div class="mdc-tab-bar-wrapper submit-property">
                            <div class="mdc-tab-bar mb-3">
                                <div class="mdc-tab-scroller">
                                    <div class="mdc-tab-scroller__scroll-area">
                                        <div class="mdc-tab-scroller__scroll-content">
                                            <button class="mdc-tab mdc-tab--active" tabindex="0">
                                                <span class="mdc-tab__content">
                                                <span class="mdc-tab__text-label">Basic</span>
                                                </span>
                                                <span class="mdc-tab-indicator mdc-tab-indicator--active">
                                                <span
                                                    class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                                </span>
                                                <span class="mdc-tab__ripple"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form enctype="multipart/form-data" action="{{route('properties.store')}}" method="post" id="sp-basic-form" >
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12 p-3">
                                        <h1 class="fw-500 text-center">Basic</h1>
                                    </div>
                                    <div class="col-xs-12 p-2">
                                        <div class="inline-text-field-container">
                                            <div
                                                class="mdc-text-field mdc-text-field--outlined @error('title') mdc-text-field--invalid @enderror">
                                                <input class="mdc-text-field__input" type="text" name="title" >
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">Title</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            @error('title')
                                            <div class="mdc-text-field-helper-line">
                                                <div
                                                    class="mdc-text-field-helper-text mdc-text-field-helper-text--persistent mdc-text-field-helper-text--validation-msg">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-2">
                                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea">
                                            <textarea class="mdc-text-field__input" rows="5" name="description"></textarea>
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Description</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 p-2">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" name="price">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Price ($)</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 p-2">
                                        <div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <input type="text" id="property_cat" name="property_cat"  class="d-none" hidden>
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">Property Category</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list" >
                                                    <li class="mdc-list-item mdc-list-item--selected"
                                                        data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1">Office</li>
                                                    <li class="mdc-list-item" data-value="2">House</li>
                                                    <li class="mdc-list-item" data-value="3">Apartment</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-xs-12 mb-2 p-0">
                                        <p class="uppercase m-2 fw-500">Property Status</p>
                                        <div class="features">

                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" value="1" name="status[]" class="mdc-checkbox__native-control" id="air-conditioning">
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="air-conditioning">Air Conditioning</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" value="2" name="status[]" class="mdc-checkbox__native-control" id="air-conditioning">
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="air-conditioning">Air </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-xs-12 mt-2">
                                        <div class="col-xs-12 p-0 ">
                                            <div class="row middle-xs my-3 px-2">
                                                <p class="mb-0"><span class="uppercase fw-500">Gallery Image</span><span
                                                        class="text-muted mx-3">(Max 8 Images)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-12 p-2">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input"  type="file" name="g_images[]" multiple>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Images</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 p-2 mt-3 end-xs">
                                        <button class="mdc-button mdc-button--raised next-tab" type="button">
                                            <span class="mdc-button__ripple"></span>
                                            <span class="mdc-button__label">Next</span>
                                            <i class="material-icons mdc-button__icon">navigate_next</i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
