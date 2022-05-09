<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('admin') }}">Laravel-Recap</a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ request()->routeIs('admin') ? 'active' : '' }}">
                    <a href="{{ route('admin') }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-title">Page</li>

                <li class="sidebar-item  has-sub {{ request()->routeIs("user.index")||request()->routeIs("user.create") ? "active" : "" }}">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>User</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route("user.create") }}">Create user</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route("user.index") }}">All user</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item {{ request()->routeIs("banner.index") ? "active" : "" }}">
                    <a href="{{ route("banner.index") }}" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Banner</span>
                    </a>
                    {{-- <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route("banner.create") }}">Create banner</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route("banner.index") }}">All banner</a>
                        </li>
                    </ul> --}}
                </li>
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="sidebar-title" type="submit" style="border: none; background:#FFF">Log out</button>
                </form>

                <li class="sidebar-title"><a href="{{ route('index') }}">Exit</a></li>
            </ul> 
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
