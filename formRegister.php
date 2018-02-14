<?php
session_start();

$sucess = "";
if(empty($_POST['fname']) || empty($_POST['email1']) || empty($_POST['pass1']) || empty($_POST['user'])){
			$sucess = "nay";
		}
 else if(isset($_POST['fname']) && isset($_POST['email1']) && isset($_POST['pass1']) && isset($_POST['user']) && isset($_POST['pass2'])){
			$name = $_POST['fname'];
			$email1 = $_POST['email1'];
			$user = $_POST['user'];
			$pass1 = $_POST['pass1'];
			$pass2 = $_POST['pass2'];

			require 'databaseConnect.php'; 
			

			$statement = "SELECT username FROM regUsers WHERE username ='$user'";
			$result = $conn->query($statement);
			if(isset($result->num_rows)){
				$statement = "SELECT username FROM regUsers WHERE email ='$email1'";
				$result = $conn->query($statement);
				if(!$result->num_rows){
					if($_POST['pass1'] == $_POST['pass2']){



					$statement = "INSERT INTO regUsers (fullname,username,email,password)
					VALUES ('$name','$user','$email1','$pass1')";

					if($conn->query($statement) === TRUE){
					$sucess = "yay";
					$conn->close();
					$_SESSION['name'] = $user;
					}
					else{
					$sucess ="nay";

					}
					
				}else{
					$sucess = "password";
					$conn->close();
				}
				}else{
					$sucess ="email";
					$conn->close();
				}
			}else{
				$sucess = "user";
				$conn->close();
			}

		}else{
			$sucess ="nay";
		}
			//$conn->close();	
			echo $sucess;

?>