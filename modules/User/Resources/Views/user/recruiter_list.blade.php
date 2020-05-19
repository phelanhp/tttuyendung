@extends('Dashboard::backend.layout.master')
@include('User::user.breadcumb')

@section('content')
    <div id="content-container">
        <div class="btn-group w-100 d-flex justify-content-between">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:">Quản lý người dùng</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Quản lý nhà tuyển dụng</li>
                </ol>

            </nav>
            <a href="{{ route('user.get.create')  }}?group=ntd" class="btn btn-info" style="height: 35px">
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
                        <th>Ngày sinh</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Số CMND</th>
                        <th>Giới tính</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($data as $key => $val)
                        <tr>
                            <td>{{ $key+1  }}</td>
                            <td>{{ $val->name  }}</td>
                            <td>{{ date('d-m-Y',strtotime($val->birth_date))  }}</td>
                            <td>{{ $val->phone  }}</td>
                            <td>{{ $val->email  }}</td>
                            <td>{{ $val->address  }}</td>
                            <td>{{ $val->identity_card_no  }}</td>
                            <td>{{ ($val->sex == 0) ? 'Nữ' : 'Nam'  }}</td>
                            <td>
                                <a href="{{ route('user.get.edit',$val->id) }}?group=ntd"><i class="fas fa-edit" style="font-size: 20px; margin-right: 20px"></i></a>
                                <a href="{{ route('user.get.delete',$val->id) }}"><i class="fas fa-trash" style="font-size: 20px"></i></a>
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
