@extends('Home::layout.master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="news-ntd.html">Tin tuyển dụng</a> <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Quản Lý Tin Tuyển Dụng</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
                  <div class="col-md-4">
                    <p>
                      <a href="{{ route('get.news-manager.create') }}" class="btn btn-primary btn-block">Thêm Tin Tuyển Dụng<br /></a></p>
                  </div>
        <div class="col-lg-12 ftco-animate">
            <div class="portlet-content">           

                <div class="table-responsive">

                <table 
                  class="table table-striped table-bordered table-hover table-highlight table-checkable" 
                  data-provide="datatable" 
                  data-display-rows="10"
                  data-info="true"
                  data-search="true"
                  data-length-change="true"
                  data-paginate="true"
                >
                    <thead>
                      <tr>
                        <th class="checkbox-column">
                          <input type="checkbox" class="icheck-input">
                        </th>
                        <th data-filterable="true" data-sortable="true" data-direction="desc">ID</th>
                        <th data-direction="asc" data-filterable="true" data-sortable="true">Tiêu Đề</th>
                        <th data-filterable="true" data-sortable="true">Nội Dung</th>
                        <th data-filterable="true" data-sortable="true">Hình ảnh</th>
                        <th data-filterable="false" class="hidden-xs hidden-sm">Người Đăng</th>
                        <th data-filterable="true" class="hidden-xs hidden-sm">Ngày Đăng</th>
                        <th data-filterable="true" data-sortable="true">Like/Comment</th>
                        <th class="text-center">Quản lí</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr >
                        <td class="checkbox-column">
                          <input type="checkbox" class="icheck-input">
                        </td>.
                        
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="hidden-xs hidden-sm"></td>
                        <td class="hidden-xs hidden-sm"></td>
                        <td>
                          <a href=""></a>
                        </td>
                        <td class="text-center">
                                      <button  class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></button>
                                      &nbsp;
                                      <button class="btn btn-xs btn-secondary"><a href=""><i class="fa fa-times"></i></a></button>
                                    </td>
                      </tr>
                    </tbody>
                  </table>
                </div> <!-- /.table-responsive -->
                
                

              </div> <!-- /.portlet-content -->
          </div> <!-- .col-md-8 -->
      </div>
    </section> <!-- .section -->
@endsection