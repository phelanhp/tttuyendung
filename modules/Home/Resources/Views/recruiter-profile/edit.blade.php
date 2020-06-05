@extends('Home::layout.master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('/frontent/mages/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span> <a href="profile-ntd.html">Nhà Tuyển Dụng</a><i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Chỉnh sửa Profile Nhà Tuyển Dụng</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ftco-animate">
          	<div class="contact-wrap w-100 p-md-5 p-4">
				<h3 class="mb-4">Chỉnh sửa Profile</h3>
				<div id="form-message-warning" class="mb-4"></div>
				<form method="POST" id="contactForm" name="contactForm" class="contactForm">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="label" for="name">Tên Công Ty</label>
								<input type="text" class="form-control" name="" id="" placeholder="Tên">
							</div>
						</div>
						<div class="col-md-6"> 
							<div class="form-group">
								<label class="label" for="email">Người Phụ Trách</label>
								<input type="email" class="form-control" name="" id="" placeholder="Tên">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="label" for="subject">Địa Chỉ Công Ty</label>
								<input type="text" class="form-control" name="" id="" placeholder="Địa Chỉ">
							</div>
						</div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="label" for="subject">Ngày thành lập</label>
                <input type="date" class="form-control" name="" id="" placeholder="">
              </div>
            </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="label" for="subject">Email</label>
								<input type="text" class="form-control" name="" id="" placeholder="Email">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="label" for="subject">SĐT</label>
								<input type="text" class="form-control" name="" id="" placeholder="SĐT">
							</div>
						</div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleFormControlTextarea1" class="label">Giới thiệu</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
              </div>
            </div>
						<div class="col-md-12">
							<div class="form-group">
								<a onclick="goBack()">Cancel</a>
								<input type="submit" value="Save" class="btn btn-primary">
								<div class="submitting"></div>
							</div>
						</div>
					</div>
				</form>
			</div>
          </div> <!-- .col-md-8 -->
      </div>
    </section> <!-- .section -->
@endsection