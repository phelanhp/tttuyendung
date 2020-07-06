@extends('Home::layout.master')

@section('content')
 <section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bannerctuet.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ route('get.home.index') }}">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Liên hệ <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Liên hệ</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row no-gutters">
								<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">Liên lạc</h3>
										<div id="form-message-warning" class="mb-4"></div> 
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15714.544814878403!2d105.7681308!3d10.0468487!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a745510330faf4e!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBL4bu5IHRodeG6rXQgLSBDw7RuZyBuZ2jhu4cgQ-G6p24gVGjGoSAoQ2FuIFRobyBVbml2ZXJzaXR5IG9mIFRlY2hub2xvZ3kp!5e0!3m2!1svi!2s!4v1468998886815" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
									</div> 
								</div>
								<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
									<div class="info-wrap bg-primary w-100 p-md-5 p-4">
										<h3>Thông Tin Liên Hệ</h3>
										<p class="mb-4">Chào mừng đến mục tiêu của cuộc đời</p>
					        	<div class="dbox w-100 d-flex align-items-start">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-map-marker"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Địa chỉ:</span> 256 Nguyễn Văn Cừ, Quận Ninh Kiều, Thành phố Cần Thơ</p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-phone"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Phone:</span> <a href="tel://1234567920">0292 3898 167</a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-paper-plane"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Email:</span> <a href="mailto:info@yoursite.com">phonghanhchinh@ctuet.edu.vn</a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-globe"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Website</span> <a href="#">http://tttuyendung.local/</a></p>
						          </div>
					          </div>
				          </div>
								</div>
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section>
@endsection