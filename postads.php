<?php
		require 'databaseConnect.php';


			
			echo "<ul class='list-group'>";
			$sql = "SELECT id,age, type, price, model, province,images_path,name, submission_date FROM ads";
			$result = $conn->query($sql);
			if(isset($result->num_rows)){
				 while($row = $result->fetch_assoc()) {
			        //echo "age: " . $row["age"]. " - model: " . $row["price"]. " " . $row["type"]. "<br/>";
			        
			         echo"<li class='list-group-item' style='margin:30px; z-index:1'>";
			         			echo "<div class ='text'>"."age: " . $row["age"]."</br>". "model: " . $row["price"]."</br>". "type" . $row["type"]. "<br/>"."</div>";
			         			//echo "<div class='text'>"."<h2> posted by:</h2>"."</div>";
			         			echo "<div class ='inside'>"."<img  src='".$row["image"]."'>"."</div>";
			         			echo '<h4>'.'posted by:'.'<a class ="profilename" value="'.$row["name"].'">'.$row['name'].'</a></h4>';
			         			//echo '<a class="wishlist" style="color:black;" value ="'.row['id'].'">add to wishlist</a>';
			         			echo '<a style="color:black;" value ="'.$row['id'].'" class="wishlist">add to wishlist</a>';
			        			echo '<h4>contact <span class="glyphicon glyphicon-phone"></h4>';
			        			
			        
			        			/**echo "</div>";
			        			echo "<div style='float:left''>";
			        			echo "<img height='300' width='300' src='".$row["image"]."'>";
			   s     			echo "</div>";**/
			        	echo "</li>"; 
			        	 
			        			}
						}else{
							echo "shit";
						}
					echo "</ul>";
			$conn->close();
?>