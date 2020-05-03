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
                        <a class="nav-link " href="{{url('/dashboard')}}" ><i class="fas fa-home"></i>Dashboard </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('dashboard/status')}}" >
                            <i class="fas fa-tags"></i>
                            Status
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('dashboard/property-category')}}" >
                            <i class="fas fa-cube"></i>
                            Property Category
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#" >
                            <i class="fas fa-building"></i>
                            Properties
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#" >
                            <i class="fas fa-user"></i>
                            Agents
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#" >
                            <i class="far fa-comment-alt"></i>
                            Comments
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#" >
                            <i class="fas fa-envelope"></i>
                            Messages
                        </a>
                    </li>
                    <li class="nav-item">
{{--                        <a class="nav-link " href="{{route('profile.edit')}}" >--}}
{{--                            <i class="fa fa-fw fa-user-circle"></i>--}}
{{--                            Profile--}}
{{--                        </a>--}}
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#" >
                            <i class="fas fa-lock"></i>
                            Change password
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#" >
                            <i class="fas fa-cogs"></i>
                            Settings
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
