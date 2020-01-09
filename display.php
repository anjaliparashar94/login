<!DOCTYPE html>
<html>
<head>
	<title>Display All</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		require "connect.php";

		$sql = "select * from student_details";
		
		$result = $conn->query( $sql );
	?>
	<div class="container">
		<table class="table table-condensed">
			<tr>
				<th> ID </th>
				<th> Name</th>
				<th> Email</th>
				<th> Branch</th>
				<th> Address</th>
				<th> DOB</th>
				<th> Pno</th>
				<th> EDIT</th>
				<th> Delete</th>
			</tr>

			<?php
				while( $row = $result->fetch_assoc() ) {
					echo "<tr>";
					echo "<td>".$row["id"]."</td>";
					echo "<td>".$row["name"]."</td>";
					echo "<td>".$row["email"]."</td>";
					echo "<td>".$row["branch"]."</td>";
					echo "<td>".$row["address"]."</td>";
					echo "<td>".$row["dob"]."</td>";
					echo "<td>".$row["pno"]."</td>";
					echo "<td><a class='btn btn-warning' href='edit.php?id=".$row["id"]."'>Edit</a></td>";
					echo "<td><a class='btn btn-danger' href='delete.php?id=".$row["id"]."'>Delete</a></td>";
					echo "</tr>";
				}
			?>
		</table>
	</div>
</body>
</html>