@extends('Home::layout.master')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bannerctuet.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2">
                        <span class="mr-2"><a href="{{ route('get.home.index') }}">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span>
                        <span> <a href="profile-ntd.html">Nhà Tuyển Dụng</a><i class="ion-ios-arrow-forward"></i></span>
                    </p>
                    <h1 class="mb-0 bread">Chỉnh sửa Profile Nhà Tuyển Dụng</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <form method="POST" action="{{ route('post.recruiter_profile.edit') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="image-container">
                                <img src="{{ asset($user->avatar) }}" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail"/>
                                <div class="middle"></div>
                            </div>
                            <h6>Tải ảnh lên</h6>
                            <input type="file" name="avatar" class="form-control" placeholder="avatar">
                        </div>
                    </div>
                    <div class="col-lg-9 ftco-animate">
                        <div class="contact-wrap w-100">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="company">Tên Công Ty</label>
                                        <input type="text" class="form-control" name="company" id="company" value="{{ $user->recruiter->company }}" placeholder="Tên công ty">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="name">Người Phụ Trách</label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}" placeholder="Tên">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="address">Địa Chỉ Công Ty</label>
                                        <input type="text" class="form-control" name="address" id="address" value="{{ $user->recruiter->address }}" placeholder="Địa Chỉ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="founding">Ngày thành lập</label>
                                        <input type="text" class="form-control" name="founding" id="founding" value="{{ $user->recruiter->founding }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="email">Email</label>
                                        <input type="text" class="form-control" name="email" id="email" value="{{ $user->recruiter->email }}" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="phone">Số Điện Thoại</label>
                                        <input type="text" class="form-control" name="phone" id="phone" value="{{ $user->recruiter->phone }}" placeholder="Số Điện Thoại">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="label">Giới thiệu</label>
                                        <textarea name="hobby" class="form-control" id="exampleFormControlTextarea1" rows="4">{{ $user->hobby }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a onclick="goBack()" class="btn btn-default border">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@push('js')
    {!! JsValidator::formRequest('PPM\User\Http\Requests\UserValidation') !!}
@endpush
