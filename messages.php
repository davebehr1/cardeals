<?php
	
	$user= $_SESSION['name'];

	require 'databaseConnect.php';
			
			$sql = "SELECT * FROM messages WHERE toUser = '$user'";
			$result = $conn->query($sql);
			if(isset($result->num_rows)){
				 while($row = $result->fetch_assoc()) {
					//echo "<p>".$row['message']."from". $row['fromUser']."</p>";
					//echo "<p style='padding-left: 5px;float:right;background-color:rgba(60,60,60,0.3);color:black;width:150px;height:40px'>".$row['message']."</p>";
					echo "<div style='margin:5px;padding-left:5px;background-color:grey; border-radius:5px; color:black;width:80px;height:20px'>".$row['fromUser'].": </div>";
					echo "<div style='border-radius:5px;margin-left:20px;padding-left: 5px;background-color:rgba(60,60,60,0.3);color:black;'>".$row['message']."</div>";
					
				}
			}else{
				echo "<p> no messages </p>";
			}


				


?>