<?php
$message = "";
require "connect.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	

	$id = $_POST["id"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$branch = $_POST["branch"];
	$address = $_POST["address"];
	$dob = $_POST["dob"];
	$pno = $_POST["pno"];

	$sql = "update student_details set name = '$name', email = '$email', branch = '$branch', address = '$address', dob = '$dob', pno = '$pno' where id = '$id'" ;

	$r = $conn->query( $sql );

	if ( $r ) {
		$message = "<div class='alert alert-success'>Updated Successfully</div>";
	} else {
		$message = "<div class='alert alert-danger'>Something Went Wrong</div>";
	}
}

$id = $_GET["id"];
$sql = "select * from student_details where id=$id";
	
$result = $conn->query( $sql );

while( $row = $result->fetch_assoc() ) {
	$id = $row["id"];
	$name = $row["name"];
	$email = $row["email"];
	$branch = $row["branch"];
	$address = $row["address"];
	$dob = $row["dob"];
	$pno = $row["pno"];
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
				<form action='<?php echo "edit.php?id=$id"; ?>' method="POST">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<label>Name:</label>
					<input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
					
					<label>Email:</label>
					<input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
					
					<label>branch:</label>
					<select name="branch" class="form-control">
						<option value="EE" <?php if ( $branch == "EE" ) echo "selected='selected'"; ?> >EE</option>
						<option value="CSE" <?php if ( $branch == "CSE" ) echo "selected='selected'"; ?> >CSE</option>
						<option value="MECH" <?php if ( $branch == "MECH" ) echo "selected='selected'"; ?> >MECH</option>
						<option value="IT" <?php if ( $branch == "IT" ) echo "selected='selected'"; ?> >IT</option>
					</select>

					<label>Address:</label>
					<input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
					
					<label>DOB:</label>
					<input type="date" name="dob" class="form-control" value="<?php echo $dob; ?>">
					
					<label>P.no</label>
			        <input type="number" name="pno" class="form-control" value="<?php echo $pno; ?>">
			        <br />
			        <input type="submit" value="Update" class="btn btn-success">

				</form>
			</div>
		</div>
	</div>
</body>
</html>