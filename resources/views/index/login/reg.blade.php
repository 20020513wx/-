
@extends("layout.top")
@section("title","注册")
@section('content')







<!-- register -->
<div class="pages section">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    $(document).on("click","#register",function () {
        var _this=$(this);
        var user_name=$("#user_name").val();
        var user_pwd=$("#user_pwd").val();
        var user_email=$("#user_email").val();
        var pattern = /^[\u4E00-\u9FA5]{1,6}$/;
        if(!pattern.test(user_name)) {
            alert("用户名由中文组成 ,并且长度1-6位");
            return false;
        }
        var pwd_test=/^[a-zA-Z0-9]{6,10}$/;
        if(!pwd_test.test(user_pwd)){
            alert("密码长度由6-12位 数字 大写字母 小写字母组成，不能有特殊符号");
            return false;
        }
        var email_test= /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
        if (!email_test.test($("#email").val())) {
            alert("请输入正确的邮箱格式");
            return false;
        }
        console.log(123);
    });
</script>
