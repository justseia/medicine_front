<header class="main-header">
    <div class="d-flex align-items-center logo-box justify-content-start">
        <!-- Logo -->
        <a href="{{ route('admin.index') }}" class="logo">
            Ereke Center
        </a>
    </div>
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <div class="app-menu">
            <ul class="header-megamenu nav">
                <li class="btn-group nav-item">
                    <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light"
                       data-toggle="push-menu" role="button">
                        <i class="icon-Menu"><span class="path1"></span><span class="path2"></span></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">
                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <div class="w-auto p-0 bg-transparent waves-effect waves-light dropdown-toggle l-h-12 no-shadow"
                         data-bs-toggle="dropdown" title="User">
                        <div class="pt-1 d-flex">
                            <div class="text-end me-10">
                                <p class="pt-5 mb-0 fs-14 fw-700 text-primary">{{ auth()->user()->name }}</p>
                                <small
                                    class="mb-0 fs-10 text-uppercase text-mute">{{ auth()->user()->type == 1 ? 'Admin' : 'Doctor' }}</small>
                            </div>
                            <img src="{{ auth()->user()->image }}" class="w-40 h-40 avatar rounded-10 bg-primary-light"
                                 alt=""/>
                        </div>
                    </div>
                    <ul class="dropdown-menu animated flipInX">
                        <li class="user-body">
                            <a class="dropdown-item" href="#">
                                <i class="ti-user text-muted me-2"></i>
                                Profile
                            </a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">
                                <i class="ti-lock text-muted me-2"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<aside class="main-sidebar">
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%">
                <ul class="sidebar-menu" data-widget="tree">
                    <li>
                        <a href="{{ route('admin.index') }}">
                            <span>Dashboard</span>
                        </a>
                    </li>
                    @if(auth()->user()->type == 2)
                        <li>
                            <a href="{{ route('admin.users') }}">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <span>Users</span>
                            </a>
                        </li>
                    @endif
                    @if(auth()->user()->type == 1)
                        <li>
                            <a href="{{ route('admin.doctors') }}">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <span>Doctors</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.users') }}">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <span>Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.news') }}">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <span>News</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.price') }}">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <span>Price</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </section>
</aside>
