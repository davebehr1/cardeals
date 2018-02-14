<?php

$ads .= "<li class='list-group-item' style='margin:30px; z-index:1'>
			         			<div class ='text'>"."<div style='padding-left:8px;font-size: 30px;background-color:rgba(50,50,50,0.7);'>age: " . $row["age"]."</div></br>". "<div style='padding-left:8px;font-size: 30px;background-color:rgba(50,50,50,0.7);'>model: " . $row["model"]."</div></br>". "<div style='padding-left:8px;font-size: 30px;background-color:rgba(50,50,50,0.7);'>type: " . $row["type"]. "</div><br/>"."</div>
			         			
			         			<div class ='inside'>"."<img style='max-width:50%;'  src='".$row["image"]."'>"."</div>
			         			<h4>posted by:<a class ='profilename' value='".$row["name"]."'>".$row['name']."</a></h4>
			         			
			         			<a style='color:white;' value ='".$row['id']."' class='wishlist'>add to wishlist</a>
			        			

			   					</br>
							  <a data-toggle='collapse' data-target='#contact' style='text-decoration:none; color:white;'>contact<span class='glyphicon glyphicon-phone'></span></a>

							    <div id='contact' class='collapse' style='background-color:rgba(50,50,50,0.7);'>
							    cell: 071 122 6403 </br>
							    email: davebehr1@gmail.com </br>
							  </div>
			        			
			        
			        		</li>"; 
			        	  

?>