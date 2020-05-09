@extends('layouts.backend')
@section('mainContent')
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-10">
                    <div class="page-section" id="overview">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h2>Profile</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="@can('isAdmin'){{ route('admin_password_store')}}
                                    @elsecan('isAgent'){{ route('agent_password_store')}}@else{{route('user_password_store')}} @endcan" method="post">
                                        @csrf
                                        <div class="input-group input-group-md mb-4 ">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-unlock"></i></span>
                                            </div>
                                            <input type="password" name="currentpassword" placeholder="Current Password" class="form-control @error('currentpassword')is-invalid @enderror" />
                                            @error('currentpassword')
                                            <div class="invalid-feedback ">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="input-group input-group-md mb-4 ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                            </div>
                                            <input type="password" name="password" placeholder="New Password" class="form-control @error('password')is-invalid @enderror"/>
                                            @error('password')
                                            <div class="invalid-feedback ">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="input-group input-group-md mb-4 ">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class=" fas fa-lock"></i></span>
                                            </div>
                                            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control @error('password_confirmation')is-invalid @enderror"/>
                                            @error('password_confirmation')
                                            <div class="invalid-feedback ">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="input-group input-group-md mb-4 ">
                                            <button class="btn btn-submit btn-primary" type="submit">submit</button>

                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
