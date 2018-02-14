<?php 
			$username = "root";
			$server ="localhost";
			$password2="";
			$dbname = "mydb";

			$conn = new mysqli($server,$username,$password2,$dbname);


			if ($conn->connect_error) {
				
			    die("Connection failed: " . $conn->connect_error);

			} 
?>