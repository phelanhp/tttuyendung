<form action="" method="post" class="form" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="validateSelect">Tên quản trị viên</label>
                <input type="text" class="form-control" name="name" value="{{ $data->name ?? old('name') }}">
            </div>
            <div class="form-group">
                <label for="validateSelect">Số điện thoại</label>
                <input type="text" class="form-control" name="phone" value="{{ $data->phone ?? old('phone') }}">
            </div>
            @if(!isset($data))
                <div class="form-group">
                    <label for="validateSelect">Tên đăng nhập</label>
                    <input type="text" class="form-control" name="username" value="{{ $data->name ?? old('username') }}">
                </div>
                <div class="form-group">
                    <label for="validateSelect">Mật khẩu</label>
                    <input type="password" class="form-control file-upload" name="password" value="{{ old('password') }}">
                </div>
            @endif
            <div class="form-group">
                <button type="submit" class="btn btn-primary">@if(!isset($data)) Thêm @else Sửa @endif</button>
                <button type="reset" class="btn btn-default">Hủy</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="validateSelect">Hình ảnh</label>
                {!! upload_file('avatar', "old('avatar')") !!}
                @if(isset($data))
                    <div class="w-50">
                        <img src="{{ asset($data->avatar) }}" class="w-75" alt="Profile Picture"/>
                    </div> <!-- /.thumbnail -->
                @endif
            </div>
        </div>
    </div>
</form>
@push('js')
{!! JsValidator::formRequest('PPM\Administrator\Http\Requests\AdminValidation') !!}
@endpush
