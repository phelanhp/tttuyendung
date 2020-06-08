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
                            <a class="blog-img mr-4" style="background-image: url({{ asset($post->image) }});"></a>
                            <div class="text">
                                <h3 class="heading">
                                    <a href="#">{{ $post->name }}</a>
                                </h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Jan. 30, 2020</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
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