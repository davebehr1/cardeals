<?php 
			$username = "root";
			$server ="localhost";
			$password2="152638";
			$dbname = "myDB";

			$conn = new mysqli($server,$username,$password2,$dbname);


			if ($conn->connect_error) {
				
			    die("Connection failed: " . $conn->connect_error);

			} 
?>