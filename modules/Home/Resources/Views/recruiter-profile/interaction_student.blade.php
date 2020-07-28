@extends('Home::layout.master')

@section('content')

	<section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bannerctuet.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2">
                        <span class="mr-2"><a href="{{ route('get.home.index') }}">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span>
                        <span class="mr-2">Cá Nhân <i class="ion-ios-arrow-forward"></i></span> <span>Lịch sử hoạt động <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                    <h1 class="mb-0 bread">Trang tin hoạt động</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <table class="table">
            	<thead>
            		<tr>
            			<th>STT</th>
            			<th>Tên Sinh Viên</th>
            			<th>Ngành</th>
            			<th>Hành động</th>
                        <th>Bài viết</th>
            		</tr>
            	</thead>
            	<tbody>
                    <?php $i = 1; ?>
                    @foreach($interactions as $key => $interaction)
            		<tr>
            			<td>{{ $i++ }}</td>
            			<td>
                            <a href="{{ route('get.student.profile',$interaction['user_id']) }}">
                                    {{$interaction['name']}}
                            </a>
                        </td>
            			<td>{{ $interaction['major'] }}</td>
            			<td>{{ $interaction['active'] }}</td>
            			<td>
                            <a href="{{ route('get.news.detail',$interaction['post_id']) }}">
                                    {{ $interaction['post'] }}
                            </a>
                        </td>
            		</tr>
                    @endforeach
            	</tbody>
            </table>
            <div class="mt-5">
                <div class="text-center">
                    {{ $interactions->render('vendor.pagination.pagination_custom') }}
                </div>
            </div>
        </div>
    </section>

@endsection