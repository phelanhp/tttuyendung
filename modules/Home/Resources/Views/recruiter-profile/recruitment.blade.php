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
                    <h1 class="mb-0 bread">Quản Lý Hồ Sơ Tuyển Dụng</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">
                    <div class="portlet-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover table-highlight table-checkable" data-provide="datatable" data-display-rows="10" data-info="true" data-search="true" data-length-change="true" data-paginate="true">
                                <thead>
                                <tr>
                                    <th data-filterable="true" data-sortable="true" data-direction="desc">#</th>
                                    <th data-filterable="true" data-sortable="true" width="15%">Sinh viên</th>
                                    <th data-filterable="true" class="hidden-xs hidden-sm">Email</th>
                                    <th data-filterable="true" class="hidden-xs hidden-sm">CV/Profile</th>
                                    <th data-direction="asc" data-filterable="true" data-sortable="true">Tin tuyển dụng</th>
                                    <th data-direction="asc" data-filterable="true" data-sortable="true">Ngày nộp</th>
                                    <th data-direction="asc" data-filterable="true" data-sortable="true"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($recruitment as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                            <a href="{{ route('get.student.profile',$item->user_id) }}">{{ $item->name ?? NULL }}</a>
                                        </td>
                                        <td>
                                            {{ $item->email ?? NULL }}
                                        </td>
                                        <td>
                                            <a href="{{ asset($item->cv_profile) }}">Hồ sơ sinh viên</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('get.news.detail',$item->post_id) }}">{{ $item->post->name }}</a>
                                        </td>
                                        <?php $date = date_create($item->created_at); ?>
                                        <td>{{ date_format($date,'d-m-Y') }}</td>
                                        <td>
                                            <a class="btn btn-xs btn-secondary" href="{{ route('get.recruitment.delete',$item->id) }}"><i class="fa fa-trash"></i></a>
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
