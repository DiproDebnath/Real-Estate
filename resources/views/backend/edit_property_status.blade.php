@extends('layouts.backend')

@section('mainContent')
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-section" id="overview">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Property Status</h2>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('status.update', $status->id)}}" method="post">
                                        @csrf
                                        @method('patch')
                                        <div class="row">
                                            <div class="input-group input-group-md m-4 ">
                                                <label for="recipient-name" class="col-form-label">Status Name:</label>
                                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                       id="title" value="{{$status->title}}" name="title">
                                                @error('title')
                                                <div class="invalid-feedback">
                                                    {{$message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 ml-2 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                <a href="{{route('status.index')}}"><button class="btn btn-space btn-secondary">Cancel</button></a>
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

@endsection
