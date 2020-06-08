@extends('Home::layout.master')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2">
                        <span class="mr-2"><a href="index.html">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Tin tuyển dụng <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Tin tức tuyển dụng</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row mt-5 d-flex">
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="blog-entry align-self-stretch">
                            <a href="{{ route('get.news.detail',$post->id) }}" class="block-20 rounded" style="background-image: url({{ asset($post->image) }});">
                            </a>
                            <div class="text mt-3">
                                <div class="meta mb-2">

                                    <?php $date = date_create($post->created_at); ?>
                                    <div><a href="#">{{ date_format($date,'d-m-Y') }}</a></div>
                                    <div><a href="#">{{ $post->user->name }}</a></div>
                                    <div>
                                        <a href="#" class="meta-chat"><span class="fa fa-comment"></span> {{ count($post->postComments) }}
                                        </a>
                                    </div>
                                </div>
                                <h3 class="heading">
                                    <a href="{{ route('get.news.detail',$post->id) }}">{{ $post->content }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
                @include('Home::layout.sidebar')
            </div>

            <div class="row mt-5">
                <div class="col text-center">
                    {{ $posts->render('vendor.pagination.pagination_custom') }}
                </div>

            </div>
        </div>
    </section>
@endsection
