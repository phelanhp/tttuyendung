@extends('Dashboard::backend.layout.master')
@include('Category::major.breadcumb')

@section('content')
    <div id="content-container">
        <div class="btn-group w-100 d-flex justify-content-between">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Danh mục</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chuyên ngành sinh viên</li>
                </ol>

            </nav>
            <a href="{{ route('major.get.create') }}" class="btn btn-info" style="height: 35px">
                <i class="fa fa-plus"></i> Thêm mới</a>
        </div>
        <div class="card">
            <div class="card-header">
                <h4><i class="fa fa-table"></i> Danh sách</h4>
            </div>
            <div class="card-content p-3">
                <table class="table">
                    <thead>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Mô tả</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($data as $key => $val)
                        <tr>
                            <td>{{ $key+1  }}</td>
                            <td>{{ $val->name  }}</td>
                            <td>{{ $val->description  }}</td>
                            <td>
                                <a href="{{ route('major.get.edit',$val->id) }}"><i class="fas fa-edit" style="font-size: 20px; margin-right: 20px"></i></a>
                                <a href="{{ route('major.get.delete',$val->id) }}"><i class="fas fa-trash" style="font-size: 20px"></i></a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
@push('js')

@endpush
