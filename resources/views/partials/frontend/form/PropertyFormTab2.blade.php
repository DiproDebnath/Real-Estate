<div class="row">
    <div class="col-xs-12 p-3">
        <h1 class="fw-500 text-center">Address</h1>
    </div>



    <div class="col-xs-12 col-sm-6 p-2">
        <div class="mdc-text-field mdc-text-field--outlined @error('city') mdc-text-field--invalid @enderror">
            <input class="mdc-text-field__input" name="city" value="@if(isset($property)){{$property->city}}@else{{old('city')}}@endif">
            <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                    <label class="mdc-floating-label">City</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 p-2">
        <div class="mdc-text-field mdc-text-field--outlined @error('zip_code') mdc-text-field--invalid @enderror">
            <input class="mdc-text-field__input" name="zip_code" value="@if(isset($property)){{$property->zip_code}}@else{{old('zip_code')}}@endif">
            <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                    <label class="mdc-floating-label">Zip Code</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 p-2">
        <div class="mdc-text-field mdc-text-field--outlined @error('street') mdc-text-field--invalid @enderror">
            <input class="mdc-text-field__input" name="street" value="@if(isset($property)){{$property->street}}@else{{old('street')}}@endif">
            <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                    <label class="mdc-floating-label">Street</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 p-2">
        <div class="mdc-text-field mdc-text-field--outlined @error('area') mdc-text-field--invalid @enderror">
            <input class="mdc-text-field__input" name="area" value="@if(isset($property)){{$property->area}}@else{{old('area')}}@endif">
            <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                    <label class="mdc-floating-label">Area</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
            </div>
        </div>
    </div>


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
