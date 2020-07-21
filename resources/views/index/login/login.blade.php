
@extends("layout.top")
@section("title","登录")
@section('content')
<!-- side nav right-->
<div class="side-nav-panel-right">
    <ul id="slide-out-right" class="side-nav side-nav-panel collapsible">
        <li class="profil">
            <img src="/status/img/profile.jpg" alt="">
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






<!-- login -->
<div class="pages section">
    <div class="container">
        <div class="pages-head">
            <h3>LOGIN</h3>
        </div>
        <div class="login">
            <div class="row">
                <form class="col s12">
                    <div class="input-field">
                        <input type="text" class="validate" placeholder="USERNAME" required id="user_name">
                    </div>
                    <div class="input-field">
                        <input type="password" class="validate" placeholder="PASSWORD" required id="user_pwd">
                    </div>
                    <a href=""><h6>Forgot Password ?</h6></a>
                    <a href="" class="btn button-default"id="login">LOGIN</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end login -->

<!-- loader -->
<div id="fakeLoader"></div>
<!-- end loader -->

<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="about-us-foot">
            <h6>Mstore</h6>
            <p>is a lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit.</p>
        </div>
        <div class="social-media">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-google"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
        </div>
        <div class="copyright">
            <span>© 2017 All Right Reserved</span>
        </div>
    </div>
</div>
<!-- end footer -->

@endsection
<script src="/jquery.js"></script>
<script>
    $(document).on("click","#login",function () {
        var _this=$(this);
        var user_name=$("#user_name").val();
        var user_pwd=$("#user_pwd").val();
        alert(user_name);
    });
</script>
