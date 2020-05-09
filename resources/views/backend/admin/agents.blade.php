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
                                <h2> Agents </h2>
                            </div>
                        </div>
                    </div>


{{--                    <div class="row pb-2">--}}
{{--                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">--}}
{{--                            <a href="{{route('properties.create')}}">--}}
{{--                            <button type="button" class="btn btn-primary float-md-right ">--}}
{{--                                Create New <i class=" fas fa-plus"></i>--}}
{{--                            </button>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Properties</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($agents as $agent)
                                                <tr>
                                                    <td>{{$loop->iteration }}</td>
                                                    <td>{{$agent->name}}</td>
                                                    <td>{{$agent->email}}</td>
                                                    <td>{{$agent->properties->count()}}</td>

                                                    <td class="text-center">
                                                        <a href="{{route('show_agent', $agent->id)}}">
                                                            <button type="button" class="btn btn-info mr-2">
                                                                <i class="fas fa-eye"></i>
                                                            </button>
                                                        </a>
                                                        <button type="button" class="btn btn-danger mr-1"
                                                                onclick="event.preventDefault();
                                                                document.getElementById('delete-form-{{$loop->iteration}}').submit();">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>

                                                        <form id="delete-form-{{$loop->iteration}}"
                                                              action="{{ route('delete_agent', $agent->id) }}"
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
