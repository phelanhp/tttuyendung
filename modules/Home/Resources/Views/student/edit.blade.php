@extends('Home::layout.master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
      	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ route('get.home.index') }}">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2">Cá Nhân <i class="ion-ios-arrow-forward"></i></span> <span>Chỉnh sửa profile <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-0 bread">Chỉnh sửa thông tin</h1>
      </div>
    </div>
  </div>
</section>
		
<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">
      <div class="col-12">
            
                <div class="container">
                    <h1>Chỉnh sửa Profile</h1>
                    <hr>
                    <form method="POST" action="">
                            {{ csrf_field() }}
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-3">
                            <div class="text-center">
                                <div class="image-container">
                                <img src="{{ asset($user->avatar) }}" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                <div class="middle">
                                </div>
                            </div>
                                <h6>Tải ảnh lên</h6>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <!-- edit form column -->
                        <div class="col-md-9 personal-info">
                            <div class="alert alert-info alert-dismissable">
                                <a class="panel-close close" data-dismiss="alert">×</a>
                                <i class="fa fa-coffee"></i>Vui lòng nhập lại <strong>tất cả</strong> thông tin để chỉnh sửa.</div>
                            <h3>Thông tin sinh viên</h3>
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Họ và Tên:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="{{ $user->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ngày sinh:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="date" value="{{ $user->birth_date}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Số điện thoại:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="{{ $user->phone }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Email:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ngành:</label>
                                    <div class="col-lg-8">
                                        <div class="ui-select">
                                            <select id="user_time_zone" class="form-control">
                                                <option value="co-khi">Kỹ thuật cơ khí</option>
                                                <option value="cntp-cnsh">CNTP & CNSH</option>
                                                <option value="dien-dientu">Điện - Điện tử - Viễn Thông</option>
                                                <option value="qlcn">Quản lý công nghiệp</option>
                                                <option value="ktxd">Kỹ thuật xây dựng</option>
                                                <option value="cntt">Công nghệ thông tin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Khóa học:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" 
                                        value="{{ $user->student->course }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Địa chỉ:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="{{ $user->address}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Tình trạng:</label>
                                    <div class="col-lg-8">
                                        <div class="ui-select">
                                            <select id="user_time_zone" class="form-control">
                                                <option value="co-khi">Đang tìm việc làm</option>
                                                <option value="cntp-cnsh">Đã có việc làm</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Sở thích:</label>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4">
                                            {{ $user->hobby}}
                                        </textarea>
                                    </div>
                                </div>
                                <br>
                                <h3>Tài khoản và bảo mật</h3>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Mật khẩu hiện tại:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="password" value="11111122333">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Mật khẩu mới:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="password" value="11111122333">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Xác nhận mật khẩu mới:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="password" value="11111122333">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <input type="button" class="btn btn-primary" value="Lưu Chỉnh Sửa">
                                        <span></span>
                                        <input type="reset" class="btn btn-default" value="Thoát">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </form>
                </div>
                <hr>
        </div>



    </div>
  </div>
</section> <!-- .section -->
@endsection