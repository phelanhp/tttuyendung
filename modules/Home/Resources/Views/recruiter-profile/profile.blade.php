@extends('Home::layout.master')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2">
                        <span class="mr-2"><a href="index.html">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Nhà Tuyển Dụng <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Profile Nhà Tuyển Dụng</h1>
                    <a href="{{ route('get.recruiter_profile.edit') }}">
                        <button type="button" class="btn btn-primary"><i class='fas fa-user-edit'></i> Chỉnh sửa
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg" style="padding-top: 0">
        <div class="header-recruiter">
            <img src="{{ asset($user->avatar) }}" width="30%" alt="logo" class="float-left">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <div class="mt-3">
                        <h2 class="mb-3">{{ $user->recruiter->company }}</h2>
                        <h5 class="mb-3 mt-5">LiênHệ</h5>
                        <ul class="info-recruiter list-unstyled">
                            <li><b>Người phụ trách liên hệ:</b> {{ $user->name }} </li>
                            <li><b>Địa chỉ công ty:</b> {{ $user->recruiter->address }} </li>
                            <li><b>Ngày thành lập:</b> {{ $user->recruiter->founding }} </li>
                            <li><b>Email:</b> {{ $user->recruiter->email }} </li>
                            <li><b>Số Điện Thoại:</b> {{ $user->recruiter->phone }} </li>
                        </ul>
                    </div>
                    <hr>
                    <h5 class="mb-3 mt-5">Giới Thiệu</h5>
                    {{ $user->hobby }}
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section> <!-- .section -->
@endsection
