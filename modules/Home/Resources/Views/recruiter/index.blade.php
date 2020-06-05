@extends('Home::layout.master')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ route('get.home.index') }}">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Nhà Tuyển Dụng <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Danh sách nhà tuyển dụng</h1>
          </div>
        </div>
      </div>
    </section>
		
	<section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
						<div class="story-wrap d-md-flex align-items-center">
							<div class="img" style="background-image: url(/frontend/images/image_1.jpg);"></div>
							<div class="text pl-md-5">
								<h4>Công Ty Công nghệ AAA</h4>
								<p>Địa chỉ: Số 3A, Đường số 8, Khu công nghiệp Cần Thơ, TP.Cần Thơ <br> SĐT: 0883245689 - 0889345267 <br> Email: itaaa@gmail.com</p>
								<p><a href="{{ route('get.recruiter.detail') }}" class="btn btn-primary">Xem chi tiết</a></p>
							</div>
						</div>

						<div class="story-wrap d-md-flex align-items-center">
							<div class="img" style="background-image: url(/frontend/images/image_2.jpg);"></div>
							<div class="text pl-md-5">
								<h4>Xưởng may An Viên</h4>
								<p>Địa chỉ: Số 3A, Đường số 8, Khu công nghiệp Cần Thơ, TP.Cần Thơ <br> SĐT: 0883245689 - 0889345267 <br> Email: xuongmayanvien@gmail.com</p>
								<p><a href="{{ route('get.recruiter.detail') }}" class="btn btn-primary">Xem chi tiết</a></p>
							</div>
						</div>

						<div class="story-wrap d-md-flex align-items-center">
							<div class="img" style="background-image: url(/frontend/images/image_3.jpg);"></div>
							<div class="text pl-md-5">
								<h4>Cà phê Phố Xinh</h4>
								<p>Địa chỉ: Số 122, Đường 30/04, Q.Ninh Kiều, TP.Cần Thơ <br> SĐT: 0883245689 - 0889345267 <br> Email: cfphoxinh@gmail.com</p>
								<p><a href="{{ route('get.recruiter.detail') }}" class="btn btn-primary">Xem chi tiết</a></p>
							</div>
						</div>

						<div class="story-wrap d-md-flex align-items-center">
							<div class="img" style="background-image: url(/frontend/images/image_4.jpg);"></div>
							<div class="text pl-md-5">
								<h4>Ngân Hàng BBB</h4>
								<p>Địa chỉ: Số 37, Đường Hòa Bình, Q.Ninh Kiều, TP.Cần Thơ <br> SĐT: 0883245689 - 0889345267 <br> Email: nganhang.bbb@gmail.com</p>
								<p><a href="{{ route('get.recruiter.detail') }}" class="btn btn-primary">Xem chi tiết</a></p>
							</div>
						</div>
						<div class="row mt-5">
		          <div class="col">
		            <div class="block-27">
		              <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">4</a></li>
		                <li><a href="#">5</a></li>
		                <li><a href="#">&gt;</a></li>
		              </ul>
		            </div>
		          </div>
		        </div>

          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Tìm kiếm tên doanh nghiệp">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Lĩnh vực</h3>
                <li><a href="#">Công nghệ <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Kỹ thuật <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Xã hội &amp; Cộng đồng <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Việc bán thời gian <span class="ion-ios-arrow-forward"></span></a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tin tuyển dụng gần đây</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(/frontend/images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Jan. 30, 2020</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(/frontend/images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Jan. 30, 2020</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(/frontend/images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Jan. 30, 2020</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">home</a>
                <a href="#" class="tag-cloud-link">builder</a>
                <a href="#" class="tag-cloud-link">build</a>
                <a href="#" class="tag-cloud-link">create</a>
                <a href="#" class="tag-cloud-link">make</a>
                <a href="#" class="tag-cloud-link">construction</a>
                <a href="#" class="tag-cloud-link">house</a>
                <a href="#" class="tag-cloud-link">architect</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->
   @endsection