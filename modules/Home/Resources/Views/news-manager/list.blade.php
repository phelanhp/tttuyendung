@extends('Home::layout.master')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2">
                        <span class="mr-2"><a href="{{ route('get.home.index') }}">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span>
                        <span><a href="news-ntd.html">Tin tuyển dụng</a> <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                    <h1 class="mb-0 bread">Quản Lý Tin Tuyển Dụng</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('get.news_manager.create') }}" class="btn btn-primary btn-block">Thêm Tin Tuyển Dụng<br/></a>
                </div>
                <div class="col-lg-12 ftco-animate">
                    <div class="portlet-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover table-highlight table-checkable" data-provide="datatable" data-display-rows="10" data-info="true" data-search="true" data-length-change="true" data-paginate="true">
                                <thead>
                                <tr>
                                    <th class="checkbox-column">
                                        <input type="checkbox" class="icheck-input">
                                    </th>
                                    <th data-filterable="true" data-sortable="true" data-direction="desc">#</th>
                                    <th data-filterable="true" data-sortable="true" width="15%">Hình ảnh</th>
                                    <th data-direction="asc" data-filterable="true" data-sortable="true">Tiêu Đề</th>
                                    <th data-filterable="true" class="hidden-xs hidden-sm">Ngày Đăng</th>
                                    <th data-filterable="true" data-sortable="true">Like/Comment</th>
                                    <th class="text-center">Quản lí</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user->posts as $key => $post)
                                    <tr>
                                        <td class="checkbox-column">
                                            <input type="checkbox" class="icheck-input">
                                        </td>
                                        <td>{{ $key }}</td>
                                        <td><img src="{{ asset($post->image) }}" width="100%" alt=""></td>
                                        <td><a href="{{ route('get.news.detail',$post->id) }}">{{ $post->name }}</a>
                                        </td>
                                        <?php $date = date_create($post->created_at); ?>
                                        <td>{{ date_format($date,'d-m-Y') }}</td>
                                        <td></td>
                                        <td class="text-center">
                                            <a href="{{ route('get.news_manager.edit',$post->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <a class="btn btn-xs btn-secondary" href="{{ route('get.news_manager.delete',$post->id) }}"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div> <!-- /.table-responsive -->


                    </div> <!-- /.portlet-content -->
                </div> <!-- .col-md-8 -->
            </div>
    </section> <!-- .section -->
@endsection
