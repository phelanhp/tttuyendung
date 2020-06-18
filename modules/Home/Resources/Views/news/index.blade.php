@extends('Home::layout.master')<?php

?>
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
            <div class="row">
                <div class="col-lg-8 mt-5 d-flex">
                    @foreach($posts as $post)
                        <div class="col-md-4">
                            <div class="blog-entry align-self-stretch position-relative news-item">
                                @if(isset($liked[Auth::guard('user')->id()][$post->id]) && $liked[Auth::guard('user')->id()][$post->id] == 1)
                                    <button class="position-absolute border-0 news-like liked" data-post-id="{{ $post->id }}" data-user-id="{{ Auth::guard('user')->id() }}">
                                        <i class="far fa-thumbs-up"></i>
                                    </button>
                                @else
                                    <button class="position-absolute border-0 news-like unlike" data-post-id="{{ $post->id }}" data-user-id="{{ Auth::guard('user')->id() }}">
                                        <i class="far fa-thumbs-up"></i>
                                    </button>
                                @endif

                                <a href="{{ route('get.news.detail',$post->id) }}" class="block-20 rounded" style="background-image: url({{ asset($post->image) }});">
                                </a>
                                <div class="text mt-3">
                                    <div class="meta mb-2">
                                        <h5><a href="{{ route('get.news.detail',$post->id) }}">{{ $post->name }}</a></h5>
                                        <?php $date = date_create($post->created_at); ?>
                                        <div><a href="#">{{ date_format($date,'d-m-Y') }}</a></div>
                                        <div><a href="#">{{ $post->user->name }}</a></div>
                                        <div>
                                            <a href="#" class="meta-chat"><span class="fa fa-comment"></span> {{ count($post->postComments) }}
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" class="meta-chat"><span class="fa fa-thumbs-up"></span>
                                                <span class="count-like">{{ $post->countLike() }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                @include('Home::news.sidebar_news')
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        {{ $posts->render('vendor.pagination.pagination_custom') }}
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection


@push('js')
    <script>
        $('.news-like').click(function () {
            var like = $(this);

            var post_id = like.attr('data-post-id');
            var user_id = like.attr('data-user-id');

            $.ajax({
                url: '/like?post_id=' + post_id + '&user_id=' + user_id,
                type: 'GET',
                cache: false,
            }).done(function (response) {
                console.log(response);
                if (parseInt(response) === 1) {
                    var count_like = like.parent('.news-item').find('.count-like').html();
                    like.parent('.news-item').find('.count-like').html(parseInt(count_like) + 1);
                    like.removeClass('unlike');
                    like.addClass('liked');
                }
                else {
                    var count_like = like.parent('.news-item').find('.count-like').html();
                    like.parent('.news-item').find('.count-like').html(parseInt(count_like) - 1);
                    like.addClass('unlike');
                    like.removeClass('liked');
                }
            })
        })
    </script>
@endpush
