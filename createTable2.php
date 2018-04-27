<?php

$servername = "localhost";
$username = "root";
$password = "152638";
$db = "myDB";

// Create connection
$conn = new mysqli($servername, $username,$password,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




$sql ="CREATE TABLE ads(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
price DOUBLE(16,4) NOT NULL,
createDate DATE NOT NULL,
model VARCHAR(30) NOT NULL,
type VARCHAR(30) NOT NULL,
name VARCHAR(30) NOT NULL,
province VARCHAR(30) NOT NULL,
age INT NOT NULL,
images_path VARCHAR(200) NOT NULL,
submission_date DATE)
";
if($conn->query($sql) === TRUE){
	echo "Table created";
}else{
	echo "error creating table: ".$conn->error;
}

$conn->close();

?>