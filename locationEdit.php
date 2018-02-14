<?php

			session_start();
			$user = $_SESSION['name'];

		
			$username = "root";
			$server ="localhost";
			//$password="xeomaiti";
			$dbname = "mydb";

			$conn = new mysqli($server,$username,'',$dbname);


			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
			$location = $_POST['location'];


			$statement = "UPDATE regusers SET  location = '$location' WHERE username ='$user'";

			/*$statement = "INSERT INTO ads(province)
			VALUES('$province')";*/

			if($conn->query($statement)== TRUE){
				echo 'sucess';
			}else{
				echo 'nothing';
			}

			$conn->close();

?>