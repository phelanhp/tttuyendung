<div class="form-group">
    <label for="code_id">Mã số sinh viên</label>
    <input type="text" id="code_id" name="code_id" class="form-control" value="{{ $student->code_id ?? old('code_id')  }}">
</div>
<div class="form-group">
    <label for="class">Tên lớp</label>
    <input type="text" id="class" name="class" class="form-control" value="{{ $student->class ?? old('class')  }}">
</div>
<div class="form-group">
    <label for="course">Khóa học</label>
    <input type="text" id="course" name="course" class="form-control" value="{{ $student->course ?? old('course')  }}">
</div>
<div class="form-group">
    <label for="category_id">Chuyên ngành</label>
    <select name="major_id" class="form-control select2" id="major_id">
        <option value=""></option>
        @foreach($majors as $val);
        <option @if(isset($student) && $student->major_id == $val->id) selected @endif value="{{ $val->id }}">{{ $val->name }}</option>
        @endforeach
    </select>
</div>
