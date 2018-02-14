<?php
	session_start();
	require 'databaseConnect.php';
	$posted = '';
	$user = $_SESSION['name'];
	$id = $_POST['name'];
	
	$sql = "SELECT * FROM wishlist WHERE id ='$id' AND user = '$user'";
	$result = $conn->query($sql);
		if($result->num_rows > 0){
			 echo 'you have already added it to your wishlist';
			 return;
			 }

	$statement = "SELECT name FROM ads WHERE id = '$id'";
	$result = $conn->query($statement);
			if($result->num_rows > 0){
				 $row = $result->fetch_assoc();
				 	$posted = $row['name'];
				 
	$state = "INSERT INTO wishlist(user,id,postedBy) VALUES('$user','$id','$posted')";

	if($conn->query($state)== TRUE){
		echo 'uploaded';
	}
	else{
		echo $posted;
		//echo 'hey bitches..';
	}
		}
	//$conn->close();
	
?>