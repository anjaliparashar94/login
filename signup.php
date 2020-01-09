<?php
$message = "";
$error = false;
if( $_SERVER['REQUEST_METHOD'] ==='POST'){
	require "connect1.php";

	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$retype_password = $_POST["retype_password"];
	$dob = $_POST["dob"];
	$address = $_POST["address"];
	$gender = $_POST["gender"];
	$branch = $_POST["branch"];
	$created_at = date( 'Y-m-d h:i:s' );

	if ( $password != $retype_password ) {
		$error = true;
		$message .= "<div class='alert alert-danger'>Password didnot match</div>";
	}

	if ( strlen( $password ) < 8  ) {
		$error = true;
		$message .= "<div class='alert alert-danger'>Password should be more than 8 character.</div>";
	}

	$all_branches = [ 'CSE', 'IT', 'EE' ];

	if ( ! in_array( $branch, $all_branches) ) {
		$error = true;
		$message .= "<div class='alert alert-danger'>Please choose branch in CSE, IT or EE</div>"; 
	}


	if( $error == false ) {
		$sql = "INSERT INTO users(name, email, password, dob, address, gender, branch, created_at) VALUES ('$name', '$email', '$password', '$dob', '$address', '$gender', '$branch', '$created_at')";
		$response = $conn->query( $sql );

		if ( $response ) {
			$message = "<div class='alert alert-success'>Successfully Inserted</div>";
		} else {
			$message = "<div class='alert alert-danger'>Error oin Query </div>";
		}
	}
}



?>

<html>
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h3>Sign Up Form</h3><br>
		<?php echo $message; ?>
		<form action="signup.php" method="POST">
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" placeholder="Name" name="name">
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="email" name="email">
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" placeholder="password" name="password">
			</div>
			<div class="form-group">
				<label for="retype_password">Retype Password:</label>
				<input type="password" class="form-control" id="retype_password" placeholder="retpye password" name="retype_password">
			</div>
			<div class="form-group">
				<label for="dob">DOB</label>
				<input type="date" class="form-control" id="dob" placeholder="DOB" name="dob">
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<textarea class="form-control" id="address" placeholder="Address" name="address"></textarea>
			</div>
			<div class="form-group">
			     <label for="Gender">Gender</label><br>
	      		<div class="radio">
				  	<label><input type="radio" name="gender" value="male" checked="checked">Male</label>
				</div>
				<div class="radio">
				  	<label><input type="radio" name="gender" value="female">Female</label>
				</div>
			</div>
			<div class="form-group">
				<label for="Gender">Branch</label>
				<select name="branch" class="form-control">
					<option value="EE">EE</option>
					<option value="IT">IT</option>
					<option value="CSE">CSE</option>
				</select>
			</div>
			
			<input type="submit" value="Sign up" class="btn btn-success">


	</div>




















	</body>
</html>
