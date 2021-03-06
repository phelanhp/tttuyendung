@extends('Home::layout.master')

@section('content')

    @include('Home::home.slider')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Chúng tôi làm việc bằng cách nào?</h2>
                    <span class="subheading">Cập nhật để cùng phát triển</span>
                </div>
            </div>
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end mb-4 mb-sm-0" style="background-image:url(/frontend/images/img.jpg);"></div>
                </div>
                <div class="col-md-6 pl-md-5 py-md-5">
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-account"></span></div>
                        <div class="text pl-4">
                            <h4>Trang cá nhân</h4>
                            <p>Cập nhật hằng ngày để có nhiều người tìm đến bạn nhiều hơn</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-skills"></span></div>
                        <div class="text pl-4">
                            <h4>Kiểm duyệt tin tức mới</h4>
                            <p>Chúng tôi đảm bảo cho bạn một môi trường tin cậy, mọi thông tin đều được kiểm tra trước khi bạn nhìn thấy</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-performance"></span></div>
                        <div class="text pl-4">
                            <h4>Tiện lợi - Nhanh chóng</h4>
                            <p>Tìm hiểu những công việc phù hợp tại nhà. Đừng quên để lại thông tin nếu bạn hứng thú với doanh nghiệp</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-event"></span></div>
                        <div class="text pl-4">
                            <h4>Tiết kiệm thời gian</h4>
                            <p>Không cần đi đâu nữa, tham gia để tìm việc làm thôi!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Tin tuyển dụng gần đây</h2>
                    <span class="subheading">Tin Tuyển Dụng Mới Nhất</span>
                </div>
            </div>
            <div class="row d-flex">
                @foreach($posts as $key => $post)
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
                                        </a></div>
                                </div>
                                <h3 class="heading">
                                    <a href="{{ route('get.news.detail',$post->id) }}">{{ $post->name }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    @if($key == 2)
                        @break;
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
