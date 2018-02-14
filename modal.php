<?php
      $user = $_SESSION['otheruser'];
    
     require 'databaseConnect.php';

      $statement = "SELECT admin FROM regUsers WHERE username ='$user'";
      $result = $conn->query($statement);
      if (isset($result->num_rows) > 0) {
        $row = $result->fetch_assoc();
        if($row['admin'] == 1){
          echo 'you are an admin user';
          echo '<ul>
                    <li>add posts</li>
                    <li>delete posts</li>
                </ul><br/>';

          echo '<button id ="standard" value ="standardUser" onclick="change(this);" class="btn btn-warning">standardUser</button>';
        }else{
          echo 'you are a standard user';
          

          echo '<br/> <h2>admin password:</h2><br/> <input type="text" id="adminPass" onblur = "access(this);" style="background-color:grey;"/>';
        }
      }
      $conn->close();
      ?>