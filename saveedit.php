<?php
	session_start();
	$adminPass = 123;
	$user= $_SESSION['name'];
	$q= $_REQUEST['q'];
	$d= $_REQUEST['d'];
	$t = $_REQUEST['t'];
	$sql ='';
			require 'databaseConnect.php';
			if($t == 'age'){
			$sql = "UPDATE ads SET age ='$q' WHERE name = '$user' AND id = '$d'";
			}else if($t == 'model'){
				$sql = "UPDATE ads SET model ='$q' WHERE name = '$user' AND id = '$d'";

			}else if($t == 'type'){
				$sql = "UPDATE ads SET type ='$q' WHERE name = '$user' AND id = '$d'";
			
			}else if($t == 'price'){
				$sql = "UPDATE ads SET price ='$q' WHERE name = '$user' AND id = '$d'";
			}else if($t =='standard'){
				$sql = "UPDATE regusers SET admin = '0' WHERE username = '$user'";
			}
			else if($t == 'admin'){
				if($q == $adminPass){
					$sql = "UPDATE regusers SET admin = '1' WHERE username = '$user'";
					//echo 'admin access granted';
				}
				else{
					echo 'password is incorrect';
					return;
				}
			}
			if($conn->query($sql)== TRUE){
			echo 'updated';
			$conn->close();
			}
			else{
			echo 'didnt update';
			$conn->close();
			//echo 'hey bitches..';
			}

			
			
	
			


				


?>