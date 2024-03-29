<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('admin.admin.dashboard')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Dhaka</b> ABAHANI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ Auth::user()->img ? asset(Auth::user()->img) : asset('admin/dist/img/user4-128x128.jpg')}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ Auth::user()->img ? asset(Auth::user()->img) : asset('admin/dist/img/user4-128x128.jpg')}}" class="img-circle" alt="User Image">

                            <p>
                                {{ Auth::user()->name }} - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                @if(Auth::guard('trainee')->check())
                                    <a href="{{ route('trainee.profile') }}" class="btn btn-default btn-flat">Profile</a>
                                @elseif(Auth::guard('player')->check())
                                    <a href="{{ route('player.profile') }}" class="btn btn-default btn-flat">Profile</a>
                                @elseif(Auth::guard('coach')->check())
                                    <a href="{{ route('coach.profile') }}" class="btn btn-default btn-flat">Profile</a>
                                @elseif(Auth::guard('physio')->check())
                                    <a href="{{ route('physio.profile') }}" class="btn btn-default btn-flat">Profile</a>
                                @elseif(Auth::guard('subscriber')->check())
                                    <a href="{{ route('subscriber.profile') }}" class="btn btn-default btn-flat">Profile</a>
                                @elseif(Auth::guard('bidder')->check())
                                    <a href="{{ route('bidder.profile') }}" class="btn btn-default btn-flat">Profile</a>
                                @else 
                                    <a href="{{ route('admin.profile') }}" class="btn btn-default btn-flat">Profile</a>
                                @endif
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</header>