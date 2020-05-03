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
                                            <button class="mdc-tab " tabindex="0">
                                                <span class="mdc-tab__content">
                                                <span class="mdc-tab__text-label">Address</span>
                                                </span>
                                                <span class="mdc-tab-indicator mdc-tab-indicator">
                                                <span
                                                    class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                                </span>
                                                <span class="mdc-tab__ripple"></span>
                                            </button>
                                            <button class="mdc-tab mdc-tab" tabindex="0">
                                                <span class="mdc-tab__content">
                                                <span class="mdc-tab__text-label">Additional</span>
                                                </span>
                                                <span class="mdc-tab-indicator mdc-tab-indicator">
                                                <span
                                                    class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                                </span>
                                                <span class="mdc-tab__ripple"></span>
                                            </button>
                                            <button class="mdc-tab mdc-tab" tabindex="0">
                                                <span class="mdc-tab__content">
                                                <span class="mdc-tab__text-label">Media</span>
                                                </span>
                                                <span class="mdc-tab-indicator mdc-tab-indicator">
                                                <span
                                                    class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                                </span>
                                                <span class="mdc-tab__ripple"></span>
                                            </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <form enctype="multipart/form-data"
                              action="@if(isset($property)) {{route('properties.update',$property->id )}}@else{{route('properties.store')}} @endif"
                              method="post" id="sp-basic-form" class="row">
                            @csrf
                            @if(isset($property)) @method('patch') @endif

                            <div class="tab-content tab-content--active">
                                @if(isset($property))
                                    @include('partials.frontend.form.PropertyFormTab1', ['status', "property_cat", 'property', 'property_stats'] )
                                @else
                                    @include('partials.frontend.form.PropertyFormTab1', ['status', "property_cat"])
                                @endif
                            </div>
                            <div class="tab-content">
                                @if(isset($property))
                                    @include('partials.frontend.form.PropertyFormTab2', ['property'])
                                @else
                                    @include('partials.frontend.form.PropertyFormTab2')
                                @endif

                            </div>
                            <div class="tab-content">
                                @if(isset($property))
                                    @include('partials.frontend.form.PropertyFormTab3', ['g_images' ])
                                @else
                                    @include('partials.frontend.form.PropertyFormTab3')
                                @endif

                            </div>
                            <div class="tab-content">
                                @if(isset($property))
                                    @include('partials.frontend.form.PropertyFormTab4', ['details' ,'features'])
                                @else
                                    @include('partials.frontend.form.PropertyFormTab4')
                                @endif

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('javascripts')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
@endsection
