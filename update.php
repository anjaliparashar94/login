<?php

require "connect.php";

$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$branch = $_POST["branch"];
$address = $_POST["address"];
$dob = $_POST["dob"];
$pno = $_POST["pno"];

$sql = "update student_details set name = '$name', email = '$email', branch = '$branch', address = '$address', dob = '$dob', pno = '$pno' where id = '$id'" ;

$r = $conn->query( $sql );
if ( $r == true ){
	echo " recood updated <br>";
	echo "<a href='form.php'> Insert New</a><br>";
	echo "<a href='display.php'> Display All</a>";
} else {
	echo "Error : ". $conn->error;
}

?>

