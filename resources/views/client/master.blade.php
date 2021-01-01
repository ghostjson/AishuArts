<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="Akhil Ravindran"/>
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Aishu Arts</title>
    <!-- Stylesheets & Fonts -->
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"><link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <style>
        .splash{
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: black;
            z-index: 202;
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .splash img{
            width: 50vw;
            opacity: 0;
            /*display: none;*/
        }

        @media only screen and (max-width: 800px) {
            .splash img{
                width: 80vw;
            }
        }

        .blank{
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: white;
            z-index: 200;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>

<body>

<div class="blank">

</div>
<div class="splash animate__animated animate__slideInLeft">
    <div class="splash-inside " >
        <img id="splash_image" class="animate__animated" src="{{ asset('images/splash.jpeg') }}">
    </div>
</div>

<!-- Body Inner -->
<div class="body-inner">
    @include('client.partials.header')

    @yield('content')

    @include('client.partials.footer')

</div>
<!-- end: Body Inner -->

<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<!--Plugins-->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>

<!--Template functions-->
<script src="{{ asset('js/functions.js') }}"></script>

<script src="{{ asset('js/splash.js') }}"></script>

<script>
    $('#logo').click(() => {
        location.href = '{{ route('client.home') }}'
    })
</script>

@yield('scripts')

</body>

</html>
