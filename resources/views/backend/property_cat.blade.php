@extends('layouts.backend')
@section('styles')
    @include('partials.backend.table_style')
@endsection


@section('mainContent')
    <div class="dashboard-wrapper">
        {{--    modal --}}

        <div class="modal fade" id="typemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Add Property Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('property-category.store')}}" method="post">
                        <div class="modal-body">

                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Name:</label>
                                <input type="text" class="form-control @error('property_cate') is-invalid @enderror"
                                       id="property_cate" name="property_cate">
                                @error('property_cate')
                                <div class="invalid-feedback">
                                    {{$message }}
                                </div>
                                @enderror
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{--     modal end --}}


        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-section" id="overview">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h2> Property Category </h2>
                            </div>
                        </div>
                    </div>


                    <div class="row pb-2">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <button type="button" class="btn btn-primary float-md-right " data-toggle="modal"
                                    data-target="#typemodal">
                                Create New <i class=" fas fa-plus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div class="card">

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered second"
                                               style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Category</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categories as $category)
                                                <tr>
                                                    <td>{{$loop->iteration }}</td>
                                                    <td>{{$category->category}}</td>
                                                    <td class="text-center">
                                                        <a href="{{route('property-category.edit', $category->id)}}">
                                                            <button type="button" class="btn btn-success mr-2">
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                        </a>
                                                            {{--      delete button trigger the form       --}}
                                                        <button type="button" class="btn btn-danger mr-1"
                                                                onclick="event.preventDefault();
                                                                document.getElementById('delete-form-{{$loop->iteration}}').submit();">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                        {{--      delete  form       --}}
                                                        <form id="delete-form-{{$loop->iteration}}"
                                                              action="{{ route('property-category.destroy', [$category->id]) }}"
                                                              method="POST" style="display: none;">
                                                            @csrf
                                                            @method('delete')
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('javascripts')
    @include('partials.backend.table_script')
@endsection
