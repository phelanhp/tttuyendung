@extends('Dashboard::backend.layout.master')@include('Administrator::administrator.breadcumb')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fa fa-tasks"></i> Chỉnh sửa quản trị viên </h4>
                    </div>
                    <div class="card-content">
                        @include('Administrator::administrator._form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
