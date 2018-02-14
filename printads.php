<?php


		$path = "";
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if(isset($_POST["form3"])){
		if(empty($_POST['age']) || empty($_POST['type']) || empty($_POST['price']) || empty($_POST['model']) || empty($_POST['province'])){
			echo "<h1> wrong</h1>";
		}
		else if(isset($_POST['age']) && isset($_POST['type']) && isset($_POST['price']) && isset($_POST['model']) && isset($_POST['province'])){
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $path = "uploads/carSill.png";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
   echo '<div class="alert alert-danger">
  file size is limited to 500kb, your image is too large, please upload a smaller image.
</div>';
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $path = 'uploads/'.basename( $_FILES["fileToUpload"]["name"]);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

			$age = $_POST['age'];
			$type = $_POST['type'];
			$price = $_POST['price'];
			$model = $_POST['model'];
			$province = $_POST['province'];
			$userr = $_SESSION['name'];

			//echo "<h1> '$province'</h1>";

			require 'databaseConnect.php';


			$statement = "INSERT INTO ads(price,model,type,name,province,age,images_path)
			VALUES('$price','$model','$type','$userr','$province','$age','$path')";

			/*$statement = "INSERT INTO ads(province)
			VALUES('$province')";*/

			
			if($conn->query($statement)=== TRUE){
			//echo "EXECUTED";
			echo "<ul class='list-group'>";
			$sql = "SELECT id,age, type, price, model, province,images_path,name,createDate FROM ads";
			$result = $conn->query($sql);
			$number = 1;
			if($result->num_rows > 0){
				 while($row = $result->fetch_assoc()) {
			        $dater = $row['createDate'];
			        		$creation = substr($dater, 0,10);
			        		$idd = '#contact'.$number;
			        		$iddd = 'contact'.$number;
			           echo"<li class='list-group-item' style='margin:30px; z-index:1'>";
			         			echo "<div class ='text'>"."<div style='padding-left:8px;font-size: 30px;background-color:rgba(50,50,50,0.7);'>age: " . $row["age"]."</div></br>". "<div style='padding-left:8px;font-size: 30px;background-color:rgba(50,50,50,0.7);'>model: " . $row["model"]."</div></br>". "<div style='padding-left:8px;font-size: 30px;background-color:rgba(50,50,50,0.7);'>type: " . $row["type"]. "</div><br/>".
			         				"<div style='padding-left:8px;font-size: 30px;background-color:rgba(50,50,50,0.7);'>Date Posted:".$creation."</div><br/>".
			         				"<div style='padding-left:8px;font-size: 30px;background-color:rgba(50,50,50,0.7);'>Price:".$row['price']."</div><br/>"."</div><br/>"
			         				;
			         			//echo "<div class='text'>"."<h2> posted by:</h2>"."</div>";
			         			echo "<div class ='inside'>"."<img style='max-width:50%;'  src='".$row["images_path"]."'>"."</div>";
			         			echo '<h4>'.'posted by:'.'<a class ="profilename" value="'.$row["name"].'">'.$row['name'].'</a></h4>';
			         			//echo '<a class="wishlist" style="color:black;" value ="'.row['id'].'">add to wishlist</a>';
			         			
			         			echo '<a style="color:black;" value ="'.$row['id'].'" class="wishlist">add to wishlist</a>';
			        	
			        			echo	"</br>
							  <a data-toggle='collapse' data-target='".$idd."'style='text-decoration:none; color:white;'>contact<span class='glyphicon glyphicon-phone'></span></a>

							    <div id='".$iddd."' class='collapse' style='background-color:rgba(50,50,50,0.7);'>
							    cell: 071 122 6403 </br>
							    email: davebehr1@gmail.com </br>
							  </div>";
			        			
			        
			        			
			        	echo "</li>";
			        			$number++;
			        	 
			        			}
						}else{
							echo "shit";
						}
					echo "</ul>";
			}
			else{
			echo"prob". $conn->error;
			}
			$conn->close();
	}



?>