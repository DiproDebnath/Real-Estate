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
                                    <h2 class="my-3">Your property <span class="primary-color">"Property Name"</span>
                                        has been submitted</h2>
                                    <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Sed tempus dolor ante, ut luctus mi faucibus a. Ut eu tincidunt neque.
                                        Proin porttitor id ligula id placerat. Integer nec nulla varius, dapibus libero
                                        quis, semper eros. Aliquam erat volutpat. Proin volutpat tellus vel purus
                                        interdum euismod.</p>
                                </div>
                                <div class="row center-xs middle-xs py-3">
                                    <button class="mdc-button mdc-button--raised bg-accent" type="button">
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Return to submit new property</span>
                                    </button>
                                </div>



                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
