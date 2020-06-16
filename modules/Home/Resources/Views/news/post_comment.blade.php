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
                    <button type="button" data-comment-id="{{ $comment->id }}" data-post-id={{ $comment->post_id }} id="btn-reply" class="border-0 reply">Reply</button>
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
