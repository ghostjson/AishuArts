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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>


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

</body>

</html>
