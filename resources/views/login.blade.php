<!DOCTYPE html>
<html lang="en" >
<!-- begin::Head -->
<head>
	<meta charset="utf-8" />
	<title>
		RRR | Login
	</title>
	<meta name="description" content="Latest updates and statistic charts">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--begin::Web font -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!--end::Web font -->
	<!--begin::Base Styles -->
	<link href="{{ asset('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
	<!--end::Base Styles -->
	<link href="{{ asset('assets/demo/default/media/img/logo/favicon.ico') }}" rel="shortcut icon" />
</head>
<!-- end::Head -->
<!-- end::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1" id="m_login" style="background-image: url({{ asset('assets/app/media/img/bg/bg-1.jpg') }});">
			<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
				<div class="m-login__container">
					<div class="m-login__head">
					<style>
						h1 {
						    font-size: 60px;

							}
					</style>
						<h1 class="m-login__title">
							<strong><h1>R R R</h1></strong>
						</h1>
					</div>
					<div class="m-login__signin">
						<div class="m-login__head">
							<h3 class="m-login__title">
								Sign In To Admin
							</h3>
						</div>
						<form id="login-form" class="m-login__form m-form" action="{{ asset('login') }}" method="POST">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="form-group m-form__group">
								<input class="form-control m-input"   type="text" placeholder="Username" name="username" autocomplete="off" value="{{ Request::old('username') }}">
							</div>
							<div class="form-group m-form__group">
								<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
							</div>
							<div class="row m-login__form-sub">
								<div class="col m--align-left m-login__form-left">
									<label class="m-checkbox  m-checkbox--light">
										<input type="checkbox" name="remember">
										Remember me
										<span></span>
									</label>
								</div>
								<div class="col m--align-right m-login__form-right">
									<a href="javascript:;" id="m_login_forget_password" class="m-link">
										Forget Password ?
									</a>
								</div>
							</div>
							<div class="m-login__form-action">
								<button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">
									Sign In
								</button>
							</div>
						</form>
					</div>
					<div class="m-login__forget-password">
						<div class="m-login__head">
							<h3 class="m-login__title">
								Forgotten Password ?
							</h3>
							<div class="m-login__desc">
								Enter your email to reset your password:
							</div>
						</div>
						<form class="m-login__form m-form" action="">
							<div class="form-group m-form__group">
								<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
							</div>
							<div class="m-login__form-action">
								<button id="m_login_forget_password_submit" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
									Request
								</button>
								&nbsp;&nbsp;
								<button id="m_login_forget_password_cancel" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end:: Page -->
	<!--begin::Base Scripts -->
	<script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
	<!--end::Base Scripts -->   
	<!--begin::Page Snippets -->
	<script src="{{ asset('assets/snippets/pages/user/login.js') }}" type="text/javascript"></script>
	<!--end::Page Snippets -->
	@if(Session::has('error'))
	<script type="text/javascript">
		$(document).ready(function(){
			var alert = $('<div class="m-alert m-alert--outline alert alert-danger alert-dismissible" role="alert">\
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>\
				<span></span>\
			</div>');

	        $('#login-form').find('.alert').remove();
	        alert.prependTo($('#login-form'));
	        alert.animateClass('fadeIn animated');
	        alert.find('span').html('{{Session::get('error')}}');
		});
	</script>
	@endif
	@if(count($errors) > 0)
	<script type="text/javascript">
		$(document).ready(function(){
			var alert = $('<div class="m-alert m-alert--outline alert alert-danger alert-dismissible" role="alert">\
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>\
				<span></span>\
			</div>');

	        $('#login-form').find('.alert').remove();
	        alert.prependTo($('#login-form'));
	        alert.animateClass('fadeIn animated');
	        alert.find('span').html('Incorrect username or password. Please try again.');
		});
	</script>
	@endif
</body>
<!-- end::Body -->
</html>
