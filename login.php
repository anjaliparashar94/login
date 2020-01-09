<html>
<head>
	<title>Login Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<style type="text/css">
		body{
			background-color: #e4eaeb;
		}
		.hr{
			margin-bottom: -11px;
			margin-top: -11px;
			text-align: center;
		}
		.center{
			text-align: center;
		}
		.t{
			width: 20%;
		    padding: 0px 60px;
		}
	</style>
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6">

				<h2>Log in to your account</h2>
				<form action="login.php" method="post">
					<div class="form-group">
						<label for="user_name">User Nmae:</label>
						<input type="text" class="form-control" id="user_name" placeholder="Enter Name" name="user_name">
					</div>
					<div class="form-group">
						<label for="Password">Password:</label>
						<input type="password" class="form-control" id="password" placeholder="Password" name="password">
					</div>
					<p>By continuing, you agree to our
						<a href="#" target="_blank">Terms of Services.</a>
					</p>
					<div class="form-group">
						<input type="submit" class="btn btn-success" name="login">
					</div>
				</form>
				<div class="row">
					<hr class="t">
					OR
					<hr class="t">
				</div>

				<div class="center">
					<a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="btn btn-info" role="button">Continue with Google</a>
				</div>
				<hr>
				<div class="center">
					<a href="signup.php" target="_blank">Create a new account</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>