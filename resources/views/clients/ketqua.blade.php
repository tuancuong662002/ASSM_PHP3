@extends('clients.layout')


@section('content')

<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">

                    @foreach ($results as $item)
                    <article class="blog_item">
                        <div class="blog_item_img">

                            <img class="card-img rounded-0" src="{{ asset('images/' . $item->HinhAnh) }}" alt="">

                            <div class="blog_item_date">
                                <p>{{$item->NgayDang}}</p>
                            </div>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="{{route('news.detail' , $item->MaTin)}}">
                                <h2>{{$item->TieuDe}}</h2>
                            </a>
                            <p>{{$item->XemTruoc}}</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-comments"></i>{{$item->LuotXem}} lượt xem</a></li>
                            </ul>
                        </div>
                    </article>
                    @endforeach

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
</section>

@endsection