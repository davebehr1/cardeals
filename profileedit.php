<?php
	
			session_start();
			require 'databaseConnect.php';
			$user = $_SESSION['name'];
			$otheruser = $_SESSION['otheruser'];
		
			

		if(isset($_POST['name'])){
			$number = $_POST['name'];

			$statement = "DELETE FROM ads
					WHERE id= '$number'";

			if($conn->query($statement)== TRUE){
				echo 'sucess';
			}else{
				echo 'nothing';
			}
			$conn->close();
		}
		else if(isset($_POST['about'])){
			$about = $_POST['about'];


			$statement = "UPDATE regusers SET  about = '$about' WHERE username ='$user'";

			/*$statement = "INSERT INTO ads(province)
			VALUES('$province')";*/

			if($conn->query($statement)== TRUE){
				echo 'sucess';
			}else{
				echo 'nothing';
			}

			//$conn->close();

		}
		else if(isset($_POST['action'])){
			$flag ='';
			$sql = "DELETE FROM regusers WHERE username ='$user'";

			if($conn->query($sql) == TRUE){
				$flag = 'successfuly removed';
			}
				$sql = "SELECT * FROM ads WHERE name ='$user'";
				$result = $conn->query($sql);
				if($result->num_rows > 0){

				$sql = "DELETE FROM ads WHERE name ='$user'";
				if($conn->query($sql) == TRUE){
				$flag = 'successfuly removed';
				}
				}

					$sql = "SELECT * FROM wishlist WHERE user ='$user'";
					$result = $conn->query($sql);
					if($result->num_rows > 0){
					$sql="DELETE FROM wishlist WHERE user ='$user'";
					if($conn->query($sql) == TRUE){
							$flag = 'succesfully removed';
					}
				}
		


			
		echo $flag;
		

			
			//$conn->close();
		}
		else if(isset($_POST['location'])){
			$location = $_POST['location'];
			$statement = "UPDATE regusers SET  location = '$location' WHERE username ='$user'";

			if($conn->query($statement)== TRUE){
				echo 'sucess';
			}else{
				echo 'nothing';
			}

			$conn->close();
		}else if(isset($_POST['phone']) || isset($_POST['emailq'])){
		
			$cell = $_POST['phone'];
			$email = $_POST['emailq'];
			$statement = '';
			if(isset($_POST['phone'])){
			$statement = "UPDATE regusers SET cell ='$cell' WHERE username ='$user'";
			}else if(isset($_POST['emailq'])){
				$statement = "UPDATE regusers SET  email = '$email' WHERE username ='$user'";

			}else if(isset($_POST['phone']) && isset($_POST['emailq'])){
				$statement = "UPDATE regusers SET  email = '$email',cell ='$cell' WHERE username ='$user'";

			}

			if($conn->query($statement)== TRUE){
				echo 'sucess';
			}else{
				echo 'nothing';
			}

			//$conn->close();


		}

		else if(isset($_POST['wish'])){
			$dater ='';
			$ads ='';
			$sql = "SELECT *
			        FROM ads
			        INNER JOIN wishlist
			        ON wishlist.id=ads.id
			        WHERE wishlist.user ='$user'";

			      $result = $conn->query($sql);
			      $ads .=  "<ul class='list-group' style='width:70%;float:right;'>";
			      if(isset($result->num_rows)){
			        
			        		
			         while($row = $result->fetch_assoc()) {
			         	$dater = $row['createDate'];
			        		$creation = substr($dater, 0,10);
			   

			        $ads .= "<li class='list-group-item' style='margin:30px; z-index:1'>
                    <img style='max-width:50%;max-height:30%;margin-left:5%;' src='".$row["image"]."'>
                    <div class ='text' style='top:5%;'>"."<div style='padding-left:8px;font-size: 20px;background-color:rgba(50,50,50,0.7);'>age: " . $row["age"]."</div></br>". "<div style='padding-left:8px;font-size: 20px;background-color:rgba(50,50,50,0.7);'>model: " . $row["model"]."</div></br>". "<div style='padding-left:8px;font-size: 20px;background-color:rgba(50,50,50,0.7);'>type: " . $row["type"]. "</div><br/>"."<div style='padding-left:8px;font-size: 20px;background-color:rgba(50,50,50,0.7);'>creation date: ". $creation."</div>
                    	<div class='dropup'>
                      
                    </div>
                    <h4>contact <span class='glyphicon glyphicon-phone'></h4>
                   	</li>";
 
      }
    }else{
      echo 'empty';
      return;
    }
    $ads .= "</ul>";
    echo $ads;
  //  $conn->close();


		}else if(isset($_POST['message'])){
			
			$message = $_POST['message'];
			$from = $_SESSION['name'];
			$to =$_SESSION['otheruser'];
			$sql = "INSERT INTO messages(message,fromUser,toUser) VALUES('$message','$from','$to')";
			if($conn->query($sql)== TRUE){
				echo 'message sent';
			}else{
				echo 'unable to send';
			}
			
			//$conn->close();


		}else if(isset($_POST['ad'])){
			echo 'poste mf';
		}

		

?>