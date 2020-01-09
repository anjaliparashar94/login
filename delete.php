<?php


$id = $_GET["id"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student1";

// Create connection
$conn = new mysqli( $servername, $username, $password, $dbname );

$sql = "DELETE from student_details WHERE id=$id";

$r = $conn->query( $sql );


if ( $r == true ){
	echo " recood deleted <br>";
	echo "<a href='index.html'> Insert New</a><br>";
	echo "<a href='display.php'> Display All</a>";
} else {
	echo "Error : ". $conn->error;
}