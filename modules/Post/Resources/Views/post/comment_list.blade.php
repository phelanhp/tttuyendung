@foreach($comments as $comment)
    <tr>
        <td>{{ $comment->user->name }}</td>
        <td>{{ $comment->content }}</td>
        <td>
            <input type="checkbox" class="show-comment" data-id="{{ $comment->id }}" data-status="{{ $comment->status }}" @if($comment->status == 1) checked @endif>
            Hiện
        </td>
        <td>
            <a href="javascript:" class="comment-delete" comment-id="{{ $comment->id }}"><i class="fas fa-trash" style="font-size: 20px; margin-right: 20px"></i></a>
        </td>
    </tr>
@endforeach
