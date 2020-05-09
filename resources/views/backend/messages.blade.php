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
                                <h2> Messages </h2>
                            </div>
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
                                                <th>Subject</th>
                                                @can('isAgent')
                                                    <th>Buyer</th>
                                                @else
                                                    <th>Agent</th>
                                                @endcan
                                                <th class="text-center">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($threads as $thread)
                                                <tr>
                                                    <td>{{$loop->iteration }}</td>
                                                    <td>{{$thread->subject}}</td>

                                                    <td>{{$thread->participantsString(Auth::id()) }}</td>
                                                    <td class="text-center">
                                                        @can('isAdmin')
                                                            <a href="{{route('admin_messages.show', $thread->id)}}">
                                                                <button type="button" class="btn btn-info mr-2">
                                                                    <i class="fas fa-eye"></i>
                                                                </button>
                                                            </a>
                                                        @elsecan('isAgent')
                                                            <a href="{{route('agent_messages.show', $thread->id)}}">
                                                                <button type="button" class="btn btn-info mr-2">
                                                                    <i class="fas fa-eye"></i>
                                                                </button>
                                                            </a>
                                                        @else
                                                            <a href="{{route('user_messages.show', $thread->id)}}">
                                                                <button type="button" class="btn btn-info mr-2">
                                                                    <i class="fas fa-eye"></i>
                                                                </button>
                                                            </a>

                                                        @endcan
                                                        {{--                                                               delete button trigger the form--}}
                                                        <button type="button" class="btn btn-danger mr-1"
                                                                onclick="event.preventDefault();
                                                                    document.getElementById('delete-form-{{$loop->iteration}}').submit();">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>

                                                            <form id="delete-form-{{$loop->iteration}}"
                                                                  action="{{ route('messages.destroy', [$thread->id]) }}"
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
