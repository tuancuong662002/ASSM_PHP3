@extends('clients.layout')
@section('content')
<!-- Trending Area Start -->
<div class="trending-area fix pt-25 gray-bg">
    <div class="container">
        <div class="trending-main">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Top -->
                    <div class="slider-active">
                        <!-- Single -->
                        @foreach ($TOP_FAV as $item)
                        <div class="single-slider">
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="{{ asset('images/' . $item->HinhAnh) }}" alt="">
                                    <div class="trend-top-cap">

                                        <h2><a href="{{route('news.detail' , $item->MaTin)}}" data-animation="fadeInUp"
                                                data-delay=".4s" data-duration="1000ms">{{$item->TieuDe}}</a></h2>
                                        <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by
                                            {{$item->NgayDang}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Right content -->
                <div class="col-lg-4">
                    <!-- Trending Top -->
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="{{ asset('images/' . $TT_NEW[0]->HinhAnh) }}" alt="">
                                    <div class="trend-top-cap trend-top-cap2">

                                        <h2><a
                                                href="{{route('news.detail' , $TT_NEW[0]->MaTin)}}">{{$TT_NEW[0]->TieuDe}}</a>
                                        </h2>
                                        <p>{{$TT_NEW[0]->NgayDang}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="{{ asset('images/' . $TT_NEW[1]->HinhAnh) }}" alt="">
                                    <div class="trend-top-cap trend-top-cap2">

                                        <h2><a
                                                href="{{route('news.detail' , $TT_NEW[1]->MaTin)}}">{{$TT_NEW[1]->TieuDe}}</a>
                                        </h2>
                                        <p>{{$TT_NEW[1]->NgayDang}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trending Area End -->
<!-- Whats New Start -->

<!-- Whats New End -->
<!--   Weekly2-News start -->
<div class="weekly2-news-area pt-50 pb-30 gray-bg">
    <div class="container">
        <div class="weekly2-wrapper">
            <div class="row">
                <!-- Banner -->
                <div class="col-lg-3">
                    <div class="home-banner2 d-none d-lg-block">
                        <img src="assets/img/gallery/body_card2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="slider-wrapper">
                        <!-- section Tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="small-tittle mb-30">
                                    <h4>Tin nổi bật</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Slider -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="weekly2-news-active d-flex">
                                    <!-- Single -->
                                    @foreach ($TOP_FAVS as $item)
                                    <div class="weekly2-single">
                                        <div class="weekly2-img">
                                            <img src="{{ asset('images/' . $item->HinhAnh) }}" alt="">
                                        </div>
                                        <div class="weekly2-caption">
                                            <h4><a href="{{route('news.detail' , $item->MaTin)}}">{{$item->TieuDe}}</a>
                                            </h4>
                                            <p>{{$item->NgayDang}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- Single -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Weekly-News -->
<!--  Recent Articles start -->
<div class="recent-articles pt-80 pb-80">
    <div class="container">
        <div class="recent-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Tin mới nhất</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="recent-active dot-style d-flex dot-style">
                        <!-- Single -->
                        @foreach ($TT_NEWS as $item)
                        <div class="single-recent">
                            <div class="what-img">
                                <img src="{{ asset('images/' . $item->HinhAnh) }}" alt="">
                            </div>

                            </p>
                            <div class="weekly2-caption">
                                <h4><a style="color : black ; "
                                        href="{{route('news.detail' , $item->MaTin)}}">{{$item->TieuDe}}</a>
                                </h4>
                                <p>{{$item->NgayDang}}</p>
                            </div>
                        </div>
                        @endforeach
                        <!-- Single -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Recent Articles End -->
<!-- Start Video Area -->

<!-- End Start Video area-->
<!--   Weekly3-News start -->
<div class="weekly3-news-area pt-80 pb-130">
    <div class="container">
        <div class="weekly3-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-wrapper">
                        <!-- Slider -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="weekly3-news-active dot-style d-flex">
                                    @foreach ($ALL as $item)
                                    <div class="weekly3-single">
                                        <div class="weekly3-img">
                                            <img src="{{ asset('images/' . $item->HinhAnh) }}" alt="">
                                        </div>
                                        <div class="weekly3-caption">
                                            <h4><a href="{{route('news.detail' , $item->MaTin)}}">
                                                    {{$item->TieuDe}}</a>
                                                </a></h4>
                                            <p>{{$item->NgayDang}}</p>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Weekly-News -->
<!-- banner-last Start -->
<div class=" banner-area gray-bg pt-90 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10">
                <div class="banner-one">
                    <img src="assets/img/gallery/body_card3.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-last End -->
@endsection