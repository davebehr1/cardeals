<?php


		

			require 'databaseConnect.php';

			echo "<ul class='list-group'>";
			$sql = "SELECT id,age, type, price, model, province,images_path,name,createDate FROM ads";
			$result = $conn->query($sql);
			$number = 1;
			if(isset($result->num_rows)){
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
			         			echo "<div class ='inside'>"."<img style='max-width:50%;'  src='".$row["image_path"]."'>"."</div>";
			         			echo '<h4>'.'posted by:'.'<a class ="profilename" value="'.$row["name"].'">'.$row['name'].'</a></h4>';
			         			//echo '<a class="wishlist" style="color:black;" value ="'.row['id'].'">add to wishlist</a>';
			         			if($_SESSION['name'] != $row['name']){
			         			echo '<a style="color:black;" value ="'.$row['id'].'" class="wishlist">add to wishlist</a>';
			         			
			        	
			        			echo	"</br>
							  <a data-toggle='collapse' data-target='".$idd."'style='text-decoration:none; color:white;'>contact<span class='glyphicon glyphicon-phone'></span></a>

							    <div id='".$iddd."' class='collapse' style='background-color:rgba(50,50,50,0.7);'>
							    cell: 071 122 6403 </br>
							    email: davebehr1@gmail.com </br>
							  </div>";
							}
			        			
			        
			        			
			        	echo "</li>";
			        			$number++;
			        			}
						}else{
							echo "shit";
						}
					echo "</ul>";
			$conn->close();
	


?>