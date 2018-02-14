<?php
	/*if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST["form2"])){
		if(empty($_POST['fname']) || empty($_POST['email1']) || empty($_POST['pass1']) || empty($_POST['user'])){
			//echo "<h1> wrong</h1>";
		}
		 else if(isset($_POST['fname']) && isset($_POST['email1']) && isset($_POST['pass1']) && isset($_POST['user'])){
			$name = $_POST['fname'];
			$email1 = $_POST['email1'];
			$user = $_POST['user'];
			$pass1 = $_POST['pass1'];

			$username = "root";
			$server ="localhost";
			//$password="xeomaiti";
			$dbname = "mydb";

			$conn = new mysqli($server,$username,'',$dbname);


			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$statement = "INSERT INTO regUsers(Fullname,username,email,password)
			VALUES('$name','$user','$email1','$pass1')";

			if($conn->query($statement)== TRUE){
			echo "EXECUTED";
			}
			else{
			echo"prob". $conn->error;
			}
			$conn->close();

		}else{
			echo "<h1> YOU made a mistake</h1>";
		}
	}else if(isset($_POST["form1"])){
		if(empty($_POST['uname']) || empty($_POST['pass'])){
			echo "<h1> wrong</h1>";
		}else if(isset($_POST['uname']) || isset($_POST['pass'])){
			$password = $_POST['pass'];
			$user =$_POST['uname'];
			//echo "<h1>'$password','$user'</h1>";
			$username = "root";
			$server ="localhost";
			//$password="xeomaiti";
			$dbname = "mydb";

			$conn = new mysqli($server,$username,'',$dbname);


			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT username, password FROM regusers WHERE username = '$user' AND password = '$password'";
			$result = $conn->query($sql);
			if($result == false){
				echo"<h1> you are not reg</h1> 
				";
			}else{
				//echo "<h1> you are logged in</h1>";
				header("Location: otherpage.php");
				die();
			}
			$conn->close();	
		}
		
	}
	}
	


//include 'viewDatabase.php';
*/

?>