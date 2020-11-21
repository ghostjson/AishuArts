<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Aishu Arts | Login</title>
    <!-- Stylesheets & Fonts -->
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
<!-- Body Inner -->
<div class="body-inner">
    <!-- Section -->
    <section class="fullscreen" data-bg-parallax="images/pages/1.jpg">
        <div class="container">
            <div>
                <div class="text-center m-b-30">
                    <a href="index.html" class="logo">
                        <img src="{{ asset('images/logo-dark.png') }}" alt="Polo Logo">
                    </a>
                </div>
                <div class="row">
                    <div class="col-lg-5 center p-50 background-white b-r-6">
                        <h3>Login to your Account</h3>
                        @include('partials.error')
                        <form method="post" action="{{ route('client.login.post') }}">

                            @csrf

                            <div class="form-group">
                                <label for="email"  class="sr-only">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="">
                            </div>
                            <div class="form-group m-b-5">
                                <label for="password" class="sr-only">Password</label>
                                <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group form-inline text-left">
                                <div class="form-check">
                                    <label>
                                        <input type="checkbox"><small class="m-l-10"> Remember me</small>
                                    </label>
                                </div>
                            </div>
                            <div class="text-left form-group">
                                <button type="submit" class="btn">Login</button>
                            </div>
                        </form>
                        <p class="small">Don't have an account yet? <a href="#">Register New Account</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Section -->
</div>
<!-- end: Body Inner -->
<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<!--Plugins-->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<!--Template functions-->
<script src="{{ asset('js/functions.js') }}"></script>
</body>

</html>
