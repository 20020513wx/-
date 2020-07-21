
@extends("layout.top")
@section("title","注册")
@section('content')







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
        alert(user_email);
    });
</script>
