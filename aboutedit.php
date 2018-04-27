<?php

			session_start();
			$user = $_SESSION['name'];

		
			$username = "root";
			$server ="localhost";
			$password="152638";
			$dbname = "myDB";

			$conn = new mysqli($server,$username,$password,$dbname);


			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
			$about = $_POST['about'];


			$statement = "UPDATE regusers SET  about = '$about' WHERE username ='$user'";

			/*$statement = "INSERT INTO ads(province)
			VALUES('$province')";*/

			if($conn->query($statement)== TRUE){
				echo 'sucess';
			}else{
				echo 'nothing';
			}

			$conn->close();

?>