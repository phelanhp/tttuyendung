@extends('Home::layout.master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Tin tuyển dụng <i class="ion-ios-arrow-forward"></i></a></span> <span>Thông tin chi tiết <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Tin tức tuyển dụng</h1>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
          	<p>
              <img src="/frontend/images/image_1.jpg" alt="" class="img-fluid">
            </p>
            <h2 class="mb-3">Tuyển dụng nhân viên thiết kế giao diện Công ty công nghệ AAA</h2>
            <h5 class="mb-3 mt-5">Thông tin tuyển dụng</h5>
            <p><b>Kinh nghiệm:</b> Không yêu cầu</p>
            <p><b>Yêu cầu bằng cấp:</b> Đại Học</p>
            <p><b>Hình thức làm việc:</b> Toàn thời gian</p>
            <p><b>Chức vụ:</b> Nhân viên</p>
            <p><b>Yêu cầu giới tính:</b> Nam, nữ</p>
            <p><b>Số lượng:</b> 3</p>
            <hr>
            <h5 class="mb-3 mt-5">Mô tả công việc</h5>
            <p>Thiết kế giao diện như bản vẽ có sẵn</p>
            <p>Đảm bảo thống nhất với nhận diện thương hiệu, retouch/chỉnh sửa hình ảnh sản phẩm của công ty</p>
            <hr>
            <h5 class="mb-3 mt-5">Quyền lợi</h5>
            <p>Công ty đóng Bảo hiểm Y Tê, Bảo Hiểm Xã hội.</p>
            <p> Phụ cấp: team building, nghỉ hè, tiền lương tháng 13, thưởng theo hiệu quả dự án.</p>
            <hr>
            <h5 class="mb-3 mt-5">Yêu cầu công việc</h5>
            <p>Web: Thành thạo Nodejs hoặc PHP(laravel)</p>
            <p>Thành thạo framework boostrap</p>
            <p>Kỹ năng mềm: Nhiệt tình, ham học hỏi, cởi mở trong giao tiếp</p>
            <h5 class="mb-3 mt-5">Thông tin liên hệ</h5>
            <p><b>Người liên hệ:</b> Chị Hoa</p>
            <p><b>Địa chỉ công ty:</b> Địa chỉ: Số 3A, Đường số 8, Khu công nghiệp Cần Thơ, TP.Cần Thơ</p>
            <p><b>Hạn nộp hồ sơ:</b> 20/06/2020</p>
            <p><b>Ngôn ngữ hồ sơ:</b> Tiếng Việt</p>
            <br>
            <p><a href="#" class="btn btn-primary">Ứng tuyển ngay</a>
              <a href="#" class="btn btn-primary">Yêu thích</a></p> 

            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
              </div>
            </div>


            <div class="pt-5 mt-5">
              <h3 class="mb-5">Bình luận</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">October 18, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">October 18, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>

                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="images/person_1.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>John Doe</h3>
                        <div class="meta">October 18, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                      </div>


                      <ul class="children">
                        <li class="comment">
                          <div class="vcard bio">
                            <img src="images/person_1.jpg" alt="Image placeholder">
                          </div>
                          <div class="comment-body">
                            <h3>John Doe</h3>
                            <div class="meta">October 18, 2018 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply">Reply</a></p>
                          </div>

                            <ul class="children">
                              <li class="comment">
                                <div class="vcard bio">
                                  <img src="images/person_1.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                  <h3>John Doe</h3>
                                  <div class="meta">October 18, 2018 at 2:21pm</div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                  <p><a href="#" class="reply">Reply</a></p>
                                </div>
                              </li>
                            </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">October 18, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Viết bình luận</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Tên *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>

                  <div class="form-group">
                    <label for="message">Lời bình luận</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Comment" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Tìm kiếm bài viết">
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
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
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
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
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
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
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

            <!-- <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div> -->

        </div>
      </div>
    </section> <!-- .section -->
@endsection