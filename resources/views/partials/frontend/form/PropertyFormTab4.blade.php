<div class="row">
    <div class="col-xs-12 p-3">
        <h1 class="fw-500 text-center">Media</h1>
    </div>

    <div class="col-xs-12 mt-2">
        <div class="col-xs-12 p-0 ">
            <div class="row middle-xs my-3 px-2">
                <p class="mb-0"><span class="uppercase fw-500">Gallery Image</span><span
                        class="text-muted mx-3">(Max 8 Images)</span></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-3 m-2">
            <div class="">
                <img src="{{asset('frontend/assets/images/props/house-2/1-medium.jpg')}}" alt="operator"  style="width: 180px;">
            </div>
        </div>
        <div class="col-xs-12 col-md-3 m-2">
            <div class="">
                <img src="{{asset('frontend/assets/images/props/house-2/1-medium.jpg')}}" alt="operator"  style="width: 180px;">
            </div>
        </div>
        <div class="col-xs-12 col-md-3 m-2">
            <div class="">
                <img src="{{asset('frontend/assets/images/props/house-2/1-medium.jpg')}}" alt="operator"  style="width: 180px;">
            </div>
        </div>
        <div class="col-xs-12 col-md-3 m-2">
            <div class="">
                <img src="{{asset('frontend/assets/images/props/house-2/1-medium.jpg')}}" alt="operator"  style="width: 180px;">
            </div>
        </div>
        <div class="col-xs-12 col-md-3 m-2">
            <div class="">
                <img src="{{asset('frontend/assets/images/props/house-2/1-medium.jpg')}}" alt="operator"  style="width: 180px;">
            </div>
        </div>
        <div class="col-xs-12 col-md-3 m-2">
            <div class="">
                <img src="{{asset('frontend/assets/images/props/house-2/1-medium.jpg')}}" alt="operator"  style="width: 180px;">
            </div>
        </div>
        <div class="col-xs-12 col-md-3 m-2">
            <div class="">
                <img src="{{asset('frontend/assets/images/props/house-2/1-medium.jpg')}}" alt="operator"  style="width: 180px;">
            </div>
        </div>
        <div class="col-xs-12 col-md-3 m-2">
            <div class="">
                <img src="{{asset('frontend/assets/images/props/house-2/1-medium.jpg')}}" alt="operator"  style="width: 180px;">
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-12 p-2">
        <div class="mdc-text-field mdc-text-field--outlined @error('g_images') mdc-text-field--invalid @enderror">
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
    <div class="col-xs-12 p-0 dynamic-steps">
        <div class="row middle-xs my-3 px-2">
            <p class="mb-0"><span class="uppercase fw-500">Plans</span></p>
            <button class="mdc-icon-button material-icons primary-color add-step"
                    type="button" data-template-name="plans">add_circle
            </button>
        </div>
        <div class="steps">
            <div class="step-section">
                <div class="row middle-xs">
                    <div class="col-xs-1 text-center fw-500">
                        <span class="num">1</span>
                    </div>
                    <div class="col-xs-10">
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 p-2">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                    <input class="mdc-text-field__input" name="plan_name[]">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label
                                                class="mdc-floating-label">Name</label>
                                        </div>
                                        <div
                                            class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-7 p-2">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                    <input class="mdc-text-field__input" name="plan_desc[]">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label
                                                class="mdc-floating-label">Desc</label>
                                        </div>
                                        <div
                                            class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 p-2">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                    <input class="mdc-text-field__input" name="plan_area[]">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Area
                                                (ft²)</label>
                                        </div>
                                        <div
                                            class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 p-2">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                    <input class="mdc-text-field__input" name="plan_rooms[]">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label
                                                class="mdc-floating-label">Rooms</label>
                                        </div>
                                        <div
                                            class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 p-2">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                    <input class="mdc-text-field__input" name="plan_baths[]">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label
                                                class="mdc-floating-label">Baths</label>
                                        </div>
                                        <div
                                            class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-12 p-2">
                                <div class="mdc-text-field mdc-text-field--outlined ">
                                    <input class="mdc-text-field__input" type="file" name="plan_images[]">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label
                                                class="mdc-floating-label">Image</label>
                                        </div>
                                        <div
                                            class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-1 text-center">
                        <button
                            class="mdc-icon-button material-icons warn-color remove-step"
                            type="button">cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script id="plans" type="text/template">
        <div class="step-section">
            <div class="row middle-xs">
                <div class="col-xs-1 text-center fw-500 number"></div>
                <div class="col-xs-10">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input class="mdc-text-field__input" name="plan_name[]">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Name</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-7 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input class="mdc-text-field__input" name="plan_desc[]">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Desc</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input class="mdc-text-field__input" name="plan_area[]">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Area
                                            (ft²)</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input class="mdc-text-field__input" name="plan_rooms[]">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Rooms</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input class="mdc-text-field__input" name="plan_baths[]">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Baths</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-12 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined ">
                                <input class="mdc-text-field__input" type="file" name="plan_images[]">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label
                                            class="mdc-floating-label">Image</label>
                                    </div>
                                    <div
                                        class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-1 text-center">
                    <button
                        class="mdc-icon-button material-icons warn-color remove-step"
                        type="button">cancel
                    </button>
                </div>
            </div>
        </div>
    </script>



    <div class="col-xs-12 py-3 row middle-xs">
        <div class="mdc-switch">
            <div class="mdc-switch__track"></div>
            <div class="mdc-switch__thumb-underlay">
                <div class="mdc-switch__thumb">
                    <input type="checkbox" id="featured"
                           class="mdc-switch__native-control">
                </div>
            </div>
        </div>
        <label for="featured" class="mx-2">Featured</label>
    </div>
    <div class="col-xs-12 p-2 mt-3 row between-xs">
        <button class="mdc-button mdc-button--raised prev-tab" type="button">
            <span class="mdc-button__ripple"></span>
            <i class="material-icons mdc-button__icon">navigate_before</i>
            <span class="mdc-button__label">Back</span>
        </button>
        <button class="mdc-button mdc-button--raised next-tab" type="submit">
            <span class="mdc-button__ripple"></span>
            <span class="mdc-button__label">Submit</span>
            <i class="material-icons mdc-button__icon">navigate_next</i>
        </button>
    </div>
</div>
