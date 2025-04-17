@extends('clients.layout')


@section('content')
<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{ asset('images/' . $tt->HinhAnh) }}" alt="">
                    </div>
                    <div class="blog_details">
                        <h2>{{ $tt->TieuDe }}</h2>
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="fa fa-comments"></i> {{$tt->LuotXem}} lượt xem</a></li>
                        </ul>
                        <p>{!! $tt->NoiDung !!}</p>
                    </div>
                </div>
                <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                            people like this</p>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                            <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                        </div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="navigation-area">
                        <div class="row">
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/preview.png" alt="">
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="#">
                                        <span class="lnr text-white ti-arrow-left"></span>
                                    </a>
                                </div>
                                <div class="detials">
                                    <p>Trước</p>
                                    <a href="#">
                                        <!-- <h4>Space The Final Frontier</h4> -->
                                    </a>
                                </div>
                            </div>
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Tiếp theo</p>
                                    <a href="#">
                                        <!-- <h4>Telescopes 101</h4> -->
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="#">
                                        <span class="lnr text-white ti-arrow-right"></span>
                                    </a>
                                </div>
                                <div class="thumb">
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/next.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="comments-area">
                    <h4>{{ $comments->count() }} Comments</h4>

                    @foreach($comments as $comment)
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="{{ asset('images/' . $comment->avatar) }}" />

                                </div>
                                <div class="desc">

                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">{{$comment->name}}</a>
                                            </h5>
                                            <p class="date">{{$comment->created_at}} </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply text-uppercase">reply</a>
                                        </div>
                                    </div>
                                    <p class="comment">
                                        {{$comment->NoiDung}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="comment-form">
                    <h4>Để lại bình luận</h4>
                    <form class="form-contact comment_form" action="{{route('comment')}}" method="post"
                        id="commentForm">
                        @csrf
                        <input type="hidden" name="MaTin" value="{{$tt->MaTin }}">
                        <div class="row">
                            <div class="col-12">
                                @if(!Auth::check())
                                <p class="comment">Bạn cần <a style="color: red ; " href="{{ route('login') }}">đăng
                                        nhập</a> để
                                    bình luận</p>
                                @endif

                                <div class="form-group">
                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                        placeholder="Viết bình luận..." @if(!Auth::check()) disabled @endif></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <button type="submit" class="button button-contactForm btn_1 boxed-btn">
                                Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Search Keyword'
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                    <div class="input-group-append">
                                        <button class="btns" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Search</button>
                        </form>
                    </aside>

                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Tin tức liên quan</h3>
                        @foreach ($tinTucCungDanhMuc as $item)
                        <div class="media post_item">
                            <img src="{{ asset('images/' . $item->HinhAnh) }}" alt="post" width="80" height="80">
                            <div class="media-body">
                                <a href="{{route('news.detail' , $item->MaTin)}}">
                                    <h3>{{$item->TieuDe}}</h3>
                                </a>
                                <p>{{$item->NgayDang}}</p>
                            </div>
                        </div>
                        @endforeach

                    </aside>
                    <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                            <li>
                                <a href="#">project</a>
                            </li>
                            <li>
                                <a href="#">love</a>
                            </li>
                            <li>
                                <a href="#">technology</a>
                            </li>
                            <li>
                                <a href="#">travel</a>
                            </li>
                            <li>
                                <a href="#">restaurant</a>
                            </li>
                            <li>
                                <a href="#">life style</a>
                            </li>
                            <li>
                                <a href="#">design</a>
                            </li>
                            <li>
                                <a href="#">illustration</a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title">Instagram Feeds</h4>
                        <ul class="instagram_row flex-wrap">
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </aside>

                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>
                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Subscribe</button>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Blog Area end =================-->
@endsection