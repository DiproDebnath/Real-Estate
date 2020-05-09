@extends('layouts.backend')

@section('mainContent')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content">
                <div class="ecommerce-widget">
                    <div class="row clearfix">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="info-box bg-indigo hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">forum</i>
                                </div>
                                <div class="content">
                                    <div class="text">MESSAGES</div>
                                    <div class="number count-to" data-from="0" data-to="243" data-speed="1000"
                                         data-fresh-interval="20">
                                        {{$threadsCount}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                            <div class="card">
                                <h5 class="card-header">Messages</h5>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Subject</th>
                                                <th class="border-0">Name</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($threads as $thread)
                                                <tr>
                                                    <td>{{$loop->iteration }}</td>
                                                    <td>{{$thread->subject}}</td>
                                                    <td>{{$thread->participantsString(Auth::id()) }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
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
