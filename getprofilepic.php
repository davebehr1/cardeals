<?php
      $user = $_SESSION['otheruser'];
    
      require 'databaseConnect.php';

      $statement = "SELECT profilepic FROM regusers WHERE username ='$user'";
      $result = $conn->query($statement);
      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row['profilepic'];
      }
      $conn->close();
      ?>