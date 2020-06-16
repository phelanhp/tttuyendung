@extends('Home::layout.master')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2">
                        <span class="mr-2"><a href="index.html">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span>
                        <span class="mr-2"><a href="blog.html">Tin tuyển dụng <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Thông tin chi tiết <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Tin tức tuyển dụng</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="ftco-animate">
                <div class="card mb-2">
                    <div class="card-header">
                        <div class="card-title float-left">
                            <h4 class="mb-3">{{$post->name}}</h4>
                        </div>
                        <div class="form-group float-right">
                            <a href="#" class="btn btn-primary">Ứng tuyển ngay</a>
                            <a href="#" class="btn btn-primary">Yêu thích</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 card-description d-flex align-items-center">
                            <div class="card-image">
                                <img src="{{asset($post->image)}}" class="mb-2 mr-2" alt="" width="210px">
                            </div>
                            <div>
                                {{$post->description}}
                            </div>
                        </div>
                        <div class="card-content">
                            {!! $post->content !!}
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h3>Bình luận</h3>
                        <form action="#" id="form-comment" class="mb-5">
                            {{ csrf_field() }}
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <input type="hidden" name="user_id" value="{{ Auth::guard('user')->id() }}">
                            <textarea name="content" id="input-comment" class="form-control mb-3" rows="3"></textarea>
                            <button type="submit" id="btn-comment" class="btn btn-info float-right" disabled>Đăng</button>
                        </form>
                        <div class="comment">
                            <ul class="comment-list">
                                @foreach($postComments as $comment)
                                    @if($comment->parent_id == 0)
                                        <li class="comment">
                                            <div class="vcard bio">
                                                <img src="{{ asset($comment->user->avatar) }}" alt="{{ $comment->user->name }}">
                                            </div>
                                            <div class="comment-body">
                                                <h3 class="font-weight-bold comment-name">{{$comment->user->name}}</h3>
                                                <div class="meta">{{$comment->created_at}}</div>
                                                <div class="font-weight-light">
                                                    {{$comment->content}}
                                                </div>
                                                <div class="comment-reply-{{ $comment->id }}">
                                                    <button type="button" data-comment-id="{{ $comment->id }}" data-post-id={{ $post->id }} id="btn-reply" class="border-0 reply">Reply</button>
                                                </div>
                                                @foreach($comment->children as $child)
                                                    <ul class="comment-list comment-children">
                                                        <li class="comment">
                                                            <div class="vcard bio">
                                                                <img src="{{ asset($child->user->avatar) }}" alt="{{ $child->user->name }}">
                                                            </div>
                                                            <div class="comment-body">
                                                                <h3 class="font-weight-bold comment-name">{{$child->user->name}}</h3>
                                                                <div class="meta">{{$child->created_at}}</div>
                                                                <div class="font-weight-light">
                                                                    {{$child->content}}
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                @endforeach

                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            $('#input-comment').keyup(function () {
                $('#btn-comment').removeAttr('disabled');
                if ($(this).val() === '') {
                    $('#btn-comment').attr('disabled', 'disabled');
                }
            });

            $('#form-comment').submit(function (e) {
                e.preventDefault();
                var data = $(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "{{ route('post.comment') }}",
                    data: data,
                    success: function (response) {
                        $('.comment-list').html(response.html);
                        $('.input-comment').val('');
                    }
                });
            });

            $(document).on('click', '#btn-reply', function () {
                var html = '<form action="#" id="form-comment-reply" class="w-75 mb-5 pt-2">';
                var post_id = $(this).attr('data-post-id');
                var comment_id = $(this).attr('data-comment-id');

                html += '{{ csrf_field() }}';
                html += '<input type="hidden" name="post_id" value="' + post_id + '">';
                html += '<input type="hidden" name="parent_id" value="' + comment_id + '">';
                html += '<input type="hidden" name="user_id" value="{{ Auth::guard('user')->id() }}">';
                html += '<textarea name="content" id="input-comment" class="form-control mb-3" rows="3"></textarea>';
                html += '<button type="button"  data-post-id="' + post_id + '" data-comment-id="' + comment_id + '" id="btn-cancel-reply" class="btn btn-default border float-right">Cancel</button>';
                html += '<button type="submit" id="btn-comment" class="btn btn-info float-right mr-1">Đăng</button>';
                html += '</form>';


                $('.comment-reply-' + comment_id).html(html);
            });

            $(document).on('click', '#btn-cancel-reply', function () {
                var comment_id = $(this).attr('data-comment-id');
                var post_id = $(this).attr('data-post-id');
                var html = '<button type="button" data-comment-id="' + comment_id + '" data-post-id="' + post_id + '" id="btn-reply" class="border-0 reply">Reply</button>';
                $('.comment-reply-' + comment_id).html(html);
            });

            $(document).on('submit', '#form-comment-reply', function (e) {
                e.preventDefault();
                var data = $(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "{{ route('post.comment') }}",
                    data: data,
                    success: function (response) {
                        $('.comment-list').html(response.html);
                    }
                });
            })


        })
    </script>
@endpush
