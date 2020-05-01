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
                                    <form>
                                        <div class="row">
                                            <div class="input-group input-group-md mb-4 col-md-6">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </span>
                                                </div>
                                                <input type="text" placeholder="Name" class="form-control"/>
                                            </div>
                                            <div class="input-group input-group-md mb-4 col-md-6">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-user-md"></i></span>
                                                </div>
                                                <input type="text" placeholder="Username" class="form-control"/>
                                            </div>
                                            <div class="input-group input-group-md mb-4 col-md-6">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-at"></i></span>
                                                </div>
                                                <input type="email" placeholder="E-mail" class="form-control"/>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="input-group input-group-md mb-4 col-md-6">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-file"></i></span>
                                                </div>
                                                <input type="file"  onchange="nnnn()" id="profile_pic" name="profile_pic" placeholder="Image" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">About</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="5"></textarea>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
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
