@extends('Dashboard::backend.layout.master')

@include('User::user_group.breadcumb')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-group">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Quản lý người dùng</a></li>
                <li class="breadcrumb-item"><a href="{{ route('user_group.get.list') }}">Quản lý nhóm người dùng</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm mới nhóm người dùng </li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fa fa-tasks"></i> Thêm mới nhóm người dùng </h4>
                    </div>
                    <div class="card-content">
                        @include('User::user_group._form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
