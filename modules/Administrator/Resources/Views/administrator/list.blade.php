@extends('Dashboard::backend.layout.master')
@include('Administrator::administrator.breadcumb')

@section('content')
	<div id="content-container">
        <div class="btn-group">
            <a href="{{ route('get.create.admin') }}" class="btn btn-info">Thêm mới</a>
        </div>
        <div class="card">
            <div class="card-header">
                <h4><i class="fa fa-table"></i> Danh sách quản trị viên</h4>
            </div> <!-- /.portlet-header -->
            <div class="card-content p-3">
                <div class="table-responsive">

                <table class="table">
                        <thead>
                            <tr>
                                <th width="50px">STT</th>
                                <th width="80px">Avatar</th>
                                <th width="200px">Tên</th>
                                <th width="100px">Phone</th>
                                <th width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $val)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><img src="{{ asset($val->avatar) }}" class="w-100" alt=""></td>
                                <td>{{ $val->name }}</td>
                                <td>{{ $val->phone }}</td>
                                <td>
                                    <a href="{{ route('get.edit.admin',$val->id) }}"><i class="fas fa-edit" style="font-size: 20px; margin-right: 20px"></i></a>
                                    <a href="{{ route('get.delete.admin',$val->id) }}"><i class="fas fa-trash" style="font-size: 20px"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- /.table-responsive -->
            </div> <!-- /.portlet-content -->
        </div> <!-- /.portlet -->
	</div>
@endsection
@push('js')

@endpush
