<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
    <div class="sidebar-box">
        <form method="get" action="{{route('get.recruiter_company.search')}}" class="search-form">
            <div class="form-group">
                <span><button type="submit" class="btn border-0 bg-transparent"><i style="top: 65%;" class="fa fa-search"></i></button></span>
                <input type="text" name="key_search"class="form-control" placeholder="Tìm kiếm tên doanh nghiệp">
            </div>
        </form>
    </div>
    <div class="sidebar-box ftco-animate">
        <div class="categories">
            <h3>Lĩnh Vực Tuyển Dụng</h3>
            @foreach($recruiterCategorys as $recruiterCategory)
            <li><a href="{{ route('get.recruiter_by_category.search',$recruiterCategory->id) }}">{{$recruiterCategory->name}} <span class="ion-ios-arrow-forward"></span></a></li>
            @endforeach
        </div>
    </div>
    <div class="sidebar-box ftco-animate">
        <h3>Tin tuyển dụng gần đây</h3>
        @foreach($posts as $key => $post)

        <div class="block-21 mb-4 d-flex">
            <a href="{{ route('get.news.detail',$post->id) }}" class="block-20 rounded" style="background-image: url({{ asset($post->image) }});">
            <div class="text">
                    <a href="z">{{$post->name}}</a>
                <div class="meta">
                    <?php $date = date_create($post->created_at); ?>
                    <div><a href="#">{{ date_format($date,'d-m-Y') }}</a></div>
                    <div><a href="#">{{ $post->user->name }}</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
            </div>
        </div>
                @if($key == 2)
                        @break;
                @endif
        @endforeach
    </div>
</div>