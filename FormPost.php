<?php
echo "<ul class='list-group'>";
	$username = "root";
			$server ="localhost";
			//$password="xeomaiti";
			$dbname = "mydb";

			$conn = new mysqli($server,$username,'',$dbname);


			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT age, type, price, model, province FROM ads";
			$result = $conn->query($sql);
			if($result->num_rows > 0){
				 while($row = $result->fetch_assoc()) {
        //echo "age: " . $row["age"]. " - model: " . $row["price"]. " " . $row["type"]. "<br/>";
         echo"<li class='list-group-item'>";
        			echo "age: " . $row["age"]. " - model: " . $row["price"]. "type" . $row["type"]. "<br/>";
        	echo "</li>";    			}
			}else{
				echo "shit";
			}
		echo "</ul>";
			$conn->close();	
		

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST["form3"])){
		if(empty($_POST['age']) || empty($_POST['type']) || empty($_POST['price']) || empty($_POST['model']) || empty($_POST['province'])){
			//echo "<h1> wrong</h1>";
		}
		 else if(isset($_POST['age']) && isset($_POST['type']) && isset($_POST['price']) && isset($_POST['model']) && isset($_POST['province'])){
			$age = $_POST['age'];
			$type = $_POST['type'];
			$price = $_POST['price'];
			$model = $_POST['model'];
			$province = $_POST['province'];

			//echo "<h1> '$province'</h1>";

			$username = "root";
			$server ="localhost";
			//$password="xeomaiti";
			$dbname = "mydb";

			$conn = new mysqli($server,$username,'',$dbname);


			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$statement = "INSERT INTO ads(price,model,type,province,age)
			VALUES('$price','$model','$type','$province','$age')";

			/*$statement = "INSERT INTO ads(province)
			VALUES('$province')";*/

			if($conn->query($statement)== TRUE){
			//echo "EXECUTED";
			}
			else{
			echo"prob". $conn->error;
			}
			$conn->close();

		}else{
			echo "<h1> YOU made a mistake</h1>";
		}
	}
}

?>