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
<div class="menus" id="animatedModal">
    <div class="close-animatedModal close-icon">
        <i class="fa fa-close"></i>
    </div>
    <div class="modal-content">
        <div class="cart-menu">
            <div class="container">
                <div class="content">
                    <div class="cart-1">
                        <div class="row">
                            <div class="col s5">
                                <h5><a href="">商品图片</a></h5>
                            </div>
                            <div class="col s7">
                                <img src="" alt="">
                            </div>
                        </div>
                        <div class="row quantity">
                            <div class="col s5">
                                <h5>商品名称</h5>
                            </div>
                            <div class="col s7">
                                <h5><a href="">Fashion Men's</a></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s5">
                                <h5>单价</h5>
                            </div>
                            <div class="col s7">
                                <h5>$20</h5>
                            </div>
                            <div class="col s7">
                                <h5>小计</h5>
                            </div>
                            <div class="col s5">
                                <h5>$21.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{url('index/cart')}}"><button class="btn button-default">点击进入购物车</button></a>
            </div>
        </div>
    </div>
</div>
<script src="/static/jquery.js"></script>
<script>
    //单删
    $(function(){
        $(document).on('click','#cart-menu',function(){
            if(window.confirm("是否进入登录?")){
                location.href="/index/catcart/"
            }

        })
    })

</script>
