@extends('Home::layout.master')

@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2">
                        <span class="mr-2"><a href="{{ route('get.home.index') }}">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span>
                        <span class="mr-2">Cá Nhân <i class="ion-ios-arrow-forward"></i></span> <span>Lịch sử hoạt động <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                    <h1 class="mb-0 bread">Trang tin hoạt động</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <section class="my-5">
                        @foreach($result as $item)
                            <div class="card mb-3" style="border-radius: 25px">
                                <div class="card-header p-1 pl-3">
                                    {{ $item['created_at'] }}
                                </div>
                                <div class="card-body p-2 pl-3">
                                    <div class="d-flex row">
                                        <div class="col-md-6 active">
                                            Bạn đã {{ isset($item['content']) ? 'bình luận' : 'thích' }} một bài viết
                                        </div>
                                        <div class="media post col-md-6">
                                            <a href="/news/detail/1/{{ $item['post']['id'] }}">
                                                <img src="{{ asset($item['post']['image']) }}" class="mr-3" height="50px" alt="image"></a>
                                            <div class="media-body">
                                                <a href="/news/detail/{{ $item['post']['id'] }}">
                                                    <h6 class="mt-0 mb-1">{{ $item['post']['name'] }}</h6>
                                                </a>
                                                <div class="text-truncate w-25">{{ $item['post']['description'] }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </section>
                </div>
            </div>
        </div>
    </section>

@endsection
