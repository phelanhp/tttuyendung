<form action="" method="post">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Tên chuyên ngành</label>
                <input type="text" class="form-control" name="name" value="{{ $data->name ?? old('name')  }}">
            </div>
            <div class="form-group">
                <label for="status">Trạng thái</label>
                <select name="status" class="form-control select2">
                    <option value="">All</option>
                    <option @if(isset($data) && $data->status == 0 )  selected='' @endif value="0" >Ngưng hoạt động</option>
                    <option @if(isset($data) && $data->status == 1 )  selected='' @endif value="1">Hoạt động</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea name="description" class="form-control" rows="5">{{ $data->description ?? old('description')  }}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">@if(!isset($data)) Thêm @else Sửa @endif</button>
                <button type="reset" class="btn btn-default">Hủy</button>
            </div>
        </div>
    </div>
</form>
