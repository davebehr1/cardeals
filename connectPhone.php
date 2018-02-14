<?php
      $user = $_SESSION['otheruser'];
       $string = '';
     require 'databaseConnect.php';

      $statement = "SELECT email,cell FROM regusers WHERE username ='$user'";
      $result = $conn->query($statement);
      if (isset($result->num_rows)) {
        $row = $result->fetch_assoc();
        $string.='<strong>email:</strong> <br/>';
        $string.=$row['email'];
        $string.='<br/><strong>cell:</strong> <br/>';
        $string.=$row['cell'];
        echo $string;

      }
      $conn->close();
  