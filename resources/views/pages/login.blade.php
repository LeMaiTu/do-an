<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng Nhập</title>
    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 	<title>@yield('title', config('app.name', 'Đăng Nhập'))</title>
    <link href="{{ asset('css/bootstrap/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datapicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Đăng Nhập</div>
				<div class="panel-body">
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
							<div class=" form-group">
								<button type="submit" href="" class="btn-block btn btn-info center-block">Login</button>
							</div>
{{--							<a href="#" >Forgot password?</a>--}}
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
</body>
</html>
