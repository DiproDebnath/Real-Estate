<div class="row">
    <div class="col-xs-12 p-3">
        <h1 class="fw-500 text-center">Media</h1>
    </div>

    <div class="col-xs-12 p-0 dynamic-steps">
        <div class="row middle-xs my-3 px-2">
            <p class="mb-0"><span class="uppercase fw-500">Gallery Image</span><span
                    class="text-muted mx-3">(Max 8 Images)</span></p>
            <button class="mdc-icon-button material-icons primary-color add-step"
                    type="button" data-template-name="g_image">add_circle
            </button>
        </div>
        @if(isset($g_images))
            <div class="row middle-xs">
                @foreach($g_images as $image)
                    <div class="col-md-3 gellary_images g_image">
                        <div style="position: relative">
                            <img src="{{asset('property/gellary/')}}/{{$image->image}}"
                                 alt="operator"
                                 style="width: 180px;">
                            <div id="{{$image->id}}" class="image_delete" onclick="deleteImage('{{route('property-image', $image->id)}}', '{{$image->id}}')">
                                <i class="material-icons">cancel</i>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        @endif
        <div class="steps ">

            @if(!isset($g_images))
                <div class="step-section gellary_images">
                    <div class="row middle-xs">
                        <div class="d-none">
                            <span class="num">1</span>
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-xs-12 col-md-12 p-2">
                                    <div class="mdc-text-field mdc-text-field--outlined ">
                                        <input class="mdc-text-field__input" type="file" name="g_images[]">
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
            @endif

        </div>
    </div>
    <script id="g_image" type="text/template">
        <div class="step-section gellary_images">
            <div class="row middle-xs">
                <div class="d-none number"></div>
                <div class="col-xs-10">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined ">
                                <input class="mdc-text-field__input file_number" type="hidden" name="file_number">
                                <input class="mdc-text-field__input" type="file" name="g_images[]">
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
