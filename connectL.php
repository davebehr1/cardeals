<?php
      $user = $_SESSION['otheruser'];
    
     require 'databaseConnect.php';

      $statement = "SELECT location FROM regusers WHERE username ='$user'";
      $result = $conn->query($statement);
      if (isset($result->num_rows)) {
        $row = $result->fetch_assoc();
        echo $row['location'];
      }
      $conn->close();
      ?>