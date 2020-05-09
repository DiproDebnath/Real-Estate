<form action="{{route('search')}}" id="filters" class="search-wrapper" method="get">

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 p-2">
            <div class="mdc-select mdc-select--outlined">
                <input type="hidden" id="cateogry_id" name="cateogry_id">
                <div class="mdc-select__anchor">
                    <i class="mdc-select__dropdown-icon"></i>
                    <div class="mdc-select__selected-text"></div>
                    <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                            <label class="mdc-floating-label">Property Type</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                    </div>
                </div>
                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                    <ul class="mdc-list">
                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                        @foreach($categories as $category)
                        <li class="mdc-list-item" data-value="{{$category->id}}">{{$category->category}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 p-2">
            <div class="mdc-text-field mdc-text-field--outlined">
                <input class="mdc-text-field__input" type="text" name="city">
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                        <label class="mdc-floating-label">City</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>

        </div>
        <div class="col-xs-6 col-md-2 p-2">
            <div class="mdc-text-field mdc-text-field--outlined">
                <input class="mdc-text-field__input" name="price_form">
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                        <label class="mdc-floating-label">Price From</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-2 p-2 to">
            <div class="mdc-text-field mdc-text-field--outlined">
                <input class="mdc-text-field__input" name="price_to">
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                        <label class="mdc-floating-label">Price To</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row center-xs middle-xs p-2">
        <button class="mdc-button mdc-button--raised bg-warn mr-2" type="button" id="clear-filter">
            <span class="mdc-button__ripple"></span>
            <span class="mdc-button__label">Clear</span>
        </button>
        <button class="mdc-button mdc-button--raised " type="submit">
            <span class="mdc-button__ripple"></span>
            <i class="material-icons mdc-button__icon">search</i>
            <span class="mdc-button__label">Search</span>
        </button>
    </div>
</form>
