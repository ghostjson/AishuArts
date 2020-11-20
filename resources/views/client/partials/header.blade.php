<!-- Header -->
<header id="header" data-transparent="true">
    <div class="header-inner">
        <div class="container">
            <!--Logo-->
            <div id="logo"> <a href="index.html"><span class="logo-default">POLO</span><span class="logo-dark">POLO</span></a> </div>
            <!--End: Logo-->
            <!-- Search -->
            <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                <form class="search-form" action="search-results-page.html" method="get">
                    <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                    <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                </form>
            </div> <!-- end: search -->
            <!--Header Extras-->
            <div class="header-extras">
                <ul>
                    <li> <a id="btn-search" href="#"> <i class="icon-search"></i></a> </li>

                </ul>
            </div>
            <!--end: Header Extras-->
            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
            <!--end: Navigation Resposnive Trigger-->
            <!--Navigation-->
            <div id="mainMenu">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="{{ route('client.home') }}">Home</a></li>
                            <li><a href="{{ route('client.shop') }}">Shop</a></li>
                            <li><a href="{{ route('client.about') }}">About</a></li>
                            <li><a href="{{ route('client.login') }}">Login</a></li>
                            <li><a href="{{ route('client.register') }}">Register</a></li>
                            <li><a href="{{ route('client.cart') }}">Cart<span class="badge badge-primary">1</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>
<!-- end: Header -->
