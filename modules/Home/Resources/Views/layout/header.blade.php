<header>
    <div class="wrap">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col d-flex justify-content-end">
                    @if(Auth::guard('user')->check())
                    <div class="btn-group social-media btn-dangxuat" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class='fas fa-user-tie'></i>
                            Cá nhân
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="{{ route('get.recruiter-profile.profile') }}">Profile</a>
                            <a class="dropdown-item" href="{{ route('get.news-manager.list') }}">Quản Lý Tin Tuyển Dụng</a>
                            <a href="{{ route('get.logout.index') }}" class="dropdown-item">Đăng Xuất</a>
                        </div>
                    </div>
                    @endif
                    <div class="btn-group social-media btn-dangxuat" role="group" aria-label="Basic example">
                        @if(!Auth::guard('user')->check())
                            <a href="{{ route('get.login.index') }}" class="btn btn-primary">Đăng Nhập</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Start<span>work</span></a>
            <form action="#" class="searchform order-sm-start order-lg-last">
                <div class="form-group d-flex">
                    <input type="text" class="form-control pl-3" placeholder="Tìm kiếm">
                    <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span>
                    </button>
                </div>
            </form>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active"><a href="{{ route('get.home.index') }}" class="nav-link">Trang Chủ</a>
                    </li>
                    <!-- <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li> -->
                    <li class="nav-item">
                        <a href="{{ route('get.recruiter.index') }}" class="nav-link">Nhà Tuyển Dụng</a></li>
                    <li class="nav-item"><a href="{{ route('get.news.index') }}" class="nav-link">Tin Tuyển Dụng</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('get.contact.index') }}" class="nav-link">Liên Hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
