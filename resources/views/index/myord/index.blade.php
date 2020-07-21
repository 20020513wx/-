@extends('layout.shop')
@section('title','个人')
@section('content')

    <!-- navbar top -->
    @include('layout.top');
    <!-- side nav right-->
    <div class="side-nav-panel-right">
        <ul id="slide-out-right" class="side-nav side-nav-panel collapsible">
            <li class="profil">
                <img src="/static/img/profile.jpg" alt="">
                <h2>John Doe</h2>
            </li>
            <li><a href="setting.html"><i class="fa fa-cog"></i>Settings</a></li>
            <li><a href="about-us.html"><i class="fa fa-user"></i>About Us</a></li>
            <li><a href="contact.html"><i class="fa fa-envelope-o"></i>Contact Us</a></li>
            <li><a href="login.html"><i class="fa fa-sign-in"></i>Login</a></li>
            <li><a href="register.html"><i class="fa fa-user-plus"></i>Register</a></li>

        </ul>
    </div>
    <!-- end side nav right-->


    <!-- register -->
    <div class="pages section">
        <div class="container">
            <div class="pages-head">
                <h3>REGISTER</h3>
            </div>
            <div class="register">
                <div class="row">
                    <form class="col s12">
                        <div class="input-field">
                            <input type="text" class="validate" placeholder="NAME" required id="user_name">
                        </div>
                        <div class="input-field">
                            <input type="email" placeholder="EMAIL" class="validate" required id="user_email">
                        </div>
                        <div class="input-field">
                            <input type="password" placeholder="PASSWORD" class="validate" required id="user_pwd">
                        </div>
                        <div class="btn button-default" id="register">REGISTER</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end register -->


    <!-- loader -->
    <div id="fakeLoader"></div>
    <!-- end loader -->
    @include('layout.foot');


@endsection

