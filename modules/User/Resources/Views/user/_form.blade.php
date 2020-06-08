<?php
use PPM\User\Entities\UserGroup;
?>

<form action="" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="group_id">Nhóm người dùng</label>
                @if(Request::get('group') === 'ntd')
                    <input type="text" readonly="" class="form-control" value="Nhà tuyển dụng">
                    <input type="hidden" name="group_id" value="<?= UserGroup::getGroupId('nha-tuyen-dung') ?>">
                @else
                    <input type="text" readonly="" class="form-control" value="Sinh viên">
                    <input type="hidden" name="group_id" value="<?= UserGroup::getGroupId('sinh-vien') ?>">
                @endif
            </div>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Tên người dùng</label>
                <input type="text" class="form-control" name="name" value="{{ $data->name ?? old('name')  }}">
            </div>
            <div class="form-group">
                <label for="birth_date">Ngày sinh</label>
                <div id="dp-ex-2" class="input-group date">
                    <input class="form-control" id="birth_date" type="text" name="birth_date" value="{{ $data->birth_date ?? old('birth_date')  }}">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
            <div class="form-group" style="margin-bottom: 22.4px;">
                <label for="sex">Giới tính</label><br>
                <div class="row ml-3 input-group">
                    <div class="col-md-6">
                        <input type="radio" @if(isset($data) && $data->sex == 1 ) checked @endif id="sex" name="sex" value="1"> Nam
                    </div>
                    <div class="col-md-6">
                        <input type="radio" id="sex" name="sex" value="0" @if(isset($data) && $data->sex == 0 ) checked @endif > Nữ
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Trạng thái</label>
                <select name="status" class="form-control select2">
                    <option value="">All</option>
                    <option @if(isset($data) && $data->status == 0 )  selected='' @endif value="0" >Ngưng hoạt động</option>
                    <option @if(isset($data) && $data->status == 1 )  selected='' @endif value="1">Hoạt động</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ $data->phone ?? old('phone')  }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" value="{{ $data->email ?? old('email')  }}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" class="form-control" value="{{ $data->address ?? old('address')  }}">
            </div>
            <div class="form-group">
                <label for="identity_card_no">Số CMND</label>
                <input type="text" id="identity_card_no" name="identity_card_no" class="form-control" value="{{ $data->identity_card_no ?? old('identity_card_no')  }}">
            </div>
        </div>
        <div class="col-md-4">
            @if(Request::get('group') === 'ntd')
                @include('User::user._form_recruiter')
            @else
                @include('User::user._form_student')
            @endif
        </div>
        <div class="col-md-12">
            <hr>
        </div>
        <div class="col-md-6">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $data->username ?? NULL }}">
        </div>
        <div class="col-md-6">
            <label for="username">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="">
        </div>
        <div class="col-md-12">
            <hr>
        </div>
        <div class="col-md-8">
            <label for="hobby">
                @if (Request::get('group') === 'ntd')
                    Giới thiệu
                @else
                    Sở thích
                @endif
            </label>
            <textarea name="hobby" class="form-control" id="hobby" cols="30" rows="10">{{ $data->hobby ?? NULL }}</textarea>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="validateSelect">Hình ảnh</label>
                {!! upload_file('avatar', "old('avatar')") !!}
                @if(isset($data))
                    <div class="w-50">
                        <img src="{{ asset($data->avatar) }}" class="w-75" alt="Image" />
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="form-group mt-5">
        <button type="submit" class="btn btn-primary">@if(!isset($data)) Thêm @else Sửa @endif</button>
        <button type="reset" class="btn btn-default">Hủy</button>
    </div>
</form>
@push('js')
    {!! JsValidator::formRequest('PPM\User\Http\Requests\UserValidation') !!}
    <script>
        $(document).ready(function(){
            $('#code_id').change(function () {
                $('#username').val($(this).val());
            })
        })
    </script>
@endpush

