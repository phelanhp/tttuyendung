@extends('Home::layout.master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bannerctuet.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
      	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ route('get.home.index') }}">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2">Cá Nhân <i class="ion-ios-arrow-forward"></i></span> <span>Profile <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-0 bread">Thông tin sinh viên</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="notification-box">
                @if (session('success'))
                    <div class="alert alert-info notification">{{session('success')}}</div>
                @elseif (session('danger'))
                    <div class="alert alert-danger notification">{{session('danger')}}</div>
                @endif
            </div>
    <div class="row">
      <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title mb-4">
                        <div class="d-flex justify-content-start">
                            <div class="image-container">
                                <img src="{{ asset($user->avatar) }}" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                <div class="middle">
                                </div>
                            </div>
                            <div class="userData ml-3">
                                <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);">{{ $user->name }}</a></h2>
                            </div>
                                                       </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Thông tin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="false">Sở thích, Ưu điểm</a>
                                </li>
                            </ul>
                            <div class="tab-content ml-1" id="myTabContent">
                                <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">


                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Họ và tên</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{ $user->name }}
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Giới Tính</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            <?php
                                            if ($user->sex == 1){
												echo "Nam";
                                        	}
                                        	else{
												echo "Nữ";
                                        	}
                                        	?>
                                        </div>
                                    </div>
                                    <hr />


                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Ngày sinh</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{ $user->birth_date}}
                                        </div>
                                    </div>
                                    <hr />


                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Số điện thoại</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{ $user->phone }}
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Email</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{ $user->email }}
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Ngành</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{ $user->student->major->name ?? NULL }}
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-3">
                                            <label style="font-weight:bold;">Thành Tích :</label>
                                    
                                            {{ $user->student->achievements ?? NULL }}
                                        </div>
                                        <div class="col-3">
                                            <label style="font-weight:bold;">Chứng Chỉ :</label>
                                        
                                            {{ $user->student->certificate ?? NULL }}
                                        </div>
                                        <div class="col-3">
                                            <label style="font-weight:bold;">Kinh Nghiệm :</label>
                                            {{ $user->student->experience ?? NULL }}
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Khóa học</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{ $user->student->course }}
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Địa chỉ</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{ $user->address}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Tình trạng</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            <?php
                                            if ($user->status == 1){
												echo "Đang tìm việc làm";
                                        	}
                                        	else{
												echo "Đã có việc làm";
                                        	}
                                        	?>
                                        </div>
                                    </div>
                                    <hr>

                                </div>
                                <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                    {{ $user->hobby}}
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>

            </div>
        </div>



    </div>
  </div>
</section> <!-- .section -->
@endsection
