<?php
  session_start();
  if(!isset($_SESSION['name'])){
   header("Location:index.php");
  } 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="carSill.png">
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
    overflow: scroll;
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
    position: relative;
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
#demo div{
  color:white;
}
.sidenav::-webkit-scrollbar{
   width: 0 !important
}
#goback{
  margin-left:300px;
  color:black;
  text-decoration: none;
  opacity:0.3;
}
#goback:hover{
  opacity:1;
}
.modal-backdrop {
   background-color: black;
}

/**@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}**/
</style>
</head>
<body>
<script>
    function talk(object){
     // alert('hey');
      var kind = ($(object).attr('id'));
    //  alert(kind);
      var number = ($(object).attr('value'));
      console.log(number);
     var value = object.innerHTML;
      console.log(value);
     var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            }
        };
        xmlhttp.open("GET", "saveedit.php?q="+ value+ "&t=" + kind + "&d=" + number, true);
        xmlhttp.send();
     
      //alert(stuf);
    }
    function car(){
        console.log('sending message');
        var number = ($('#interested').attr('value'));
        var here = ($('.goat').attr('id'));
        var here = '#'+ here;
        console.log(here);
        $.ajax({
            type:'post',
            data : ({id:number}),
            url:'interested.php',

            complete: function(data){
                var result = eval(data.responseText);
                console.log(result)
                $(here).empty();
                for (var index in result){
                  
                  $(here).append(result[index]);
                
              }
               
                }
                
        
    });
      }
     function access(object){
      //alert('access');
      var value = $('input').val();
     // value = object.val();
      console.log(value);
      var kind = "admin";
      var number = 12;
      var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                    $('#puthere').empty();
                if(this.responseText == 'updated'){
                   
                  $('#puthere').append('<div class="alert alert-success">you are now a admin user</div>');
                }else{
                    
                   $('#puthere').append('<div class="alert alert-danger">incorrect password</div>');
                }
            }
        };
        xmlhttp.open("GET", "saveedit.php?q="+ value+ "&t=" + kind + "&d=" + number, true);
        xmlhttp.send();
    }
     function change(object){
      //alert('standard');
      var value = $('input').val();
     // value = object.val();
      console.log(value);
      var kind = "standard";
      var number = 12;
      var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                $('#puthere').empty();
                $('#puthere').append('<div class="alert alert-success">you are now a standard user</div>');
            }
        };
        xmlhttp.open("GET", "saveedit.php?q="+ value+ "&t=" + kind + "&d=" + number, true);
        xmlhttp.send();
    }

     

        
    
        
    

    
  
</script>
 <div class="navbar">

      
      <ul class="nav navbar-nav">
  
      <div class="container">
      </ul>

      <ul class="nav navbar-nav navbar-right">

        <li><a href="otherpage.php"><span class="glyphicon glyphicon-home"></span>home</a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span>logout</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" id ='userN'> <span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['name']?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a data-toggle ="modal" href="#myModal">Privileges</a></li>
          <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->
        
        </ul>
      </li>
        <br/>
      </ul>
       
      </div>
    </div>

  <div id="myModal" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">User account priviliges</h4>
      </div>
      <div class="modal-body">
         <?php include 'modal.php'; ?>
         <div id="puthere"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

  <div class = 'inserter'>
  <a id ='goback'><span style="font-size:30px;" class='glyphicon glyphicon-arrow-left'></span></a>
  </div>


<div class="container">

