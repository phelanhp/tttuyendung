@extends('Dashboard::backend.layout.master')
@include('User::user.breadcumb')

@section('content')
    <div id="content-container">
        <div class="btn-group w-100 d-flex justify-content-between">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:">Quản lý người dùng</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Quản lý sinh viên</li>
                </ol>

            </nav>
            <div>
            <a href="{{ route('user.get.create')  }}?group=sv" class="btn btn-info mr-2" style="height: 35px">
                <i class="fa fa-plus"></i> Thêm mới</a>
            <button type="button" class="btn btn-success" style="height: 35px" data-toggle="modal" data-target="#import-excel">
                Import Excel</button>
            </div>
            <!-- Modal -->
            <div class="modal fade bd-example-modal-sm" id="import-excel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog w-50" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Modal title</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('user.get.import') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {!! upload_file('excel_file', "old('excel_file')", "Chọn file...") !!}
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Import </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
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
                    <th style="width: 100px;">Action</th>
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
                                <a href="{{ route('user.get.edit',$val->id) }}?group=sv"><i class="fas fa-edit" style="font-size: 20px; margin-right: 20px"></i></a>
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
