<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="True">

    <link rel="stylesheet" href="/static/css/materialize.css">
<<<<<<< HEAD:resources/views/layouts/top.blade.php
    <link rel="stylesheet" href="/status/font-awesome/css/font-awesome.min.css">
=======
    <link rel="stylesheet" href="/static/font-awesome/css/font-awesome.min.css">
>>>>>>> 5d9150d493fda13f332d914ee447887b2d01e9b0:resources/views/layout/top.blade.php
    <link rel="stylesheet" href="/static/css/normalize.css">
    <link rel="stylesheet" href="/static/css/owl.carousel.css">
    <link rel="stylesheet" href="/static/css/owl.theme.css">
    <link rel="stylesheet" href="/static/css/owl.transitions.css">
    <link rel="stylesheet" href="/static/css/fakeLoader.css">
    <link rel="stylesheet" href="/static/css/animate.css">
    <link rel="stylesheet" href="/static/css/style.css">

    <link rel="shortcut icon" href="/static/img/favicon.png">

</head>


<!-- navbar top -->
<div class="navbar-top">
    <!-- site brand	 -->
    <div class="site-brand">
        <a href="index.html"><h1>Mstore</h1></a>
    </div>
    <!-- end site brand	 -->
    <div class="side-nav-panel-right">
        <a href="#" data-activates="slide-out-right" class="side-nav-left"><i class="fa fa-user"></i></a>
    </div>
</div>


{{ config('app.name') }}

<div class="navbar-bottom">
    <div class="row">
        <div class="col s2">
            <a href="index.html"><i class="fa fa-home"></i></a>
        </div>
        <div class="col s2">
            <a href="wishlist.html"><i class="fa fa-heart"></i></a>
        </div>
        <div class="col s4">
            <div class="bar-center">
                <a href="#animatedModal" id="cart-menu"><i class="fa fa-shopping-basket"></i></a>
                <span>2</span>
            </div>
        </div>
        <div class="col s2">
            <a href="contact.html"><i class="fa fa-envelope-o"></i></a>
        </div>
        <div class="col s2">
            <a href="#animatedModal2" id="nav-menu"><i class="fa fa-bars"></i></a>
        </div>
    </div>
</div>
<!-- scripts -->
<script src="/static/js/jquery.min.js"></script>
<script src="/static/js/materialize.min.js"></script>
<script src="/static/js/owl.carousel.min.js"></script>
<script src="/static/js/fakeLoader.min.js"></script>
<script src="/static/js/animatedModal.min.js"></script>
<script src="/static/js/main.js"></script>
@yield('content')
</body>
</html>



