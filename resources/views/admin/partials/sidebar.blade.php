<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="{{ asset('images/logo.jpeg') }}" style="transform: rotate(20deg) scale(2.1); transition: 0.5s;" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ menu('admin.dashboard') }}" href="{{ route('admin.dashboard') }}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ menu('admin.products') }}" href="{{ route('admin.products') }}">
                            <i class="ni ni-shop text-primary"></i>
                            <span class="nav-link-text">Products</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ menu('admin.orders') }}" href="{{ route('admin.orders') }}">
                            <i class="ni ni-box-2 text-primary" aria-hidden="true"></i>
                            <span class="nav-link-text">Orders</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ menu('admin.shipping') }}" href="{{ route('admin.shipping') }}">
                            <i class="fa fa-truck text-primary" aria-hidden="true"></i>
                            <span class="nav-link-text">Shipping</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('client.logout') }}">
                            <i class="ni ni-user-run text-primary"></i>
                            <span class="nav-link-text">Logout</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>
