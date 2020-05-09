<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link " href="@can('isAdmin'){{ route('admin_dashboard')}}
                        @elsecan('isAgent'){{ route('agent_dashboard')}}@else{{route('user_dashboard')}} @endcan"><i class="fas fa-home"></i>Dashboard </a>
                    </li>
                    @can('isAdmin')
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('status.index')}}">
                                <i class="fas fa-tags"></i>
                                Status
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('property-category.index')}}">
                                <i class="fas fa-cube"></i>
                                Property Category
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('agents')}}">
                                <i class="fas fa-user"></i>
                                Agents
                            </a>
                        </li>
                    @endcan
                    @can('AdminOrAgent')
                        <li class="nav-item">
                            <a class="nav-link "
                               href="@can('isAdmin'){{ route('admin_properties_list')}}@else{{route('agent_properties_list')}} @endcan">
                                <i class="fas fa-building"></i>
                                Properties
                            </a>
                        </li>
                    @endcan
                    <li class="nav-item">
                        <a class="nav-link " href="@can('isAdmin'){{ route('admin_messages')}}@elsecan('isAgent'){{ route('agent_messages')}}@else{{ route('user_messages')}}@endcan">
                            <i class="fas fa-envelope"></i>
                            Messages
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="@can('isAdmin'){{ route('admin_profile')}}
                        @elsecan('isAgent'){{ route('agent_profile')}}@else{{route('user_profile')}} @endcan">
                            <i class="fa fa-fw fa-user-circle"></i>
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="@can('isAdmin'){{ route('admin_password')}}
                        @elsecan('isAgent'){{ route('agent_password')}}@else{{route('user_password')}} @endcan">
                            <i class="fas fa-lock"></i>
                            Change password
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
