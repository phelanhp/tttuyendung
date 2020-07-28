@extends('Dashboard::backend.layout.master')
@include('Post::post_category.breadcumb')

@section('content')
    <div id="content-container">
        <div class="btn-group w-100 d-flex justify-content-between">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Quản lý bài đăng</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Danh sách bài đăng</li>
                </ol>

            </nav>
        </div>
        <div class="card">
            <div class="card-header">
                <h4><i class="fa fa-table"></i> Danh sách</h4>
            </div>
            <div class="card-content p-3">
                <table class="table">
                    <thead>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Hình ảnh</th>
                        <th>Thể loại</th>
                        <th>Like/Comment</th>
                        <th style="width: 100px;">Action</th>
                    </thead>
                    <tbody>
                    @foreach($data as $key => $val)
                        <tr>
                            <td>{{ $key+1  }}</td>
                            <td>{{ $val->name  }}</td>
                            <td width="200x"><img src="{{ asset($val->image)  }}" alt="" width="70%"></td>
                            <td width="300x">{{ $val->postCategory->name  }}</td>
                            <td>
                                {{ count($val->postLikes)  }} Thích <br>
                                <a data-toggle="modal" href="#comment-popup" class="comment" post-id="{{ $val->id }}"><span class="count-comment">{{ count($val->postComments)  }}</span> Bình luận </a>
                            </td>
                            <td>
                                <a href="{{ route('post.get.edit',$val->id) }}"><i class="fas fa-edit" style="font-size: 20px; margin-right: 20px"></i></a>
                                <a href="{{ route('post.get.delete',$val->id) }}"><i class="fas fa-trash" style="font-size: 20px"></i></a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>

                <div class="d-flex justify-content-center ">
                    <nav aria-label="Page navigation">
                        <div class="pagination">
                            {!! $data->render() !!}
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </div>
    <div id="comment-popup" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Comment</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th width="200px">Tên người dùng</th>
                            <th width="500px">Nội dung</th>
                            <th width="100px">Trạng thái</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody class="comment-tbody"></tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
<script>
$(document).ready(function () {
    $('.comment').click(function () {
        var post_id = $(this).attr('post-id');
        $.ajax({
            url: '/admin/post/comment-list/'+post_id,
            type: 'GET',
            cache: false,
        }).done(function(response) {
            var html = response.html;
            $('.comment-tbody').html(html);
        });
    });

    $(document).on('click','.comment-delete',function () {
        var comment_id = $(this).attr('comment-id');
        $.ajax({
            url: '/admin/post/comment-delete/'+comment_id,
            type: 'GET',
            cache: false,
        });
        $(this).parents('tr').remove();
    });

    $(document).on('click','.show-comment',function () {
        var comment_id = $(this).attr('data-id');
        var status = $(this).attr('data-status');
        $.ajax({
            url: '/admin/post/show-comment?id='+comment_id+'&status='+status,
            type: 'GET',
            cache: false,
        });
    })
})
</script>
@endpush
