@extends('Home::layout.master')

@section('content')
	<section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="news-ntd.html">Tin tuyển dụng</a> <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Thêm Tin Tuyển Dụng</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        <div class="col-lg-12 ftco-animate">
          <div class="contact-wrap w-100 p-md-5 p-4">
        <h3 class="mb-4">Thêm tin tuyển dụng</h3>
        <div id="form-message-warning" class="mb-4"></div>
        <form method="POST" id="contactForm" name="contactForm" class="contactForm">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="label" for="name">Id</label>
                <input type="text" class="form-control" name="" id="" >
              </div>
            </div>
            <div class="col-md-6"> 
              <div class="form-group">
                <label class="label" for="email">Tiêu Đề</label>
                <input type="email" class="form-control" name="" id="" placeholder="Nhập Tiêu Đề">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label class="label" for="subject">Nội Dung</label>
                <textarea name="" id="ckeditor" class="" cols="30" rows="10"></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="label" for="subject">Hình ảnh</label>
                <input type="file" class="form-control" name="" id="" placeholder="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="label" for="subject">Người Đăng</label>
                <input type="text" class="form-control" name="" id="" placeholder="Tên">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label class="label" for="subject">Ngày Đăng</label>
                <input type="datetime-local" class="form-control" name="" id="">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <a onclick="goBack()">Cancel</a>
                <input type="submit" value="Thêm" class="btn btn-primary">
                <div class="submitting"></div>
              </div>
            </div>
          </div>
        </form>
      </div>
              </div> <!-- /.portlet-content -->
          </div> <!-- .col-md-8 -->
      </div>
    </section> <!-- .section -->
@endsection