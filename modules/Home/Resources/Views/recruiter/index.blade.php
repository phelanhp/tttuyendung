@extends('Home::layout.master')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bannerctuet.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2">
                        <span class="mr-2"><a href="{{ route('get.home.index') }}">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Nhà Tuyển Dụng <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Danh sách nhà tuyển dụng</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 ftco-animate">
                    @foreach($recruiters as $recruiter)
                    @if($recruiter->user)
                    <div class="story-wrap d-md-flex align-items-center">
                        <div class="img" style="background-image: url({{ asset($recruiter->user->avatar) }});"></div>
                        <div class="text pl-md-5">
                            <h4>{{ $recruiter->company }}</h4>
                            <p>{{ $recruiter->address }}
                                <br> SĐT: 0883245689 - 0889345267 <br> Email: itaaa@gmail.com</p>
                            <p><a href="{{ route('get.recruiter.detail',$recruiter->id) }}" class="btn btn-primary">Xem chi tiết</a>
                            </p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="row mt-5">
                        <div class="col text-center">
                            {{ $recruiters->render('vendor.pagination.pagination_custom') }}
                        </div>
                    </div>

                </div> <!-- .col-md-8 -->
                @include('Home::recruiter.sidebar_recruiter')

            </div>
        </div>
    </section> <!-- .section -->
@endsection
