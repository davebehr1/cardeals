<?php

$servername = "localhost";
$username = "root";
$password = "152638";

// Create connection
$conn = new mysqli($servername, $username,$password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
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