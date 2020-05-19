@extends('Dashboard::backend.layout.master')

@include('Category::major.breadcumb')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-group">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:">Danh mục</a></li>
                <li class="breadcrumb-item"><a href="{{ route('major.get.list') }}">Chuyên ngành sinh viên</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm mới chuyên ngành sinh viên </li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fa fa-tasks"></i> Thêm mới chuyên ngành sinh viên</h4>
                    </div>
                    <div class="card-content">
                        @include('Category::major._form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
