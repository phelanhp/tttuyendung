@extends('Home::layout.master')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bannerctuet.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2">
                        <span class="mr-2"><a href="{{ route('get.home.index') }}">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span>
                        <span class="mr-2">Cá Nhân <i class="ion-ios-arrow-forward"></i></span> <span>Chỉnh sửa profile <i class="ion-ios-arrow-forward"></i></span>
                    </p>
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
                        <form method="POST" action="{{ route('post.student.edit') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <div class="image-container">                                            
                                            <img src="{{ asset($user->avatar) }}" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail"/>
                                            <div class="middle"></div>
                                        </div>
                                        <h6>Tải ảnh lên</h6>
                                        <input type="file" name="avatar" class="form-control" placeholder="avatar">
                                    </div>
                                </div>
                                <!-- edit form column -->
                                <div class="col-md-9 personal-info">
                                    <h3>Thông tin sinh viên</h3>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Họ và Tên:</label>
                                            <input class="form-control" name="name" type="text" value="{{ $user->name }}" placeholder="Họ và Tên">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Ngày sinh:</label>
                                            <?php
                                            $birth_date = date_create($user->birth_date);
                                            $birth_date = date_format($birth_date, 'Y-m-d');
                                            ?>
                                            <input class="form-control" type="date" name="birth_date" value="{{ $birth_date }}">
                                        </div>
                                        <div class="form-group  col-md-6">
                                            <label class="control-label">Số điện thoại:</label>
                                            <input class="form-control" name="phone" type="text" value="{{ $user->phone }}" placeholder="Số điện thoại">
                                        </div>
                                        <div class="form-group  col-md-6">
                                            <label class="control-label">Email:</label>
                                            <input class="form-control" name="email" type="text" value="{{ $user->email }}" placeholder="Email">
                                        </div>
                                        <div class="form-group  col-md-6">
                                            <label class="control-label">Ngành:</label>
                                            <div class="ui-select">
                                                <select id="user_time_zone" name="major_id" class="form-control">
                                                    <option value="">-- Chọn ngành nghề --</option>
                                                    @foreach($majors as $major)
                                                        <option value="{{ $major->id }}" @if(isset($user->student->major) && $user->student->major->id == $major->id) selected @endif>{{ $major->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group  col-md-6">
                                            <label class="control-label">Khóa học:</label>
                                            <input class="form-control" name="course" type="text" value="{{ $user->student->course }}" placeholder="Khóa học">
                                        </div>
                                        <div class="form-group  col-md-6">
                                            <label class="control-label">Địa chỉ:</label>
                                            <input class="form-control" name="address" type="text" value="{{ $user->address}}" placeholder="Địa chỉ">
                                        </div>
                                        <div class="form-group  col-md-6">
                                            <label class="control-label">Tình trạng:</label>
                                            <div class="ui-select">
                                                <select id="user_time_zone" name="status" class="form-control select2">
                                                    <option value="0" @if($user->status == 0) selected @endif >Đang tìm việc làm</option>
                                                    <option value="1" @if($user->status == 1) selected @endif >Đã có việc làm</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Thành tích:</label>
                                            <textarea class="form-control" name="achievements" rows="4">{{ $user->student->achievements ?? old('achievements') }}</textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Chứng chỉ:</label>
                                            <textarea class="form-control" name="certificate" rows="4">{{ $user->student->certificate ?? old('certificate') }}</textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Kinh nghiệm:</label>
                                            <textarea class="form-control" name="experience" rows="4">{{ $user->student->experience ?? old('experience') }}</textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Sở thích:</label>
                                            <textarea class="form-control" name="hobby" rows="4">{{ $user->hobby}}</textarea>
                                        </div>

                                    </div>

                                    <br>
                                    <h3>Tài khoản và bảo mật</h3>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Mật khẩu hiện tại:</label>
                                            <input class="form-control" type="password" name="password">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Mật khẩu mới:</label>
                                            <input class="form-control" type="password" name="new_password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <a onclick="goBack()" class="btn btn-default border">Cancel</a>
                                        </div>
                                    </div>
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
@push('js')
    {!! JsValidator::formRequest('PPM\User\Http\Requests\UserValidation') !!}
@endpush
