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
                            <form enctype="multipart/form-data" action="{{route('properties.store')}}" method="post" id="sp-basic-form" class="row">
                                @csrf
                                <div class="tab-content tab-content--active">
                                    @include('partials.frontend.form.PropertyFormTab1', ['status', "property_cat"])
                                </div>
                                <div class="tab-content">
                                    @include('partials.frontend.form.PropertyFormTab2')
                                </div>
                                <div class="tab-content">
                                    @include('partials.frontend.form.PropertyFormTab3')
                                </div>
                                <div class="tab-content">
                                    @include('partials.frontend.form.PropertyFormTab4')
                                </div>
                            </form>
                            <div class="tab-content">

                            </div>


                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
