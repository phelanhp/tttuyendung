@extends('Home::layout.master')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ route('get.home.index') }}">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2">Cá Nhân <i class="ion-ios-arrow-forward"></i></span> <span>Lịch sử hoạt động <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-0 bread">Trang tin hoạt động</h1>
      </div>
    </div>
  </div>
</section>
        
<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Section: Social newsfeed v.1 -->
            <section class="my-5">

              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-md-12">

                  <!-- Newsfeed -->
                  <div class="mdb-feed">

                    <!-- First news -->
                    <div class="news">

                      <!-- Label -->
                      <div class="label">
                        <img src="https://icon-icons.com/icons2/1879/PNG/64/iconfinder-3-avatar-2754579_120516.png" class="rounded-circle z-depth-1-half">
                      </div>

                      <!-- Excerpt -->
                      <div class="excerpt">

                        <!-- Brief -->
                        <div class="brief">
                          <a class="name">Bạn</a> đã bình luận vào một bài viết
                          <div class="date">1 hour ago</div>
                        </div>

                        <!-- Feed footer -->
                        <div class="feed-footer">
                          <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('/frontend/images/image_1.jpg');">
                              </a>
                              <div class="text mt-3">
                                <div class="meta mb-2">
                                  <div><a href="#">January 30, 2020</a></div>
                                  <div><a href="#">Admin</a></div>
                                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                                </div>
                                <h3 class="heading"><a href="#">Tuyển dụng nhân viên thiết kế giao diện</a></h3>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                      <!-- Excerpt -->

                    </div>
                    <!-- First news -->

                    <!-- Second news -->
                    <div class="news">

                      <!-- Label -->
                      <div class="label">
                        <img src="https://icon-icons.com/icons2/1879/PNG/64/iconfinder-3-avatar-2754579_120516.png">
                      </div>

                      <!-- Excerpt -->
                      <div class="excerpt">

                        <!-- Brief -->
                        <div class="brief">
                          <a class="name">Bạn</a> đã yêu thích một bài viết
                          <div class="date">4 hours ago</div>
                        </div>

                        <!-- Feed footer -->
                        <div class="feed-footer">
                          <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('/frontend/images/image_2.jpg');">
                              </a>
                              <div class="text mt-3">
                                <div class="meta mb-2">
                                  <div><a href="#">January 30, 2020</a></div>
                                  <div><a href="#">Admin</a></div>
                                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                                </div>
                                <h3 class="heading"><a href="#">Tuyển nhân viên Công Ty may mặc An Viên</a></h3>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                      <!-- Excerpt -->

                    </div>
                    <!-- Second news -->

                    <!-- Third news -->
                    <div class="news">

                      <!-- Label -->
                      <div class="label">
                        <img src="https://icon-icons.com/icons2/1879/PNG/64/iconfinder-3-avatar-2754579_120516.png" class="rounded-circle z-depth-1-half">
                      </div>

                      <!-- Excerpt -->
                      <div class="excerpt">

                        <!-- Brief -->
                        <div class="brief">
                          <a class="name">Bạn</a> đã bình luận vào một bài viết
                          <div class="date">7 hours ago</div>
                        </div>

                        <!-- Feed footer -->
                        <div class="feed-footer">
                          <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('/frontend/images/image_3.jpg');">
                              </a>
                              <div class="text mt-3">
                                <div class="meta mb-2">
                                  <div><a href="#">January 30, 2020</a></div>
                                  <div><a href="#">Admin</a></div>
                                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                                </div>
                                <h3 class="heading"><a href="#">Tuyển dụng nhân viên làm việc bán thời gian cà phê Phố Xinh</a></h3>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                      <!-- Excerpt -->

                    </div>
                    <!-- Third news -->

                  </div>
                  <!-- Newsfeed -->

                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

            </section>
            <!-- Section: Social newsfeed v.1 -->    
      </div>

    </div>
  </div>
</section> <!-- .section -->

@endsection