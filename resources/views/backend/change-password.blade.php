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

                                        <div class="input-group input-group-md mb-4 ">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-unlock"></i></span>
                                            </div>
                                            <input type="password" placeholder="Current Password" class="form-control"/>
                                        </div>
                                        <div class="input-group input-group-md mb-4 ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                            </div>
                                            <input type="password" placeholder="New Password" class="form-control"/>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="input-group input-group-md mb-4 ">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class=" fas fa-lock"></i></span>
                                            </div>
                                            <input type="password" placeholder="Confirm Password" class="form-control"/>
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
