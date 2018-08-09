<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin Login </title>

	<link rel="stylesheet" href="{{URL::to('lib/bootstrap/css/bootstrap.min.css')}}">
	<!-- Custom Theme Style -->
	<link href="{{URL::to('/css/admin.css')}}" rel="stylesheet">

</head>

<body class="login">
<div>
	<a class="hiddenanchor" id="signup"></a>
	<a class="hiddenanchor" id="signin"></a>

	<div class="login_wrapper">
		<div class="animate form login_form">
			<section class="login_content">
				<form method="post" action="{{route('admin-auth')}}">
					<h1>Login</h1>
					{{csrf_field()}}
					<div>
						<input type="text" class="form-control" name="email" placeholder="Email address"/>
					</div>
					<div>
						<input name="password" type="password" class="form-control" placeholder="Password"/>
					</div>
					<div>
						<label style="cursor: pointer" class="pull-left" for="remember"><input value="remember"
																							   type="checkbox"
																							   id="remember"
																							   name="remember"> Remember
							Me</label>
					</div>
					<div>

						<button type="submit" class="btn btn-default submit pull-right" href="index.html">Log in
						</button>
					</div>

					<div class="clearfix"></div>

					<div class="separator">

						<div class="clearfix"></div>
						<br/>

						<div>
							<h1><i class="fa fa-paw"></i> ITN Project!</h1>
							<p>©2016 All Rights Reserved. Itn terms and conditions</p>
						</div>
					</div>
				</form>
			</section>
		</div>

		<div id="register" class="animate form registration_form">
			<section class="login_content">
				<form>
					<h1>Create Account</h1>
					<div>
						<input type="text" class="form-control" placeholder="Username" required=""/>
					</div>
					<div>
						<input type="email" class="form-control" placeholder="Email" required=""/>
					</div>
					<div>
						<input type="password" class="form-control" placeholder="Password" required=""/>
					</div>
					<div>
						<a class="btn btn-default submit" href="index.html">Submit</a>
					</div>

					<div class="clearfix"></div>

					<div class="separator">
						<p class="change_link">Already a member ?
							<a href="#signin" class="to_register"> Log in </a>
						</p>

						<div class="clearfix"></div>
						<br/>

						<div>
							<h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
							<p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and
								Terms</p>
						</div>
					</div>
				</form>
			</section>
		</div>
	</div>
</div>
</body>
</html>
