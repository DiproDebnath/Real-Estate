@extends('layouts.backend')

@section('mainContent')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content">
                <div class="ecommerce-widget">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="info-box bg-pink hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">playlist_add_check</i>
                                </div>
                                <div class="content">
                                    <div class="text">PROPERTIES</div>
                                    <div class="number count-to" data-from="0" data-to="125" data-speed="15"
                                         data-fresh-interval="20">
                                        {{$propertiesCount}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="info-box bg-indigo hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">forum</i>
                                </div>
                                <div class="content">
                                    <div class="text">MESSAGES</div>
                                    <div class="number count-to" data-from="0" data-to="243" data-speed="1000"
                                         data-fresh-interval="20">
                                        {{$threads}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="info-box  bg-orangered hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">person_add</i>
                                </div>
                                <div class="content">
                                    <div class="text">AGENTS</div>
                                    <div class="number count-to" data-from="0" data-to="1225" data-speed="1000"
                                         data-fresh-interval="20">
                                        {{$agentsCount}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                            <div class="card">
                                <h5 class="card-header">Properties</h5>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Type</th>
                                                <th class="border-0">Title</th>
                                                <th class="border-0">City</th>
                                                <th class="border-0">Price</th>
                                                <th class="border-0">Agent</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($properties as $property)
                                                <tr>
                                                    <td>{{$loop->iteration }}</td>
                                                    <td>{{$property->property_cat->category}}</td>
                                                    <td>{{$property->title}}</td>
                                                    <td>{{$property->city}}</td>
                                                    <td>${{$property->price}}</td>
                                                    <td>{{$property->user->name}}</td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                            <div class="card">
                                <h5 class="card-header">Agents</h5>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Image</th>
                                                <th class="border-0">Name</th>
                                                <th class="border-0">Email</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($agents as $agent)
                                            <tr>
                                                <td>{{$loop->iteration }}</td>
                                                <td>
                                                    <div class="m-r-10">
                                                        <img src="{{asset('profile/')}}/{{$agent->image}}" alt="user"
                                                             class="rounded" width="45"/>
                                                    </div>
                                                </td>
                                                <td>{{$agent->name}}</td>
                                                <td>{{$agent->email}}</td>
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
