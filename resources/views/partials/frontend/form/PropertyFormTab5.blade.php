<div class="row">
    <div class="col-xs-12 p-3">
        <h1 class="fw-500 text-center">Basic</h1>
    </div>
    <div class="col-xs-12 p-2">
        <div class="inline-text-field-container">
            <div
                class="mdc-text-field mdc-text-field--outlined mdc-text-field--invalid">
                <input class="mdc-text-field__input ">

                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                        <label class="mdc-floating-label">Title</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>
            <div class="mdc-text-field-helper-line">
                <div
                    class="mdc-text-field-helper-text mdc-text-field-helper-text--persistent mdc-text-field-helper-text--validation-msg">
                    <!---->Error message<!---->
                </div>

            </div>
        </div>
    </div>
    <div class="col-xs-12 p-2">
        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea">
            <textarea class="mdc-text-field__input" rows="5"></textarea>
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
            <input class="mdc-text-field__input">
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
        <div class="mdc-text-field mdc-text-field--outlined">
            <input class="mdc-text-field__input">
            <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                    <label class="mdc-floating-label">Price (€)</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 p-2">
        <div class="mdc-select mdc-select--outlined">
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
                    <li class="mdc-list-item mdc-list-item--selected"
                        data-value=""></li>
                    <li class="mdc-list-item" data-value="1">Office</li>
                    <li class="mdc-list-item" data-value="2">House</li>
                    <li class="mdc-list-item" data-value="3">Apartment</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 p-2">
        <div class="mdc-select mdc-select--outlined">
            <div class="mdc-select__anchor">
                <i class="mdc-select__dropdown-icon"></i>
                <div class="mdc-select__selected-text"></div>
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                        <label class="mdc-floating-label">Property Status</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>
            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                <ul class="mdc-list">
                    <li class="mdc-list-item mdc-list-item--selected"
                        data-value=""></li>
                    <li class="mdc-list-item" data-value="1">For Sale</li>
                    <li class="mdc-list-item" data-value="2">For Rent</li>
                    <li class="mdc-list-item" data-value="3">Open House</li>
                    <li class="mdc-list-item" data-value="4">No Fees</li>
                    <li class="mdc-list-item" data-value="5">Hot Offer</li>
                    <li class="mdc-list-item" data-value="6">Sold</li>
                </ul>
            </div>
        </div>

    </div>
    <div class="col-xs-12 mt-2">
        <label class="text-muted">GALLERY (max 8 images)</label>
        <div id="property-images" class="dropzone needsclick">
            <div class="dz-message needsclick text-muted">
                Drop files here or click to upload.
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
