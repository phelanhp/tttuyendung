<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
    <div class="sidebar-box">
        <form action="#" class="search-form">
            <div class="form-group">
                <span class="fa fa-search"></span>
                <input type="text" class="form-control" placeholder="Tìm kiếm tên doanh nghiệp">
            </div>
        </form>
    </div>
    <div class="sidebar-box ftco-animate">
        <div class="categories">
            <h3>Lĩnh vực</h3>
            <li><a href="#">Công nghệ <span class="ion-ios-arrow-forward"></span></a></li>
            <li><a href="#">Kỹ thuật <span class="ion-ios-arrow-forward"></span></a></li>
            <li><a href="#">Xã hội &amp; Cộng đồng <span class="ion-ios-arrow-forward"></span></a></li>
            <li><a href="#">Việc bán thời gian <span class="ion-ios-arrow-forward"></span></a></li>
        </div>
    </div>
    <div class="sidebar-box ftco-animate">
        <h3>Tin tuyển dụng gần đây</h3>
        @foreach($posts as $post)
        <div class="block-21 mb-4 d-flex">
            <a href="{{ route('get.news.detail',$post->id) }}" class="block-20 rounded" style="background-image: url({{ asset($post->image) }});">
            <div class="text">
                    <a href="#">Even the all-powerful Pointing has no control about the blind texts</a>
                <div class="meta">
                    <?php $date = date_create($post->created_at); ?>
                    <div><a href="#">{{ date_format($date,'d-m-Y') }}</a></div>
                    <div><a href="#">{{ $post->user->name }}</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                
            </div>
        </div>
        @endforeach
    </div>
        <div class="sidebar-box ftco-animate">
        <h3>Tag Cloud</h3>
        <div class="tagcloud">
            <a href="#" class="tag-cloud-link">home</a>
            <a href="#" class="tag-cloud-link">builder</a>
            <a href="#" class="tag-cloud-link">build</a>
            <a href="#" class="tag-cloud-link">create</a>
            <a href="#" class="tag-cloud-link">make</a>
            <a href="#" class="tag-cloud-link">construction</a>
            <a href="#" class="tag-cloud-link">house</a>
            <a href="#" class="tag-cloud-link">architect</a>
        </div>
    </div>
</div>