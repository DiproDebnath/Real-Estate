<div class="row">
    <div class="col-xs-12 p-3">
        <h1 class="fw-500 text-center">Additional</h1>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 p-2">
        <div class="mdc-text-field mdc-text-field--outlined @error('bedrooms') mdc-text-field--invalid @enderror">
            <input class="mdc-text-field__input" name="bedrooms"
                   value="@if(isset($details)){{$details['bedrooms']}}@else{{old('bedrooms')}}@endif">
            <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                    <label class="mdc-floating-label">Bedrooms</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 p-2">
        <div class="mdc-text-field mdc-text-field--outlined @error('bathrooms') mdc-text-field--invalid @enderror">
            <input class="mdc-text-field__input" name="bathrooms"
                   value="@if(isset($details)){{$details['bathrooms']}}@else{{old('bathrooms')}}@endif">
            <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                    <label class="mdc-floating-label">Bathrooms</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 p-2">
        <div class="mdc-text-field mdc-text-field--outlined @error('garages') mdc-text-field--invalid @enderror">
            <input class="mdc-text-field__input" name="garages"
                   value="@if(isset($details)){{$details['garages']}}@else{{old('garages')}}@endif">
            <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                    <label class="mdc-floating-label">Garages</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 p-2">
        <div class="mdc-text-field mdc-text-field--outlined @error('area_ft') mdc-text-field--invalid @enderror">
            <input class="mdc-text-field__input" name="area_ft"
                   value="@if(isset($details)){{$details['area']}}@else{{old('area_ft')}}@endif">
            <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                    <label class="mdc-floating-label">Area (ft²)</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 p-2">
        <div class="mdc-text-field mdc-text-field--outlined @error('year_built') mdc-text-field--invalid @enderror">
            <input class="mdc-text-field__input" name="year_built"
                   value="@if(isset($details)){{$details['year_built']}}@else{{old('year_built')}}@endif">
            <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                    <label class="mdc-floating-label">Year Built</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 p-0 dynamic-steps">
        <div class="row middle-xs my-3 px-2">
            <p class="mb-0"><span class="uppercase fw-500">Additional features</span>
            </p>
            <button class="mdc-icon-button material-icons primary-color add-step"
                    type="button" data-template-name="features">add_circle
            </button>
        </div>
        <div class="steps">
            @if(isset($features))
                @foreach($features as $feature)
                    <div class="step-section">
                        <div class="row middle-xs">
                            <div class="col-xs-1 text-center fw-500">
                                <span class="num">{{$loop->iteration }}</span>
                            </div>
                            <div class="col-xs-10">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5 p-2">
                                        <div class="mdc-text-field mdc-text-field--outlined ">
                                            <input class="mdc-text-field__input" name="feature_id[]" type="hidden"
                                            value="{{$feature->id}}">
                                            <input class="mdc-text-field__input" name="feature_name[]"
                                                   value="{{$feature->name}}">
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
                                        <div class="mdc-text-field mdc-text-field--outlined ">
                                            <input class="mdc-text-field__input" name="feature_value[]"
                                                   value="{{$feature->value}}">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label
                                                        class="mdc-floating-label">Value</label>
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
                                    id="{{$feature->id}}"
                                    onclick="deleteFeature('{{route('features', $feature->id)}}', '{{$feature->id}}')"
                                    class="mdc-icon-button material-icons warn-color remove-step"
                                    type="button">cancel
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="step-section">
                    <div class="row middle-xs">
                        <div class="col-xs-1 text-center fw-500">
                            <span class="num">1</span>
                        </div>
                        <div class="col-xs-10">
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 p-2">
                                    <div class="mdc-text-field mdc-text-field--outlined ">
                                        <input class="mdc-text-field__input" name="feature_name[]">
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
                                    <div class="mdc-text-field mdc-text-field--outlined ">
                                        <input class="mdc-text-field__input" name="feature_value[]">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label
                                                    class="mdc-floating-label">Value</label>
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
            @endif
        </div>
    </div>
    <script id="features" type="text/template">
        <div class="step-section">
            <div class="row middle-xs">
                <div class="col-xs-1 text-center fw-500 number"></div>
                <div class="col-xs-10">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined ">
                                <input class="mdc-text-field__input" name="feature_name[]">
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
                            <div class="mdc-text-field mdc-text-field--outlined ">
                                <input class="mdc-text-field__input" name="feature_value[]">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Value</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
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
    <div class="col-xs-12 p-2 mt-3 row between-xs">
        <button class="mdc-button mdc-button--raised prev-tab" type="button">
            <span class="mdc-button__ripple"></span>
            <i class="material-icons mdc-button__icon">navigate_before</i>
            <span class="mdc-button__label">Back</span>
        </button>
        <button class="mdc-button mdc-button--raised next-tab" type="button">
            <span class="mdc-button__ripple"></span>
            <span class="mdc-button__label">Next</span>
            <i class="material-icons mdc-button__icon">navigate_next</i>
        </button>
    </div>
</div>



