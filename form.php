<?php
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	require "connect.php";

	$name = $_POST["name"];
	$email = $_POST["email"];
	$branch = $_POST["branch"];
	$address = $_POST["address"];
	$dob = $_POST["dob"];
	$pno = $_POST["pno"];

	$sql = "INSERT INTO student_details(name, email, branch, address, dob, pno ) VALUES ('$name', '$email', '$branch', '$address', '$dob', '$pno')";

	$r = $conn->query( $sql );

	if ( $r ) {
		$message = "<div class='alert alert-success'>Inserted Successfully</div>";
	} else {
		$message = "<div class='alert alert-danger'>Something Went Wrong</div>";
	}
}
?>

<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<h2>Student Form</h2>
				<?php echo $message; ?>
				<form action="form.php" method="POST">
					<label>Name:</label>
					<input type="text" name="name" class="form-control">
					
					<label>Email:</label>
					<input type="email" name="email" class="form-control">
					
					<label>branch:</label>
					<select name="branch" class="form-control">
						<option value="EE">EE</option>
						<option value="CSE">CSE</option>
						<option value="MECH">MECH</option>
						<option value="IT">IT</option>
					</select>

					<label>Address:</label>
					<input type="text" name="address" class="form-control">
					
					<label>DOB:</label>
					<input type="date" name="dob" class="form-control">
					
					<label>P.no</label>
			        <input type="number" name="pno" class="form-control">
			        <br />
			        <input type="submit" value="Submit" class="btn btn-success">

				</form>
			</div>
		</div>
	</div>


	<button class="btn btn-primary">Primary</button>
	<button class="btn btn-info">info</button>
	<button class="btn btn-success">Success</button>
	<button class="btn btn-danger">Danger</button>
	<button class="btn btn-active">Active</button> 
	<button class="btn btn-warning">Warning</button>

</body>
</html>