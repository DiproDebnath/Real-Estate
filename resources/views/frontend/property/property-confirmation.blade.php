@extends("layouts.frontend")

@section('mainContent')
    <main>
        <div class="px-3">
            <div class="theme-container">
                <div class="py-3">
                    <div class="mdc-card p-3">
                        <div class="mdc-tab-bar-wrapper submit-property">


                                <div class="column center-xs middle-xs pt-5 text-center">
                                    <button class="mdc-fab primary">
                                        <span class="mdc-fab__ripple"></span>
                                        <span class="mdc-fab__icon material-icons mat-icon-lg">check</span>
                                    </button>
                                    <h2 class="mt-3 uppercase">Congratulation!</h2>
                                    <h2 class="my-3">Your property <span class="primary-color">"{{$property->title}}"</span>
                                        has been submitted</h2>
                                    <p class="text-muted fw-500"> {{$property->description}}</p>
                                </div>
                                <div class="row center-xs middle-xs py-3">
                                    <a href="{{route('properties.create')}}" style="text-decoration: none">
                                        <button class="mdc-button mdc-button--raised bg-accent" type="button">
                                            <span class="mdc-button__ripple"></span>
                                            <span class="mdc-button__label">Return to submit new property</span>
                                        </button>
                                    </a>
                                </div>



                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
