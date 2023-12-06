@extends('layout.master')



@section('title' , 'Contact')
    

@section('body')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <style>
#loginbody {
    padding-top: 90px;
	background-color: black;
	margin-top: 3rem;
}
.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #f36100;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #f36100;
	border-color: #f36100;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #f36100;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #f36100;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #f36100;
	border-color: #f36100;
}


    </style>
</head>
<body id="loginbody">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						@if (\Session::has('success'))
							<div class="alert alert-success " id="success-alert">
								<p>{{ \Session::get('success') }}</p>

								<script>
									var milliseconds = 4000;
									setTimeout(function () {
									document.getElementById('success-alert').remove();
									}, milliseconds);
									</script>
				 
							</div>
			
						@endif
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="{{ route('userlogin') }}" method="post" role="form"  style="display: block;">
									@csrf
									<div class="form-group">
										<input type="text" name="email" required id="username" tabindex="1" class="form-control" placeholder="Email" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" required id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Show password </label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>

								@if ($errors->has('fname') )
								<p class="alert alert-danger ">{{ $errors->first('fname') }}</p>
							@endif
								@if ($errors->has('lname') )
								<p class="alert alert-danger ">{{ $errors->first('lname') }}</p>
							@endif
							@if ($errors->has('email') )
								<p class="alert alert-danger ">{{ $errors->first('email') }}</p>
							@endif
							@if ($errors->has('phone') )
								<p class="alert alert-danger ">{{ $errors->first('phone') }}</p>
							@endif
								@if ($errors->has('password') )
								<p class="alert alert-danger ">{{ $errors->first('password') }}</p>
							@endif
							@if ($errors->has('confirm-password') )
								<p class="alert alert-danger ">{{ $errors->first('confirm-password') }}</p>
							@endif
							@if ($errors->has('photo') )
								<p class="alert alert-danger ">{{ $errors->first('photo') }}</p>
							@endif
							   
							
						
								<form id="register-form" action="{{ route('store') }}" method="post" enctype="multipart/form-data" role="form" style="display: none; ">
									@csrf
									 <div class="form-group">
										<input type="text" name="fname" required id="username" tabindex="1" class="form-control" placeholder="First name" value="">
									</div>
                                    <div class="form-group">
										<input type="text" name="lname" required id="username" tabindex="1" class="form-control" placeholder="Last nsme" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" required id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
                                    <div class="form-group">
										<input type="number" name="phone" required id="email" tabindex="1" class="form-control" placeholder="Phone" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" required id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm_password" required id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div> 
									<div class="form-group">

										<label for="photo">Your photo</label>


										<input type="file" name="photo" tabindex="2" class="form-control">
									</div>
									<div class="form-group">



										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    

    <script>
        $(function() {

$('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
     $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});
$('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
     $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});

});


  const checkbox = document.getElementById("remember");
  const passwordField = document.getElementById("password");

  checkbox.addEventListener("change", function () {
    if (checkbox.checked) {
      passwordField.type = "text";
    } else {
      passwordField.type = "password";
    }
  });


    </script>
</body>
</html>


@endsection