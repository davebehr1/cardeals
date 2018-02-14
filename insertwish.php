 <?php
      session_start();
      $username = "root";
      $server ="localhost";
      //$password="xeomaiti";
      $dbname = "mydb";
      $user = $_SESSION['name'];
      $conn = new mysqli($server,$username,'',$dbname);
      $ads = '';

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      //$sql = "SELECT ads.id, ads.age, ads.type, ads.price, ads.model,ads.name, ads.province,ads.image FROM ads WHERE name ='$user'";
      $sql = "SELECT *
        FROM ads
        INNER JOIN wishlist
        ON wishlist.id=ads.id
        WHERE wishlist.user ='$user'";

      $result = $conn->query($sql);
      $ads .=  "<ul class='list-group' style='width:70%;float:right;'>";
      if($result->num_rows > 0){
        
         while($row = $result->fetch_assoc()) {
          $ads .="
        <li class='list-group-item' style='margin:30px; z-index:1; top:70px;'>
        <div class ='text'" . $row["age"]."</br>". "model: " . $row["price"]."</br>". "type" . $row["type"]. "<br/>"."</div>
        <div class ='inside'>"."<img  src='".$row["image"]."'>"."</div>
         <div class='dropup'>
        <a data-toggle='dropdown'  ><span class='glyphicon glyphicon-pencil'></span></button></a>
        <ul class='dropdown-menu'>
                        echo '<li style='color:black;' value ='".$row['id']."'class='remove'>REMOVE</li>
                        <li style='color:black;' id='edit'>EDIT POST</li>
                        
                      </ul>
                    </div>
                    <h4>contact <span class='glyphicon glyphicon-phone'></h4>
        </li>"; 
 
      }
    }else{
      echo 'askies';
    }
    $ads .= "</ul>";
    echo $ads;
    $conn->close();



/**$ads +=  "<ul class='list-group' style='width:70%;float:right;'> 
        <li class='list-group-item' style='margin:30px; z-index:1; top:70px;'>
        <div class ='text'" . $row["age"]."</br>". "model: " . $row["price"]."</br>". "type" . $row["type"]. "<br/>"."</div>
        <div class ='inside'>"."<img  src='".$row["image"]."'>"."</div>
         <div class='dropup'>
        <a data-toggle='dropdown'  ><span class='glyphicon glyphicon-pencil'></span></button></a>
        <ul class='dropdown-menu'>
                        echo '<li style='color:black;' value ='".$row['id']."'class='remove'>REMOVE</li>
                        <li style='color:black;' id='edit'>EDIT POST</li>
                        
                      </ul>
                    </div>
                    <h4>contact <span class='glyphicon glyphicon-phone'></h4>
        </li>"; **/
 

?>


 