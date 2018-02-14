<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" type="text/css" href="style.css"/>

  <script src="jquery-3.1.1.min.js"></script>
<link rel = "stylesheet" type="text/css" href="styles.css"/>
<script src="profilescript.js"></script>
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 20%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    font-size: 10px;
}
form{
  padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    font-size: 10px;

}
.sidenav button {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
.wrapper {
   position: relative;
}

.wrapper .glyphicon {
   position: absolute;
   top: 80%;
   left: 70%;
}

/**@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}**/
</style>
</head>
<body>
 <div class="navbar">
      <div class="container">
      <ul class="nav navbar-nav">
  
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="otherpage.php"><span class="glyphicon glyphicon-home"></span>home</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>logout</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['name']?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li> 
        </ul>
      </li>
        <br/>
      </ul>
       
      </div>
    </div>

<div class="container">

<div id="mySidenav" class="sidenav">
<h2 style = 'color:white;text-align: center;'> <?php echo $_SESSION['name']?></h2>

   <div class="wrapper">
 <img src="uploads/person-solid.png" alt="Mountain View" style="width:200px;height:200px;margin-left:20px;"><a href ="#upload"><span  class="glyphicon glyphicon-pencil"></span></a>
 </div>

 <input type="file" name="fileToUpload" id="fileToUpload"  style="display: none;" id ="upload">

  <a style='float:right;' data-toggle="collapse" data-target="#edit1"><span class="glyphicon glyphicon-pencil"></span></a>
  <a data-toggle="collapse" data-target="#demo">ABOUT</a>
  
  <div id="demo" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>

  <div id="edit1" class="collapse">
    <form action="" method="post">
    <input type='textarea'/><br/>
    <input type='textarea'/><br/>
    <input type='textarea'/><br/>
    <input type='textarea'/>
    </form>

  </div>

  <a style='float:right;'><span class="glyphicon glyphicon-pencil"></span></a>
  <a data-toggle="collapse" data-target="#demo1">SERVICES</a>
  
  <div id="demo1" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
   <a style='float:right;'><span class="glyphicon glyphicon-pencil"></span></a>
  <a data-toggle="collapse" data-target="#demo2">CLIENTS</a>
  
  <div id="demo2" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
   <a style='float:right;'><span class="glyphicon glyphicon-pencil"></span></a>
  <a data-toggle="collapse" data-target="#demo3">CONTACTS</a>
  
  <div id="demo3" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
  <a style='float:right;'><span class="glyphicon glyphicon-asterisk"></span></a>
  <a>WISHLIST</a>


     
</div>
</div>

</body>
</html>

<?php

      $username = "root";
      $server ="localhost";
      //$password="xeomaiti";
      $dbname = "mydb";
      $user = $_SESSION['name'];
      $conn = new mysqli($server,$username,'',$dbname);


      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 
      function hello(){
        echo 'hello';
      }

      echo "<ul class='list-group' style='width:70%;float:right;'>";
      $sql = "SELECT age, type, price, model,name, province,image FROM ads WHERE name ='$user'";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
        $IDnum = 0;
         while($row = $result->fetch_assoc()) {
              //echo "age: " . $row["age"]. " - model: " . $row["price"]. " " . $row["type"]. "<br/>";
              
               echo"<div  style='margin:30px; z-index:1; top:70px;'>";
                    echo "<div class ='text'" . $row["age"]."</br>". "model: " . $row["price"]."</br>". "type" . $row["type"]. "<br/>"."</div>";
                    
                    echo "<div class ='inside'>"."<img  src='".$row["image"]."'>"."</div>";
                    echo ' <div class="dropup">
                      <a data-toggle="dropdown"  ><span class="glyphicon glyphicon-pencil"></span></button></a>
                      <ul class="dropdown-menu">';
                        echo '<li style="color:black;" value ="'.$IDnum.'"class="remove">REMOVE</li>
                        <li style="color:black;" id="edit">EDIT POST</li>
                        
                      </ul>
                    </div>';
                    echo '<h4>contact <span class="glyphicon glyphicon-phone"></h4>';
                    
                    
                    
                    
              
                    /**echo "</div>";
                    echo "<div style='float:left''>";
                    echo "<img height='300' width='300' src='".$row["image"]."'>";
                    echo "</div>";**/
                echo "</div>"; 
                $IDnum++;
                 
                    }
            }else{
              echo "shit";
            }
          echo "</ul>";


?>
