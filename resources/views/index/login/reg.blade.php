
@extends("layout.bottom")
@extends("layout.navright")
@extends("layout.shop")

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
    $(document).on("click","#register",function () {
        var _this=$(this);
        var user_name=$("#user_name").val();
        var user_pwd=$("#user_pwd").val();
        var user_email=$("#user_email").val();

        //验证名称由中文组成
        //var pattern = /^[\u4E00-\u9FA5]{1,6}$/;
        // if(!pattern.test(user_name)) {
        //     alert("用户名由中文组成 ,并且长度1-6位");
        //     return false;
        // }

        //验证密码长度
        var pwd_test=/^[a-zA-Z0-9]{6,10}$/;
        if(!pwd_test.test(user_pwd)){
            alert("密码长度由6-12位 数字 大写字母 小写字母组成，不能有特殊符号");
            return false;
        }

        //验证邮箱格式
        var email_test= /^([\.a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/;
        if (!email_test.test(user_email) ){
            alert("请输入正确的邮箱格式");
            return false;
        }

        //ajax把数据传到后台
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

        $.ajax({
           url:"{{url("/index/reg_do")}}",
            type:"POST",
            data:{user_name:user_name,user_email:user_email,user_pwd:user_pwd},
            success:function(res) {
               console.log(res);
                // if(res.code==0){
                //     alert("登录成功");
                // }else{
                //     alert("登录失败");
                // }
            }
        });
        console.log(123);
    });
</script>