<div id="mySidenav" class="sidenav">
<a href='otherpage.php' style='text-decoration:none;display:inline;'><h1 style="margin-top:0px;font-size:30px;"> cardeals.com </h1></a>
<h2 style = 'color:white;text-align: center;'> <?php echo $_SESSION['otheruser']?></h2>

   <div class="wrapper">

 <img src="<?php include 'getprofilepic.php'; ?>" alt="Mountain View" class="img-responsive" style="width:200px;margin-left:20px;" id ='image'><a data-target="#demo0" data-toggle="collapse" ><span  class="glyphicon glyphicon-pencil"></span></a></input>
 </div>

 <div id="demo0" class="collapse" style='margin-left:30px;'>
 <form enctype = "multipart/form-data" id ='form' action ='fileupload.php' method ='post'>
  <label class="btn btn-default btn-file" style='margin:10px'>
 
      Browse&hellip;<input type="file" name="image" id="uploadImage"  style="display: none;">
      </label>
      <button type="submit" id='button' value = "upload" class=" btn btn-primary btn-lg " style='height:10px;width:40px;'></button>
  </form>
  </div>


  <a style='float:right;' data-toggle="collapse" data-target="#edit1"><span class="glyphicon glyphicon-pencil"></span></a>
  <a data-toggle="collapse" data-target="#demo">ABOUT</a>
  
  <div id="demo" class="collapse" style='margin-left:30px;'>
   <?php include 'connect.php'; ?>
  </div>

  <div id="edit1" class="collapse">
    <form id ='about' action="" method="post">
    <textarea id='aboutMe' rows="10" cols="40"></textarea>
    <input type='submit' class="btn btn-default"></br>
    </form>

  </div>

  <a style='float:right;' data-toggle="collapse" data-target="#edit2"><span class="glyphicon glyphicon-pencil"></span></a>
  <a data-toggle="collapse" data-target="#demo1">LOCATION</a>
  
  <div id="demo1" class="collapse" style='margin-left:30px;'>
    <?php include 'connectL.php'; ?>
  </div>

    <div id="edit2" class="collapse">
    <form id ='location' action="" method="post">
    <textarea id='aboutLoc' rows="2" cols="30"></textarea>
    <input type='submit' class="btn btn-default"></br>
    </form>
    </div>
   <a style='float:right;' data-toggle="collapse" data-target="#editCons"><span class="glyphicon glyphicon-pencil"></span></a>
  <a data-toggle="collapse" data-target="#demo3">CONTACTS</a>
  
  <div id="demo3" class="collapse" style='margin-left:30px;'>
    <?php include 'connectPhone.php'; ?>
  </div>

   <div id="editCons" class="collapse">
    <form id ='contacts' action="" method="post">
    <strong>cell:</strong><br/> <input type='text' name='cell' id='cell' style='margin-bottom:5px;'><br/>
    <strong>email:</strong><br/> <input type='text' name ='emaill' id ='emaill' style='margin-bottom:5px;'><br/>
    <input type='submit' class="btn btn-default" style='height:30px;font-size:15px;'></br>
    </form>
    </div>


  <?php if($_SESSION['name'] == $_SESSION['otheruser']  || $_SESSION['adminA'] > 0){
  echo '<a style="float:right;" data-toggle="collapse" data-target="#edit3" class="wish"><span class="glyphicon glyphicon-asterisk"></span></a>
  <a>WISHLIST</a>';
  }
  ?>


  <?php if($_SESSION['name'] != $_SESSION['otheruser'] ){
   echo '<a style="float:right;"><span class="glyphicon glyphicon-envelope"></span></a>
  <a data-toggle="collapse" data-target="#mes">MESSAGES</a>
  
  <div id="mes" class="collapse">
  <form class ="mess" action="" method="post">
    <textarea id="message" value ="message" name ="message" rows="5" cols="40"></textarea>
    <input type="submit" class="btn btn-default"></br>
    </form>
  </div>';



  }
  ?>

   <?php if($_SESSION['name'] == $_SESSION['otheruser']  || $_SESSION['adminA'] > 0){
    
   echo '<a style="float:right;"><span class="glyphicon glyphicon-envelope"></span></a>
  <a data-toggle="collapse" data-target="#mes">MESSAGES RECIEVED</a>
  
  <div id="mes" value="" class="collapse" style="height=100px;background-color:white; margin:10px;border-radius:5px;padding:7px;">';
      include "messages.php";

  echo '</div>';
  





  }
  ?>


  <?php if($_SESSION['name'] == $_SESSION['otheruser'] || $_SESSION['adminA'] > 0){
   echo '<a style="float:right;" class="delprof"><span class="glyphicon glyphicon-remove" ></span></a>
  <a data-toggle="collapse" data-target="#del">DELETE PROFILE</a>';
  }
  ?>




     
</div>
</div>

</body>
</html>

