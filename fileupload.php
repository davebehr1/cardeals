<?php
session_start();
 $user = $_SESSION['name'];
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = 'uploads/'; // upload directory

if(isset($_FILES['image']))
{
 $img = $_FILES['image']['name'];
 $tmp = $_FILES['image']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
 // can upload same image using rand function
 $final_image = $img;
 
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     
  $path = $path.strtolower($final_image); 

        
  if(move_uploaded_file($tmp,$path)) 
  {
      require 'databaseConnect.php';

      $statement = "UPDATE regusers SET  profilepic = '$path' WHERE username ='$user'";
      $result = $conn->query($statement);
      if($conn->query($statement)== TRUE){
                echo $path;
            }else{
                echo 'nothing';
            }
      
   
   //echo "<img src='$path' />";
  }
 } 
 else 
 {
  echo 'invalid file';
 }
 $conn->close();
}

?>