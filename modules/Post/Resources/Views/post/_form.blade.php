<form action="" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Tiêu đề bài đăng</label>
                <input type="text" class="form-control" name="name" value="{{ $data->name ?? old('name')  }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="category_id">Thể loại bài đăng</label>
                <select name="category_id" id="category_id" class="form-control select2">
                    <option value=""></option>
                    @foreach($categories as $val)
                        <option @if(isset($data) && $data->category_id == $val->id) selected @endif value="{{ $val->id }}">{{ $val->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Trạng thái</label>
                <select name="status" class="form-control select2">
                    <option value="">All</option>
                    <option @if(isset($data) && $data->status == 0 )  selected='' @endif value="0">Ngưng hoạt động</option>
                    <option @if(isset($data) && $data->status == 1 )  selected='' @endif value="1">Hoạt động</option>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea name="description" class="form-control" rows="5">{{ $data->description ?? old('description')  }}</textarea>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label for="ckeditor" id="post-content">Nội dung</label>
                <textarea name="content" class="form-control" id="ckeditor" cols="30" rows="10">{{ $data->content ?? old('content')  }}</textarea>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="image">Hình ảnh</label>
                {!! upload_file('image', "old('image')") !!}
                @if(isset($data))
                    <div class="w-50">
                        <img src="{{ asset($data->image) }}" class="w-75" alt="Image"/>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">@if(!isset($data)) Thêm @else Sửa @endif</button>
        <button type="reset" class="btn btn-default">Hủy</button>
    </div>
</form>
@push('js')
    {!! JsValidator::formRequest('PPM\Post\Http\Requests\PostValidation') !!}
    <script>
        CKEDITOR.replace('ckeditor');
    </script>
@endpush
