<form action="" method="post">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Tên nhóm người dùng</label>
                <input type="text" class="form-control" name="name" value="{{ $data->name ?? old('name')  }}">
            </div>
            <div class="form-group">
                <label for="key">Key</label>
                <input type="text" class="form-control" @if(isset($data)) readonly @endif name="key" value="{{ $data->key ?? old('key')  }}">
            </div>
            <div class="form-group">
                <label for="">Trạng thái</label>
                <select name="status" class="form-control select2">
                    <option value="">All</option>
                    <option @if(isset($data) && $data->status == 0 )  selected='' @endif value="0">Ngưng hoạt động</option>
                    <option @if(isset($data) && $data->status == 1 )  selected='' @endif value="1">Hoạt động</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea name="description" class="form-control" rows="5">{{ $data->description ?? old('description')  }}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">@if(!isset($data)) Thêm @else Sửa @endif</button>
                <button type="reset" class="btn btn-default">Hủy</button>
            </div>
        </div>
    </div>
</form>
@push('js')
    {!! JsValidator::formRequest('PPM\User\Http\Requests\UserGroupValidation') !!}
@endpush
