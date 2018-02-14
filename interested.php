<?php
	session_start();
	$user= $_SESSION['name'];
	$id = $_POST['id'];
	$users = array();
	$i = 0;

	 $username = "root";
      $server ="localhost";
      //$password="xeomaiti";
      $dbname = "mydb";
      $user = $_SESSION['otheruser'];
      $conn = new mysqli($server,$username,'',$dbname);


      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 

			$statement = "SELECT user FROM wishlist WHERE postedBy = '$user' AND id='$id'";
			 

			$result = $conn->query($statement);
			if($result->num_rows > 0){
				 while($row = $result->fetch_assoc()) {
					
					$users[$i] = $row['user'];
					++$i;
					
					
				}
				echo json_encode($users);
				
			}else{
				echo "no interest";
				return;
			}



				


?>