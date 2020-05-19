<div class="form-group">
    <label for="phone">Company</label>
    <input type="text" id="company" name="company" class="form-control" value="{{ $recruiter->company ?? old('company')  }}">
</div>
<div class="form-group">
    <label for="email">Company address</label>
    <input type="text" id="email" name="company_address" class="form-control" value="{{ $recruiter->address ?? old('address')  }}">
</div>
<div class="form-group">
    <label for="address">Founding</label>
    <input type="text" id="founding" name="founding" class="form-control" value="{{ $recruiter->founding ?? old('founding')  }}">
</div>
<div class="form-group">
    <label for="category_id">Chuyên ngành tuyển dụng</label>
    <select name="category_id" class="form-control select2" id="category_id">
        <option value=""></option>
        @foreach($recruiter_categories as $val);
        <option @if(isset($recruiter) && $recruiter->category_id == $val->id) selected @endif value="{{ $val->id }}">{{ $val->name }}</option>
        @endforeach
    </select>
</div>
