@extends('Dashboard::backend.layout.master')

@include('Category::recruiter_category.breadcumb')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-group">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:">Danh mục</a></li>
                <li class="breadcrumb-item"><a href="{{ route('user_group.get.list') }}">Chuyên ngành tuyển dụng</a></li>
                <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa Chuyên ngành tuyển dụng </li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fa fa-tasks"></i> Chỉnh sửa Chuyên ngành tuyển dụng</h4>
                    </div>
                    <div class="card-content">
                        @include('Category::recruiter_category._form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
