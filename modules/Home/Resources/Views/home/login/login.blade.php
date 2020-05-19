
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>WorkWise Html Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/ngan.css">
</head>
<body>

	<div class="wrapper">
		
		<header>
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="index.html" title=""><img src="images/logo.png" alt=""></a>
					</div><!--logo end-->
					<div class="search-bar">
					</div><!--search-bar end-->
					<nav>
						<ul>
							<li>
								<a href="companies.html" title="">
									<span><img src="images/icon2.png" alt=""></span>
									CHUYÊN GIA
								</a>
							</li>
							<li>
								<a href="projects.html" title="">
									<span><img src="images/icon3.png" alt=""></span>
									NGƯỜI NỖI TIẾNG
								</a>
							</li>
							<li>
								<a href="projects.html" title="">
									<span><img src="images/icon3.png" alt=""></span>
									BẠN BÈ
								</a>
							</li>
							<li>
								<a href="profiles.html" title="">
									<span><img src="images/icon4.png" alt=""></span>
									SỰ KIỆN
								</a>
							</li>
							<li>
								<a href="jobs.html" title="">
									<span><img src="images/icon5.png" alt=""></span>
									TỪ THIỆN
								</a>
							</li>
							<li>
								<a href="#" title="" >
									<span><img src="images/icon6.png" alt=""></span>
									KIẾN THỨC
								</a>
							</li>
							<li>
								<a href="#" title="" >
									<span><img src="images/icon7.png" alt=""></span>
									LIÊN HỆ
								</a>
							</li>
						</ul>
					</nav><!--nav end-->
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
				</div><!--header-data end-->
			</div>
		</header><!--header end-->

		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						<div class="col-lg-6">
							<div class="cmp-info">
								<div class="cm-logo">
									<img src="images/cm-logo.png" alt="">
								</div><!--cm-logo end-->	
								<img src="images/cm-main-img.png" alt="">			
							</div><!--cmp-info end-->
						</div>
						<div class="col-lg-6">
							<div class="login-sec">
								<ul class="sign-control">
									<li data-tab="tab-1" class="current"><a href="#" title="">ĐĂNG NHẬP</a></li>				
									<li data-tab="tab-2"><a href="#" title="">ĐĂNG KÝ</a></li>				
								</ul>			
								<div class="sign_in_sec current" id="tab-1">
									
									<h3>Tài khoản</h3>
									<form>
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="title-login">Số điện thoại</div>
												<div class="sn-field">
													<input type="text" name="numberphone" placeholder="Số điện thoại">
													<i class="la la-phone"></i>
												</div><!--sn-field end-->
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="title-login">Mật khẩu</div>
												<div class="sn-field">
													<input type="password" name="password" placeholder="Mật khẩu">
													<i class="la la-lock"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd" style="text-align: center; margin: 10px;">
												<button type="submit" value="submit">Đăng nhập</button>
											</div>
										</div>
									</form>
									<div class="forget-pass">
										
										<ul class="">
											<li><a href="#" title="" >Quên mật khẩu?</a></li>
										</ul>
									</div><!--login-resources end-->
								</div><!--sign_in_sec end-->
								<div class="sign_in_sec" id="tab-2">
									<div class="dff-tab current" id="tab-3">
										<form>
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class=" box-choice">
														<img src="images/line-2.png" style="width: 25px; height: 1px;" >
														<span>Số điện thoại người giới thiệu</span>
														<img src="images/line-2.png" style="width: 25px; height: 1px;" >
													</div>
													<div class="sn-field">
														<input type="text" name="phone" placeholder="Số điện thoại">
													</div>
												</div>
												
												<div class="col-lg-12 no-pdd">
													<div class=" box-choice">
														<img src="images/line-2.png" style="width: 65px; height: 1px;" >
														<span>Hoặc đăng ký với</span>
														<img src="images/line-2.png" style="width: 65px; height: 1px;" >
													</div>
													<select class="browser-default custom-select form-control" style="width: 60px;padding-left: 0!important;float: left; margin: 5px;">
																  <option >VN</option>
																  <option value="1">One</option>
																  <option value="2">Two</option>
																  <option value="3">Three</option>
														</select>
													<div class="sn-field" style="width: 190px; margin: 5px;">
														<input type="text" name="numberphone" placeholder="Số điện thoại" >
														<i class="la la-phone"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="email" placeholder="Email">
														<i class="fa fa-envelope"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
													<input type="password" name="password" placeholder="Mật khẩu">
													<i class="la la-lock"></i>
												</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="repeat-password" placeholder="Nhập lại mật khảu">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="col-lg-12" style="text-align: center;">
														<button type="button" data-toggle="modal" data-target="#basicExampleModal">Đăng ký</button> <br>
													<br>
														<small style="padding-top: 10px;">Bạn đã đồng ý với các chính sách bảo mật khi đã đăng ký</small>
													</div>
													
												</div>
											</div>
										</form>
									</div><!--dff-tab end-->
									<div class="dff-tab" id="tab-4">
										<form>

											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="company-name" placeholder="Company Name">
														<i class="la la-building"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="country" placeholder="Country">
														<i class="la la-globe"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="password" placeholder="Password">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="repeat-password" placeholder="Repeat Password">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" name="cc" id="c3">
															<label for="c3">
																<span></span>
															</label>
															<small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
														</div><!--fgt-sec end-->
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">Get Started</button>
												</div>
											</div>
										</form>
									</div><!--dff-tab end-->
								</div>		
							</div><!--login-sec end-->
						</div>
					</div>		
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->
		</div><!--sign-in-page end-->
		<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Xác thực</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body box-choice ">
       <span>Nhập mật mã xác thực từ SMS:</span>
       	<p>+8497999999</p>
       	<div class="col-lg-12">
       		<input type="text">
       		<input type="text">
       		<input type="text">
       		<input type="text">
       		<input type="text">
       		<input type="text">
       	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" style="background: #e44d3a!important;" >Gởi lại</button>
        <button type="button" class="btn" style="background: #e44d3a!important;">Tiếp tục</button>
      </div>
    </div>
  </div>
</div>
  </div>
		<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<p><img src="images/copy-icon2.png" alt="">Copyright 2018</p>
					<img class="fl-rgt" src="images/logo2.png" alt="">
				</div>
			</div>
		</footer><!--footer end-->
		
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/flatpickr.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script>$(document).ready(function() {
        $('#checkhere').click(function() {
                $('.menu').toggle("slide");
                $('#checkhere').toggle('heddin');
                $('#checkup').toggle("slide");
        });
        $('#checkup').click(function(){
        		$('.menu').toggle("heddin");
                $('#checkhere').toggle('slide');
                $('#checkup').toggle("heddin");
        });
        $(window).scroll(function() {
    	if ($(this).scrollTop()) {
        	$('#back-to-top').fadeIn();
    	} else {
        	$('#back-to-top').fadeOut();
    	}
		});
        $("#back-to-top").click(function(){return $("body, html").animate({scrollTop:0},400),!1});
$(function(){$('[data-toggle="tooltip"]').tooltip()});
    });
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>
</body>
</html>