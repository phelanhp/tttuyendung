@foreach($postComments as $comment)
    @if($comment->parent_id == 0  && $comment->status == 1)
        <li class="comment">
            <div class="vcard bio">
                <img src="{{ asset($comment->user->avatar) }}" alt="{{ $comment->user->name }}">
            </div>
            <div class="comment-body">
                @if($comment->user->group->key == 'sinh-vien')
                <a href="{{ route('get.student.profile',$comment->user->id) }}"><h3 class="font-weight-bold comment-name">{{$comment->user->name}}</h3></a>
                @else
                <a href="{{ route('get.recruiter.detail',$comment->user->recruiter->id) }}"><h3 class="font-weight-bold comment-name">{{$comment->user->name}}</h3></a>
                @endif
                <div class="meta">{{$comment->created_at}}</div>
                <div class="font-weight-light">
                    {{$comment->content}}
                </div>
                <div class="comment-reply-{{ $comment->id }}">
                    <button type="button" data-comment-id="{{ $comment->id }}" data-post-id={{ $comment->post_id }} id="btn-reply" class="border-0 reply">Reply</button>
                </div>
                @foreach($comment->children as $child)
                    @if($child->status == 1)
                    <ul class="comment-list comment-children">
                        <li class="comment">
                        <div class="vcard bio">
                            <img src="{{ asset($child->user->avatar) }}" alt="{{ $child->user->name }}">
                        </div>
                        <div class="comment-body">
                            @if($child->user->group->key == 'sinh-vien')
                            <a href="{{ route('get.student.profile',$child->user->id) }}"><h3 class="font-weight-bold comment-name">{{$child->user->name}}</h3></a>
                            @else
                            <a href="{{ route('get.recruiter.detail',$child->user->recruiter->id) }}"><h3 class="font-weight-bold comment-name">{{$child->user->name}}</h3></a>
                            @endif
                            <div class="meta">{{$child->created_at}}</div>
                            <div class="font-weight-light">
                                {{$child->content}}
                            </div>
                        </div>
                        </li>
                    </ul>
                    @endif
                @endforeach
            </div>
        </li>
    @endif
@endforeach
