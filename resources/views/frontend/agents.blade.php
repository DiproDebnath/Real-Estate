@extends("layouts.frontend")

@section('mainContent')
    <main class="content-offset-to-top">
        <div class="header-image-wrapper">
            <div class="bg" style="background-image: url('assets/images/others/contact.html');"></div>
            <div class="mask"></div>
            <div class="header-image-content">
                <h1 class="title">Our Agents</h1>
                <p class="desc">Hire a real estate agent, who will invest in your success</p>
            </div>
        </div>
        <div class="px-3">
            <div class="theme-container">
                <div class="row agents-wrapper">
                    @foreach($agents as $agent)
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="mdc-card o-hidden">
                                <a href="agent.blade.php">
                                    <img src="assets/images/agents/a-1.jpg" class="d-block mw-100">
                                </a>
                                <div class="p-3">
                                    <h2 class="fw-600">{{$agent->name}}</h2>

                                    <p class="mt-3 text-muted fw-500">
                                        {{$agent->bio}}
                                    </p>

                                    <p class="row middle-xs"><i class="material-icons primary-color">email</i><span
                                            class="mx-2 text-muted fw-500">{{$agent->email}}</span></p>

                                    <div class="row pb-3 p-relative">
                                        <div class="divider"></div>
                                    </div>
                                    <div class="row between-xs middle-xs">
                                        <div class="row start-xs middle-xs">
                                        </div>
                                        <a href="{{route('public_single_agent', $agent->id)}}" class="mdc-button">
                                            <span class="mdc-button__ripple"></span>
                                            <span class="mdc-button__label">View Profile</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{$agents->links('partials.frontend.paginator')}}
                </div>
            </div>
        </div>
    </main>
@endsection
