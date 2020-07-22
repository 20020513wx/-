@extends("layout.bottom")
@extends("layout.navright")
@extends("layout.shop")

@section("title","登录")
@section('content')


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


@endsection
<script src="/static/jquery.js"></script>
<script>
    $(document).on("click","#login",function () {
        var _this=$(this);
        var user_name=$("#user_name").val();
        var user_pwd=$("#user_pwd").val();
        if(user_name ==""){
            alert('用户名不能为空');
            return false;
        }
        if(user_pwd ==""){
            alert('密码不能为空');
            return false;
        }
    });
</script>
