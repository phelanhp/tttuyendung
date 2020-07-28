<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

    <title>Login Admin</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">
	<meta name="author" content="" />

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,800italic,400,600,800" type="text/css">
	<link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('backend/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('backend/css/App.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('backend/css/Login.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}" type="text/css" />

</head>

<body>
<div id="login-container">
	<div id="login">
	<h1 class="text-center">
		<a class="logo text-center" href="/">
			Start<span>work</span>
		</a>
	</h1>
		@if (session('success'))
            <div class="alert alert-info notification center">{{session('success')}}</div>
        @elseif (session('danger'))
            <div class="alert alert-danger notification center">{{session('danger')}}</div>
        @endif
		<form id="login-form" action="{{ route('post.login') }}" method="post" class="form">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="login-username">Tài khoản</label>
				<input type="text" class="form-control" name="username" id="login-username" placeholder="Tài khoản">
			</div>

			<div class="form-group">
				<label for="login-password">Mật khẩu</label>
				<input type="password" class="form-control" name="password" id="login-password" placeholder="Mật khẩu">
			</div>

			<div class="form-group">

				<button type="submit" id="login-btn" class="btn btn-primary btn-block">Đăng Nhập &nbsp; <i class="fa fa-play-circle"></i></button>

			</div>
		</form>

	</div> <!-- /#login -->



</div> <!-- /#login-container -->

<script src="{{ asset('backend/js/libs/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/bootstrap.min.js') }}"></script>

<script src="{{ asset('backend/js/App.js') }}"></script>

<script src="{{ asset('backend/js/Login.js') }}"></script>

</body>
</html>
