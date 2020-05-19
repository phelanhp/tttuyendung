@extends('Dashboard::backend.layout.master')

@include('User::user.breadcumb')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-group">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:">Quản lý người dùng</a></li>
                @if(Request::get('group') === 'ntd')
                    <li class="breadcrumb-item"><a href="{{ route('user.get.recruiter_list') }}">Quản lý nhà tuyển dụng</a>
                    </li>
                @else
                    <li class="breadcrumb-item"><a href="{{ route('user.get.student_list') }}">Quản lý sinh viên</a>
                    </li>
                @endif
                <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa người dùng</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            <i class="fa fa-tasks"></i>
                            @if(Request::get('group') === 'ntd')
                                Chỉnh sửa nhà tuyển dụng
                            @else
                                Chỉnh sửa sinh viên
                            @endif
                        </h4>
                    </div>
                    <div class="card-content">
                        @include('User::user._form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
