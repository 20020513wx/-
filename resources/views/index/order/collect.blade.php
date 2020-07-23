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



                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi error quibusdam culpa assumenda maiores ea dicta fuga a itaque rerum deserunt, incidunt, nulla, vero amet sapiente reiciendis. Perspiciatis debitis, accusamus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eligendi porro deleniti quisquam omnis rem quibusdam corporis alias, et quae, assumenda unde pariatur vitae placeat veritatis nam quia, velit delectus.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ut vitae recusandae perferendis, temporibus, ullam, tenetur eius necessitatibus aliquam sequi, eum atque ratione ipsam in aliquid vero numquam id minus!</p>
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

