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
                                    <h2>Property Category</h2>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('property-category.update', $category->id)}}" method="post">
                                        @csrf
                                        @method('patch')
                                        <div class="row">
                                            <div class="input-group input-group-md m-4 ">
                                                <label for="recipient-name" class="col-form-label">Name:</label>
                                                <input type="text" class="form-control @error('property_cate') is-invalid @enderror"
                                                       id="property_type" value="{{$category->category}}" name="property_cate">
                                                @error('property_cate')
                                                <div class="invalid-feedback">
                                                    {{$message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 ml-2 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                <a href="{{route('property-category.index')}}"><button class="btn btn-space btn-secondary">Cancel</button></a>
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
