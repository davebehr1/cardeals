<?php

$servername = "localhost";
$username = "root";
$password = "password";
$db = "mydb";

// Create connection
$conn = new mysqli($servername, $username,'',$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




$sql = "CREATE TABLE regUsers(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fullname VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(30) NOT NULL)
";

if($conn->query($sql) === TRUE){
	echo "Table created";
}else{
	echo "error creating table: ".$conn->error;
}


$conn->close();

?>