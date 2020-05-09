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
                                    <form enctype="multipart/form-data" action="@can('isAdmin'){{ route('admin_profile_store')}}
                                    @elsecan('isAgent'){{ route('agent_profile_store')}}@else{{route('user_profile_store')}} @endcan" method="post">
                                        @csrf
                                        @method('patch')
                                        <div class="row">
                                            <div class="input-group input-group-md mb-4 col-md-6">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </span>
                                                </div>
                                                <input type="text" value="{{$user->name}}" placeholder="Name" name="name" class="form-control @error('name')is-invalid @enderror"/>
                                                @error('name')
                                                <div class="invalid-feedback ">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="input-group input-group-md mb-4 col-md-6">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-at"></i></span>
                                                </div>
                                                <input type="email" value="{{$user->email}}" name="email" placeholder="E-mail" class="form-control @error('email')is-invalid @enderror"/>
                                                @error('email')
                                                <div class="invalid-feedback ">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="input-group input-group-md mb-4 col-md-6">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-file"></i></span>
                                                </div>

                                                <input type="file"   id="profile_pic" name="profile_pic" placeholder="Image" class="form-control @error('profile_pic')is-invalid @enderror"/>
                                                @error('profile_pic')
                                                <div class="invalid-feedback ">
                                                    {{$message}}
                                                </div>

                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">About</label>
                                            <textarea class="form-control @error('profile_pic')is-invalid @enderror"
                                                      id="exampleFormControlTextarea1" name="bio"
                                                      rows="5">{{$user->bio}}</textarea>
                                            @error('bio')
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
    <script>
        function nnnn(){
            console.log(document.getElementById(profile_pic));
        }
    </script>
@endsection
