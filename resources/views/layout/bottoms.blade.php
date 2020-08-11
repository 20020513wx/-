<div class="content">
@foreach($cartInfo as $k=>$v)
    <div class="cart-1">
        <div class="row">
            <div class="col s5">
                <h5><a href="">商品图片</a></h5>
            </div>
            <div class="col s7">
                <img src="/storage/{{$v->goods_img}}" alt="">
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
@endforeach
</div>
