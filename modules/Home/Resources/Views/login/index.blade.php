@extends('Home::login.master')

@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
                @if (session('success'))
                    <div class="alert alert-info notification center">{{session('success')}}</div>
                @elseif (session('danger'))
                    <div class="alert alert-danger notification center">{{session('danger')}}</div>
                @endif
				<form class="login100-form validate-form flex-sb flex-w" action="" method="post">
                    {{ csrf_field() }}
					<span class="login100-form-title p-b-51">
						Đăng Nhập
					</span>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Tài khoản">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
					</div>
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
							<label class="label-checkbox100" for="ckb1">
								Remember
							</label>
						</div>
						<div>
							<a href="#" class="txt1">
								Forgot?
							</a>
						</div>
					</div>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Đăng Nhập
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
@endsection
