<?php
		session_start();
		require 'debug.php';
		$sucess="";
		if(!isset($_POST['uname']) || !isset($_POST['pass'])){
			//echo "<h1> wrong</h1>";
			die();
		}else if(isset($_POST['uname']) && isset($_POST['pass'])){
			$password = $_POST['pass'];
			//echo $password;
			$user =$_POST['uname'];
			//echo "<h1>'$password','$user'</h1>";
			require 'databaseConnect.php';
			debug_to_console("User name ". $user);
			debug_to_console("password ". $password);

			$sql = "SELECT username, password FROM regUsers WHERE username = '$user' AND password = '$password'";
			$result = $conn->query($sql);

		if(isset($result->num_rows)){
				$row = $result->fetch_assoc();
				$_SESSION['name'] = $user;
				//$_SESSION['adminA'] = $row['admin'];
				$sucess ="yay";
				$sucess = trim($sucess," ");
				

			}else{

				
				$sucess ="nay";
				$sucess = trim($sucess," ");
				
				
			}
			echo $sucess;
			$conn->close();	

		}
		

?>