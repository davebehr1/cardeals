<?php
      $user = $_SESSION['otheruser'];
    
     require 'databaseConnect.php';
     require 'debug.php';

      $statement = "SELECT about FROM regusers WHERE username ='$user'";
      $result = $conn->query($statement);
      if (isset($result->num_rows) && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row['about'];
      }
      $conn->close();
      ?>