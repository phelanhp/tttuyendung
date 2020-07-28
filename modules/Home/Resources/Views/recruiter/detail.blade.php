@extends('Home::layout.master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bannerctuet.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ route('get.home.index') }}">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Nhà Tuyển Dụng <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Profile Nhà Tuyển Dụng</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6 ftco-animate">
          	<p>
              <img src="{{ asset($recruiters->user->avatar) }}" alt="" class="img-fluid">
            </p>
            <h2 class="mb-3">{{$recruiters->company}}</h2>
            <h3 class="mb-3 mt-5">Thông tin nhà tuyển dụng</h3>
            <div>
            <h5 class="mb-3 mt-5">Liên Hệ</h5>
            <p><b>Người phụ trách liên hệ:</b>&emsp;{{ $recruiters->user->name }}</p>
            <p><b>Địa chỉ công ty:</b>&emsp; {{ $recruiters->address }}</p>
            <p><b>Email:</b> {{ $recruiters->email }} </p>
            <p><b>Số Điện Thoại:</b> {{ $recruiters->phone }} </p>
            </div>
            <hr>
            <h5 class="mb-3 mt-5">Giới Thiệu</h5>
            <p>{{ $recruiters->user->hobby }}</p>
          </div> <!-- .col-md-6 -->
          <div class="col-lg-3"></div>
      </div>
    </section> <!-- .section -->

@endsection