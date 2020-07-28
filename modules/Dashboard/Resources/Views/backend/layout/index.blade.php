@extends('Dashboard::backend.layout.master')
@section('title')
	Dashboard
@endsection
@push('css')
    <style>
        .item{
            height: 170px;
            width: 150px;
            border-radius: 5px;
            color: #715656;
            padding-top: 10px;
        }
        .quantity{
            font-size: 50px;
            line-height: 1;
            font-weight: 500;
            padding-top: 20px;
        }
        .title-dashboard{
            height: 40px;
        }
    </style>
@endpush
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="item" style="background-color: #00acee; border: solid 3px #1d75b3;">
                    <h3 class="title-dashboard">Bài đăng</h3>
                    <div class="quantity">
                        {{ $post }}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item" style="background-color: #92f583; border: solid 3px #00b323;">
                    <h3 class="title-dashboard">Vừa cập nhật</h3>
                    <div class="quantity">
                        {{ $post_now }}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item" style="background-color: #fbaf87; border: solid 3px #b3581d;">
                    <h3 class="title-dashboard">Nhà tuyển dụng</h3>
                    <div class="quantity">
                        {{ $recruiter }}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item" style="background-color: #fbf58b; border: solid 3px #dac504;">
                    <h3 class="title-dashboard">Sinh viên</h3>
                    <div class="quantity">
                        {{ $student }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
