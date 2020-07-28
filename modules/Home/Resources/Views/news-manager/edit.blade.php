@extends('Home::layout.master')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bannerctuet.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2">
                        <span class="mr-2"><a href="index.html">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span>
                        <span><a href="news-ntd.html">Tin tuyển dụng</a> <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                    <h1 class="mb-0 bread">Sửa Tin Tuyển Dụng</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <!-- Notification -->
            <div class="notification-box">
                @if (session('success'))
                    <div class="alert alert-info notification">{{session('success')}}</div>
                @elseif (session('danger'))
                    <div class="alert alert-danger notification">{{session('danger')}}</div>
                @endif
            </div>
            <div class="row">
                <div class="col-lg-12 ftco-animate">
                    <div class="contact-wrap w-100 p-md-5 p-4">
                        <h3 class="mb-4">Sửa tin tuyển dụng</h3>
                        <div id="form-message-warning" class="mb-4"></div>
                        <form action="{{ route('post.news_manager.edit',$news->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tiêu Đề</label>
                                        <input type="text" class="form-control" name="name" value="{{ $news->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="email">Thể loại</label>
                                        <select name="category_id" id="category_id" class="form-control select2">
                                            @foreach($categories as $val)
                                                <option @if(isset($news) && $news->category_id == $val->id) selected @endif value="{{ $val->id }}">{{ $val->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Môt tả</label>
                                        <textarea name="description" class="form-control" id="" cols="30" rows="5">{{ $news->description }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="label" for="subject">Nội Dung</label>
                                        <textarea name="content" id="ckeditor" class="" cols="30" rows="10">{{ $news->content }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label" for="subject">Hình ảnh</label>
                                        <input type="file" class="form-control" name="image" id="" placeholder="" value="{{ old('image') }}">
                                        <img src="{{ asset($news->image) }}" width="200px" alt="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Đăng</button>
                                        <button class="btn btn-default">Reset</button>
                                        <div class="submitting"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- .section -->
@endsection
@push('js')
    {!! JsValidator::formRequest('PPM\Post\Http\Requests\PostValidation') !!}
    <script>
        CKEDITOR.replace("ckeditor");
    </script>
@endpush
