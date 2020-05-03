<div class="row">
    <div class="col-xs-12 p-3">
        <h1 class="fw-500 text-center">Basic</h1>
    </div>
    <div class="col-xs-12 p-2">
        <div class="inline-text-field-container">
            <div
                class="mdc-text-field mdc-text-field--outlined @error('title') mdc-text-field--invalid @enderror">
                <input class="mdc-text-field__input"
                       type="text"
                       name="title"
                       value="@if(isset($property)) {{$property->title }}@else{{old('title')}}@endif"/>
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                        <label class="mdc-floating-label">Title</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 p-2">
        <div
            class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea @error('description') mdc-text-field--invalid @enderror">
            <textarea class="mdc-text-field__input"
                      rows="5"
                      name="description">@if(isset($property)){{$property->description }}@else{{old('description')}}@endif</textarea>
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
        <div class="mdc-text-field mdc-text-field--outlined @error('price') mdc-text-field--invalid @enderror">
            <input class="mdc-text-field__input"
                   name="price"
                   value="@if(isset($property)){{$property->price }}@else{{old('price')}}@endif">
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
                <input type="text"
                       id="property_cate_id"
                       name="property_cate_id"
                       class="d-none"
                       hidden
                       value="@if(isset($property)){{$property->property_cate_id }}@else{{old('property_cate_id')}}@endif"
                />
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
                <ul class="mdc-list">

                    @foreach($property_cat as $cat)
                        @if(isset($property) && $property->property_cate_id == $cat->id)
                            <li class="mdc-list-item mdc-list-item--selected"
                                data-value="{{$cat->id}}">{{$cat->category}}</li>
                        @else
                            <li class="mdc-list-item" data-value="{{$cat->id}}">{{$cat->category}}</li>
                        @endif
                    @endforeach

                </ul>
            </div>
        </div>
    </div>

    <div class="col-xs-12 mb-2 p-0">
        <p class="uppercase m-2 fw-500">Property Status</p>
        <div class="features">
            @if(isset($property))
                @foreach($status as $stats)
                    @if( isset($property_stats[0]) && $property_stats[0] ->pivot->status_id == $stats->id )
                        <div class="mdc-form-field">
                            <div class="mdc-checkbox">
                                <input type="checkbox"
                                       value="{{$stats->id}}"
                                       name="status[]" checked
                                       class="mdc-checkbox__native-control"
                                       id="air-conditioning">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <div class="mdc-checkbox__ripple"></div>
                            </div>
                            <label for="air-conditioning">{{$stats->title}}</label>
                        </div>
                    @elseif( isset($property_stats[1]) && $property_stats[1]->pivot->status_id == $stats->id)
                        <div class="mdc-form-field">
                            <div class="mdc-checkbox">
                                <input type="checkbox"
                                       value="{{$stats->id}}"
                                       name="status[]" checked
                                       class="mdc-checkbox__native-control"
                                       id="air-conditioning">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <div class="mdc-checkbox__ripple"></div>
                            </div>
                            <label for="air-conditioning">{{$stats->title}}</label>
                        </div>
                    @else
                        <div class="mdc-form-field">
                            <div class="mdc-checkbox">
                                <input type="checkbox"
                                       value="{{$stats->id}}"
                                       name="status[]"
                                       class="mdc-checkbox__native-control"
                                       id="air-conditioning">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <div class="mdc-checkbox__ripple"></div>
                            </div>
                            <label for="air-conditioning">{{$stats->title}}</label>
                        </div>
                    @endif
                @endforeach
            @else
                @foreach($status as $stats)
                    <div class="mdc-form-field">
                        <div class="mdc-checkbox">
                            <input type="checkbox"
                                   value="{{$stats->id}}"
                                   name="status[]"
                                   class="mdc-checkbox__native-control"
                                   id="air-conditioning">
                            <div class="mdc-checkbox__background">
                                <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                    <path class="mdc-checkbox__checkmark-path" fill="none"
                                          d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                </svg>
                                <div class="mdc-checkbox__mixedmark"></div>
                            </div>
                            <div class="mdc-checkbox__ripple"></div>
                        </div>
                        <label for="air-conditioning">{{$stats->title}}</label>
                    </div>
                @endforeach
            @endif
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
