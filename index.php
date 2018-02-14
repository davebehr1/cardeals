<?php
if(isset($_SESSION['name'])){
session_unset();
session_destroy();
}else{
session_start();
}
?>
<html>

<head>
       <link rel="icon" href="carSill.png">
       <title>David</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel = "stylesheet" type="text/css" href="style.css"/>

	<script src="jquery-3.1.1.min.js"></script>
	<script src="script.js"></script>
</head>
<body>
<script>
    function hideandshow(){
      //$('#thing').empty();
     // $('body').css('background-color','rgba(40,40,40,0.5)');
      $('#thing').fadeOut(1000,function(){
        $('#thing').css('background-color','rgba(40,40,40,0.5)');
        $('#thing').html('<h2 style="color:white;text-align:center;margin-top:10%;">This webiste facilatets the buying and selling of used vehicles,<br/> by connecting buyers and seller from all over the country.<br/> Our database has a huge collection of cars and Im positive<br/> that you will find the right fit for you.</h2>');
      });
      
      $('#thing').fadeIn(1000);
    


    }
    function showandhide()
    {
      $('#thing').fadeOut(1000,function(){
        $('#thing').css('background-color','rgba(40,40,40,0.0)');
        $('#thing').html('<h1> CarDeals.com </h1> <img src="logoW.png" alt ="logo">');
      });
     // $('#thing').empty();
       $('#thing').fadeIn(1000);
 
    }
</script>
<nav class="navbar navbar-default">
<div class ="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="#ABOUT" onmouseover = 'hideandshow();' onmouseout = 'showandhide();'>ABOUT</a></li>
       <li class="dropdown active" id="menuLogin">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">LOGIN</a>
            <div class="dropdown-menu" style="padding:17px;">
              <form class="form" id="formLogin"> 
                <div class="form-group">
                                        <label for="fname">username</label>
                                        <input type="text" class="form-control" name="uname" id="uname" placeholder="John"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="lname">password</label>
                                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Doe"/>
                                    </div>
                <button type="submit" id="btnLogin" class="btn" name ="form1">Login</button>

              </form>
              <button id="reg" class="btn" ref="#here">Register</button>
              <div id='error' style='margin-top:5px;'></div>
            </div>
          </li>
       <li class="dropdown active" id="menuLogin">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">REGISTER</a>
            <div class="dropdown-menu" style="padding:17px;" id='here'>
              <form class="form" id="formRegister"> 
                <fieldset>
                                    <legend>Register</legend>
                                    <div class="form-group">
                                        <label for="fname">Full name:</label>
                                        <input type="text" class="form-control" name="fname" id="fname" placeholder="John"/>
                                    </div>
                         
                                    <div class="form-group">
                                        <label for="email1">Email address:</label>
                                        <input type="email" class="form-control" name="email1" id="email1" placeholder="john.doe@gmail.com"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Username</label>
                                        <input type="text" class="form-control" name="user" id="user"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass1">Create password:</label>
                                        <input type="password" class="form-control" name="pass1" id="pass1" placeholder="********"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass2">Confirm password:</label>
                                        <input type="password" class="form-control" name="pass2" id="pass2" placeholder="********"/>
                                    </div>
                                    <input type="submit" name ="form2" value="Register" class="btn btn-default" id="submitForm"/>
                                </fieldset>
              </form>
              <div id='error2'></div>
            </div>

          </li>
         
    </ul>
  </div>
</nav>



<div id="thing">
<h1> CarDeals.com</h1>
<img src="logoW.png" alt="logo">
</div>


</body>
</html>