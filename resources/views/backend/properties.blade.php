@extends('layouts.backend')
@section('styles')
    @include('partials.backend.table_style')
@endsection


@section('mainContent')
    <div class="dashboard-wrapper">



        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-section" id="overview">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h2> Properties </h2>
                            </div>
                        </div>
                    </div>


                    <div class="row pb-2">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <a href="{{route('properties.create')}}">
                            <button type="button" class="btn btn-primary float-md-right ">
                                Create New <i class=" fas fa-plus"></i>
                            </button>
                            </a>
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
                                                <th>Title</th>
                                                <th>Manager</th>
                                                <th>Type</th>
                                                <th>Purpose</th>
                                                <th>Bedrooms</th>
                                                <th>Bathrooms</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($properties as $property)
                                                <tr>
                                                    <td>{{$loop->iteration }}</td>
                                                    <td>{{$property->title}}</td>
                                                    <td>{{$property->user->name}}</td>
                                                    <td>{{$property->property_cat->category}}</td>
                                                    <td>{{$property->statuses[0]->title}}</td>
                                                    <td>{{$property->additional_detail['bedrooms']}}</td>
                                                    <td>{{$property->additional_detail['bathrooms']}}</td>

                                                    <td class="text-center">
                                                        <a href="{{route('properties.show', $property->id)}}">
                                                            <button type="button" class="btn btn-info mr-2">
                                                                <i class="fas fa-eye"></i>
                                                            </button>
                                                        </a>
                                                        <a href="{{route('properties.edit', $property->id)}}">
                                                            <button type="button" class="btn btn-success mr-2">
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                        </a>
                                                            {{--       delete button trigger the form--}}
                                                        <button type="button" class="btn btn-danger mr-1"
                                                                onclick="event.preventDefault();
                                                                document.getElementById('delete-form-{{$loop->iteration}}').submit();">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                        {{-- delete  form--}}
                                                        <form id="delete-form-{{$loop->iteration}}"
                                                              action="{{ route('properties.destroy', [$property->id]) }}"
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
