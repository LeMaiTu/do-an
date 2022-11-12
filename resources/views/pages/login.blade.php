<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng Nhập</title>

 	<title>@yield('title', config('app.name', 'Đăng Nhập'))</title>
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/datapicker.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Đăng Nhập</div>
				<div class="panel-body">
<<<<<<< HEAD
					<form role="form" method="POST" action="">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="User name" name="userName" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="passWord" type="password" required>
							</div>
							<div class="form-group">
								<div class="checkbox-inline">
									<label for="admin">
										<input type="radio" id="admin" class="form-check-input" value="admin" name="loaiCB" checked> Admin
									</label>
								</div>
								<div class="checkbox-inline">
									<label for="cbHoSo">
										<input type="radio" id="cbHoSo" class="form-check-input" value="cbhoso" name="loaiCB"> CB Hồ Sơ
									</label>
								</div>
								<div class="checkbox-inline">
									<label for="cbKho">
										<input type="radio" id="cbKho" class="form-check-input" value="cbkho" name="loaiCB"> CB Kho
									</label>
								</div>
							</div>
=======
					<form role="form" method="POST" action="{{ route('admins.login') }}">
                        @csrf
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="User name" name="account" autofocus="" required>
                                @if ($errors->first('account'))
                                    <span class="error mt-2 text-danger" for="login_id">
                                {{ $errors->first('account') }}
                            </span>
                                @endif
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" required>
                                @if ($errors->first('password'))
                                    <span class="error mt-2 text-danger" for="login_id">
                                {{ $errors->first('password') }}
                            </span>
                                @endif
							</div>
{{--							<div class="form-group">--}}
{{--								<div class="checkbox-inline">--}}
{{--									<label for="admin">--}}
{{--										<input type="radio" id="admin" class="form-check-input" value="admin" name="loaiCB" checked> Admin--}}
{{--									</label>--}}
{{--								</div>--}}
{{--								<div class="checkbox-inline">--}}
{{--									<label for="cbHoSo">--}}
{{--										<input type="radio" id="cbHoSo" class="form-check-input" value="cbhoso" name="loaiCB"> CB Hồ Sơ--}}
{{--									</label>--}}
{{--								</div>--}}
{{--								<div class="checkbox-inline">--}}
{{--									<label for="cbKho">--}}
{{--										<input type="radio" id="cbKho" class="form-check-input" value="cbkho" name="loaiCB"> CB Kho--}}
{{--									</label>--}}
{{--								</div>--}}
{{--							</div>--}}
>>>>>>> ee85335e6a752fbb55183dc6deb45b762f031226
							<div class=" form-group">
								<button type="submit" href="" class="btn-block btn btn-info center-block">Login</button>
							</div>
							<a href="#" >Forgot password?</a>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
<<<<<<< HEAD
	
</body>
</html>
=======

</body>
</html>
>>>>>>> ee85335e6a752fbb55183dc6deb45b762f031226
