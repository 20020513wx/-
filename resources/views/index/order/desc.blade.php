@extends("layout.shop")
@section("title",'收货地址添加')
@section('content')
    @include('layout.top');
    <!-- side nav right-->
    @include('layout.navright');
    <!-- end side nav right-->

    @include('layout.bottom');

    <!-- single post -->
    <div class="pages section">
        <div class="container">
            <div class="blog-single">

                <img src="/static/img/blog1.png" alt="">
                <div class="blog-single-content">
                    <h5>{{$res->goods_name}}</h5>
                    <div class="date">
                        <span>
                            <i class="fa fa-calendar"></i> Dec {{$res->goods_price}}, {{$res->goods_number}}
                            <input type="button" value="收藏">

                        </span>
                    </div>
                    @foreach($data as $v)
                        评论用户<input type="text" placeholder="{{$v->id}}">
                        评论内容 <input type="text" placeholder="{{$v->p_content}}">
                        评论商品 <input type="text" placeholder="{{$v->goods_id}}">
                    @endforeach
                    <div class="share-post">
                        <ul>
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="comment">
                    <h5>1 Comments</h5>
                    <div class="comment-details">
                        <div class="row">
                            <div class="col s3">
                                <img src="/static/img/user-comment.jpg" alt="">
                            </div>
                            <div class="col s9">
                                <div class="comment-title">
                                    <span><strong>John Doe</strong> | Juni 5, 2016 at 9:24 am | <a href="">Reply</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis accusantium corrupti asperiores et praesentium dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-form">
                    <div class="comment-head">
                        <h5>Post Comment in Below</h5>
                        <p>Lorem ipsum dolor sit amet consectetur*</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end single post -->



    <!-- loader -->
<div id="fakeLoader"></div>
<!-- end loader -->
@endsection
