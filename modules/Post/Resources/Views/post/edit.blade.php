@extends('Dashboard::backend.layout.master')

@include('Post::post_category.breadcumb')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-group">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Quản lý bài đăng</a></li>
                <li class="breadcrumb-item"><a href="{{ route('post.get.list') }}">Quản lý bài đăng</a></li>
                <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa bài đăng</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fa fa-tasks"></i> Chỉnh sửa thể loại bài đăng</h4>
                    </div>
                    <div class="card-content">
                        @include('Post::post._form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
