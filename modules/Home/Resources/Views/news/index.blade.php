@extends('Home::layout.master')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Tin tuyển dụng <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Tin tức tuyển dụng</h1>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="{{ route('get.news.detail') }}" class="block-20 rounded" style="background-image: url('/frontend/images/image_1.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="{{ route('get.news.detail') }}">Tuyển dụng nhân viên thiết kế giao diện</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="{{ route('get.news.detail') }}" class="block-20 rounded" style="background-image: url('/frontend/images/image_2.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="{{ route('get.news.detail') }}">Tuyển nhân viên Công Ty may mặc An Viên</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="{{ route('get.news.detail') }}" class="block-20 rounded" style="background-image: url('/frontend/images/image_3.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="{{ route('get.news.detail') }}">Tuyển dụng nhân viên làm việc bán thời gian cà phê Phố Xinh</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="{{ route('get.news.detail') }}" class="block-20 rounded" style="background-image: url('/frontend/images/image_4.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="{{ route('get.news.detail') }}">Tuyển dụng nhân viên tổng đài ngân hàng BBB</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="{{ route('get.news.detail') }}" class="block-20 rounded" style="background-image: url('/frontend/images/image_5.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="{{ route('get.news.detail') }}">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="{{ route('get.news.detail') }}" class="block-20 rounded" style="background-image: url('/frontend/images/image_6.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="{{ route('get.news.detail') }}">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
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
      </div>
    </section>
@endsection