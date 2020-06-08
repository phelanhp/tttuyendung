@extends('Home::layout.master')

@section('content')
	<section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/'images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Nhà Tuyển Dụng <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Profile Nhà Tuyển Dụng</h1>
            <a href="{{ route('get.recruiter-profile.edit') }}"><button type="button" class="btn btn-primary" ><i class='fas fa-user-edit'></i> Chỉnh sửa</button></a>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
          	<p>
              <img src="images/image_1.jpg" alt="" class="img-fluid">
            </p>
            <h2 class="mb-3">Tên Nhà Tuyển Dụng</h2>
            <h3 class="mb-3 mt-5">Thông tin nhà tuyển dụng</h3>
            <div>
            <h5 class="mb-3 mt-5">Liên Hệ</h5>
            <p><b>Người phụ trách liên hệ:</b> ...... </p>
            <p><b>Địa chỉ công ty:</b> ..... </p>
             <p><b>Ngày thành lập:</b> ..... </p>
            <p><b>Email:</b> ...... </p>
            <p><b>Số Điện Thoại:</b> ..... </p>
            </div>
            <hr>
            <h5 class="mb-3 mt-5">Giới Thiệu</h5>
            <p>Công ty đóng Bảo hiểm Y Tê, Bảo Hiểm Xã hội.</p>
            <p> Phụ cấp: team building, nghỉ hè, tiền lương tháng 13, thưởng theo hiệu quả dự án.</p>
          </div> <!-- .col-md-8 -->
        @include('Home::layout.sidebar')
      </div>
    </section> <!-- .section -->
@endsection