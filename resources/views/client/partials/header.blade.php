<!-- Header -->
<header id="header" data-transparent="true">
    <div class="header-inner">
        <div class="container">
            <!--Logo-->
            <div id="logo" style="width: 100px">
                <img width="100px" style="transform: rotate(20deg) scale(1.2); margin-left: 30px !important;"
                     src="{{ asset('images/logo.jpeg') }}" alt="">
            </div>
            <!--End: Logo-->
            <!-- Search -->
            <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><<i>
                        class="icon-x"></i></a>
                <form class="search-form" action="search-results-page.html" method="get">
                    <input class="form-control" name="q" type="text" placeholder="Type & Search..."/>
                    <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                </form>
            </div> <!-- end: search -->
            <!--Header Extras-->
            <div class="header-extras">
                <ul>
                    <li><a id="btn-search" href="#"> <i class="icon-search"></i></a></li>

                </ul>
            </div>
            <!--end: Header Extras-->
            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger"><a class="lines-button x"><span class="lines"></span></a></div>
            <!--end: Navigation Resposnive Trigger-->
            <!--Navigation-->
            <div id="mainMenu">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="{{ route('client.home') }}">Home</a></li>
{{--                            <li><a href="{{ route('client.shop') }}">Shop</a></li>--}}
                            <li><a href="{{ route('client.about') }}">About</a></li>
                            @guest
                                <li><a href="{{ route('client.login') }}">Signin</a></li>
                            @endguest
                            @auth
                                <li><a href="{{ route('client.orders.current') }}">Orders</a></li>
                                <li><a href="{{ route('client.profile') }}">Profile</a></li>
                                <li><a href="{{ route('client.logout') }}">Logout</a></li>
                            @endauth
                            <li><a href="{{ route('client.cart') }}">Cart
                                    @if(!is_null(session()->get('cart.products')))
                                        <span
                                            class="badge badge-primary">{{ count(session()->get('cart.products')) }}</span>
                                    @endif
                                </a>
                            </li>

                            {{--                            @guest--}}
                            {{--                                <li><a href="{{ route('client.login') }}">Login</a></li>--}}
                            {{--                                <li><a href="{{ route('client.register') }}">Register</a></li>--}}
                            {{--                            @endguest--}}
                            {{--                            @auth--}}
                            {{--                                <li><a href="{{ route('client.logout') }}">Logout</a> </li>--}}
                            {{--                            @endauth--}}
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>
<!-- end: Header -->