<?php
      
      $user = $_SESSION['otheruser'];
      
      require 'databaseConnect.php';
      
      function hello(){
        echo 'hello';
      }

      echo "<ul class='list-group' style='width:70%;float:right;'>";
      $sql = "SELECT id,age, type, price, model,name, province,image FROM ads WHERE name ='$user'";
      $result = $conn->query($sql);
      $num = 1;
      $numberr =0;
      if(isset($result->num_rows)){
        
         while($row = $result->fetch_assoc()) {
                $numberr = $row['id'];
                 echo"<li class='list-group-item' style='margin:30px; z-index:1'>";
                   
                    //echo "<div class='text'>"."<h2> posted by:</h2>"."</div>";
                    //echo "<img style='max-width:50%;max-height:30%;margin-left:5%;' src='".$row["image"]."'>";
                 if($_SESSION['name'] == $_SESSION['otheruser'] || $_SESSION['adminA'] > 0){
                  echo"<div  style='float:right;width:45%;'><div style='padding-left:8px;font-size: 30px;background-color:rgba(50,50,50,0.7);'>age: " ."<p value ='".$row['id']."' contenteditable='true' onblur = 'talk(this);'  id = 'age' style='float:right;margin-right:40px;'>". $row["age"]."</p>"."</div> <br/>"
                      .
                     "<div style='padding-left:8px;font-size: 30px;background-color:rgba(50,50,50,0.7);'>model: "."<p value ='".$row['id']."' style='float:right;margin-right:40px;' contenteditable='true' onblur = 'talk(this);' id = 'model'>". $row["model"]."</p>". "</div> 
                     </br>"
                     . 
                     "<div   style='padding-left:8px;font-size: 30px;background-color:rgba(50,50,50,0.7);'>type: " ."<p value ='".$row['id']."'style= 'float:right;margin-right:40px;' contenteditable='true' onblur = 'talk(this);' id = 'type'>". $row["type"]."</p>". "</div>

                     <br/>".
                     "<div   style='padding-left:8px;font-size: 30px;background-color:rgba(50,50,50,0.7);'>price: " ."<p value ='".$row['id']."'style= 'float:right;margin-right:40px;' contenteditable='true' onblur = 'talk(this);' id = 'price'>". $row["price"]."</p>". "</div>

                     <br/>".
                     "</div>";
                      echo "<a data-target='#image0".$num."' data-toggle='collapse' ><img src='".$row["image"]."' alt='Mountain View' style='max-width:50%;max-height:30%;margin-left:2%;z-index:0;' id ='image2'></a></input>
                      </div>

                      <div id='image0".$num."' class='collapse' style='margin-left:5px;'>
                      <form enctype = 'multipart/form-data' id ='form2' action ='fileupload.php' method ='post'>
                    <label class='btn btn-default btn-file' style='margin:10px'>
 
                   Browse&hellip;<input type='file' name='image' id='uploadImage'  style='display: none;width:50px;z-index:3'>
                         </label>
                       <button type='submit' id='button2' value = '".$row['id']."' class=' btn btn-primary btn-lg ' style='height:10px;width:40px;z-index:3'></button>
                     </form>
                        </div>";

                   }else{
                    echo"<div  style='float:right;width:45%;'><div style='padding-left:8px;font-size: 30px;background-color:rgba(50,50,50,0.7);'>age: " ."<p value ='".$row['id']."'   id = 'age' style='float:right;margin-right:40px;'>". $row["age"]."</p>"."</div> <br/>"
                      .
                     "<div style='padding-left:8px;font-size: 30px;background-color:rgba(50,50,50,0.7);'>model: "."<p value ='".$row['id']."' style='float:right;margin-right:40px;'  id = 'model'>". $row["model"]."</p>". "</div> 
                     </br>"
                     . 
                     "<div   style='padding-left:8px;font-size: 30px;background-color:rgba(50,50,50,0.7);'>type: " ."<p value ='".$row['id']."'style= 'float:right;'  id = 'type'>". $row["type"]."</p>". "</div>

                     <br/>".
                     "</div>";
                     echo "<img src='".$row["image"]."' alt='Mountain View' style='max-width:50%;max-height:30%;margin-left:2%;z-index:0;' id ='image2'>";

                   }


                   
                  
                    


                    

                    if($_SESSION['name'] == $_SESSION['otheruser']|| $_SESSION['adminA'] >0){
                    echo ' <div class="dropup">
                      <a data-toggle="dropdown"  ><span class="glyphicon glyphicon-pencil"></span></button></a>
                      <ul class="dropdown-menu">';
                        echo '<li style="color:black;" value ="'.$row['id'].'"class="remove">REMOVE</li>
                        <li style="color:black;" id="edit">EDIT POST</li>
                        
                      </ul>
                    </div>';
                  }
                  
                    if($_SESSION['name'] == $_SESSION['otheruser']){
            

                     echo '<a id="interested" onclick = "car();" value ="'.$row['id'].'" style="text-decoration:none; color:white;"><span class="glyphicon glyphicon-envelope"></span></a>
                      <a style="text-decoration:none; color:white;" data-toggle="collapse" data-target="#int'.$num.'">INTERSTED</a>
      
                         <div  id="int'.$num.'" value="" class="collapse goat" style="height=100px;width:200px;background-color:grey; margin:10px;border-radius:5px;padding:7px;" >';
                              //include 'interested.php';
                          echo '</div>';
                          $num = $num +1;
                  }
                   
                 
                echo "</li>";
                

                  
                 
                    }
            }else{
              echo "problem";
            }
          echo "</ul>";
          $conn->close();


?>