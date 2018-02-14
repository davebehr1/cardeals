<?php
      session_start();
      require 'databaseConnect.php';
  
      $province ='';
      $brand ='';
      $type ='';
      $price='';
      $paramOne ='';
      $paramTwo = '';
      $ads ='';
      $profile ='';

      

     // $conn = new mysqli($server,$username,'',$dbname);
     // if ($conn->connect_error) {
     // 		echo 'connection failed';
         // die("Connection failed: " . $conn->connect_error);
      //}

     if(isset($_POST['price'])  && !isset($_POST['brand']) && !isset($_POST['province']) && !isset($_POST['type'])){
	      $price = $_POST['price'];
	       $paramOne = current(explode("-", $price));
		$paramTwo = substr($price, strpos($price, "-") + 1);
      $sql = "SELECT ads.id, ads.age, ads.type, ads.price, ads.model,ads.name, ads.province,ads.image,ads.createDate FROM ads WHERE ads.price BETWEEN '$paramOne' AND '$paramTwo'";
	}

	else if(isset($_POST['province'])  && !isset($_POST['brand']) && !isset($_POST['type']) && !isset($_POST['price'])){
		$province = $_POST['province'];
		$sql = "SELECT ads.id, ads.age, ads.type, ads.price, ads.model,ads.name, ads.province,ads.image,ads.createDate FROM ads WHERE ads.province = '$province'";
	}

	else if(isset($_POST['brand'])  && !isset($_POST['type']) && !isset($_POST['province']) && !isset($_POST['price'])){
			$brand = $_POST['brand'];
			$sql = "SELECT ads.id, ads.age, ads.type, ads.price, ads.model,ads.name, ads.province,ads.image,ads.createDate FROM ads WHERE ads.model ='$brand'";
	}

	else if(isset($_POST['type']) && !isset($_POST['brand']) && !isset($_POST['province']) && !isset($_POST['price'])){
			$type = $_POST['type'];
			$sql = "SELECT ads.id, ads.age, ads.type, ads.price, ads.model,ads.name, ads.province,ads.image,ads.createDate FROM ads WHERE ads.type = '$type'";
	}
	else if(isset($_POST['type']) && isset($_POST['brand']) && isset($_POST['province']) && isset($_POST['price'])){
			$type = $_POST['type'];
			$brand = $_POST['brand'];
			$province = $_POST['province'];
			$price = $_POST['price'];
	       $paramOne = current(explode("-", $price));
		$paramTwo = substr($price, strpos($price, "-") + 1);
			$sql = "SELECT ads.id, ads.age, ads.type, ads.price, ads.model,ads.name, ads.province,ads.image,ads.createDate FROM ads WHERE ads.type = '$type' OR ads.province ='$province' OR ads.model ='$brand'";

	}else if(isset($_POST['profile'])){
             $profile = $_POST['profile'];
			$sql = "SELECT ads.id, ads.age, ads.type, ads.price, ads.model,ads.name,                              ads.province,ads.image,ads.createDate FROM ads WHERE ads.name ='$profile'";
        }else{
		echo 'nothing found';
		return;
	}


	$result = $conn->query($sql);
      $ads .=  "<ul class='list-group' style='width:100%;'>";
      if($result->num_rows > 0){
        
         while($row = $result->fetch_assoc()) {

       	include 'adsDisplay.php';
			        	 
 
      }
      $ads .= "</ul>";
      echo $ads;
    }else{
    	echo '<div class="alert alert-warning">
  no ads match your search
</div>';
    }
    
 
  //  $conn->close();


?>