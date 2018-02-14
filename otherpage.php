<?php
	session_start();
       if(!isset($_SESSION['name'])){
           header("Location:index.php"); 
        }
?>
<html>
<head>
        <link rel="icon" href="carSill.png">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="css/bootstrap-select.min.css" rel="stylesheet">
	<link rel = "stylesheet" type="text/css" href="styles.css"/>
	<script src="script.js"></script>


</head>
<body>

	
 	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">

    <div class="navbar-header">
   <h1 class="navbar-brand" style='font-size: 50px;color:white;'>CarDeals.com</h1>
    </div>
      <ul class="nav navbar-nav">
  
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li style='margin-left:60px;'><a href="profile.php"><span class="glyphicon glyphicon-user"></span> <?php $_SESSION['otheruser'] = $_SESSION['name']; echo $_SESSION['name']; ?></a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li><br/>
        </ul>
      <div style='text-align:center;margin-top:40px;'>
        <form class="form-inline" style="margin-right:30px;" id='hey'>

        <div class="form-group">    
        <div class="input-group">
          <select class="form-control" id="type" name='type'>
          	<option value="" disabled="disabled" selected="selected" >Type of car</option>
		    <option value="SUV">SUV</option>
		    <option value="4x4">4x4</option>
		    <option value="hatchback">hatchback</option>
		    <option value="sedan">sedan</option>
		    <option value="sportscar">sportscar</option>

 		 </select>
          
        </div>
    </div>

         <div class="form-group">    
        <div class="input-group">
      
          <select class="form-control" id="price"  name='price'>
          	<option value="" disabled="disabled" selected="selected">Price</option>
		    <option value="50 000 - 100 000">50 000 - 100 000</option>
		    <option value="100 000 - 150 000">100 000 - 150 000</option>
		    <option value="150 000 - 250 000">150 000 - 250 000</option>
		    <option value="250 000 - 350 000">250 000 - 350 000</option>
		    <option value="350 000 - 450 000">350 000 - 450 000</option>
		    <option value="450 000 - higher">450 000 - higher</option>

 		 </select>
 		
          
        </div>
    </div>
    	 <div class="form-group">    
        <div class="input-group">
          <select class="form-control" id="brand" name="brand">
          	<option value="" disabled="disabled" selected="selected">Brand</option>
		    <option value="audi">audi</option>
		    <option value="honda">honda</option>
		    <option value="mercedes-benz">mercedes-benz</option>
		    <option value="opel">opel</option>
		    <option value="toyota">toyota</option>
		    <option value="bmw">bmw</option>
		    <option value="nissan">nissan</option>
		    <option value="citroen">citroen</option>
		    <option value="fiat">fiat</option>
		    <option value="volvo">volvo</option>
		   	<option value = "mazda">mazda</option>
		   	<option value = "alpha">alpha</option>
		   	

 		 </select>
          
        </div>
    </div>
    	 <div class="form-group">    
        <div class="input-group">
          <select class="form-control" id="province" name="province">
          	<option value="" disabled="disabled" selected="selected">province</option>
		    <option value="gauteng">gauteng</option>
		    <option value="western cape">western cape</option>
		    <option value="eastern cape">eastern cape</option>
		    <option value="kwazulu-natal">kwazulu-natal</option>
		    <option value="northern cape">northen cape</option>
		    <option value="north-west">north-west</option>
		    <option value="limpopo">limpopo</option>
		    <option value="mpumalanga">mpumalanga</option>
		    <option value="freestate">freestate</option>


 		 </select>
          
        </div>
    </div>

    <div class="form-group">    
        <div class="input-group">
          <input  class="form-control" type='text' name='profile' id ='profilename' size='4' placeholder='profile'>
          
        </div>
    </div>

     <div class="form-group">    
        <div class="input-group">
       		
        <button type="submit" name="form3" class=" btn btn-primary btn-lg " id ="search" style='height:35px;font-size:14px;width:60px;margin-right:5px;'>search</button>
          
      </div>
    </div>

        


        </form>
      </div>
    <!--</div>-->
  </div>
</nav>
           
    <div class="container-fluid">
   
    	<div id="full" >	
        <form enctype = "multipart/form-data" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method ="post" class="form-inline">
        <div class= "row">
    <div class="form-group">    
        <div class="input-group">
        <label for="some">age</label>
          <input type="text" class="form-control" id ="some" name ="age">
          
        </div>
    </div>
    <div class="form-group">    
        <div class="input-group">
           <label for="some">Type</label>
          <select class="form-control" id="model" name="type">
		    <option value="SUV">SUV</option>
		    <option value="4x4">4x4</option>
		    <option value="hatchback">hatchback</option>
		    <option value="sedan">sedan</option>
		    <option value="sportscar">sportscar</option>

 		 </select>
          
        </div>
    </div>
    <div class="form-group">    
        <div class="input-group">
        <label for="some">price</label>
          <input type="text" class="form-control" id ="some" name ="price">
          
        </div>
    </div>
  
    <div class="form-group">    
    <div class="input-group">
          <label for="some">Model</label>
          <select class="form-control" id="model" name ="model">
		    <option value="audi">audi</option>
		    <option value="honda">honda</option>
		    <option value="mercedes-benz">mercedes-benz</option>
		    <option value="opel">opel</option>
		    <option value="toyota">toyota</option>
		    <option value="bmw">bmw</option>
		    <option value="nissan">nissan</option>
		    <option value="citroen">citroen</option>
		    <option value="fiat">fiat</option>
		    <option value="volvo">volvo</option>
		   	<option value = "mazda">mazda</option>
		   	<option value = "alpha">alpha</option>
 		 </select>
     </div>

      <div class="input-group">
          <label for="some">Province</label>
          <select class="form-control" id="province" name ="province">
		    <option value="gauteng">gauteng</option>
		    <option value="kzn">kzn</option>
		    <option value="western cape">western cape</option>
		    <option value="eastern cape">eastern cape</option>
		    <option value="nortthen cape">northen cape</option>
		    <option value="limpopo">limpopo</option>
		    <option value="mpumalanga">mpumalanga</option>
		    <option value="north west">north west</option>
		    <option value="free state">free state</option>
 		 </select>
     </div>



</div>
<div class ="row">
  <div class="form-group">    
        <div class="input-group">
       		
          <label class="btn btn-default btn-file" style='margin:10px'>
 
      Browse&hellip;<input type="file" name="fileToUpload" id="fileToUpload"  style="display: none;">
			</label>

          
        </div>
    </div>
</div>
<div class ="row">
     
        <div class="form-group">    
        <div class="input-group">
       		
          
        <button type="submit" name="form3" class=" btn btn-primary btn-lg " id ="yes">POST</button>
          
        </div>
    </div>
   </div>


</form>
</div>
</div>

<div class ='selector'>
</div>


	<!--<?php 	?>-->
	 



</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	include 'printads.php';
}else{
	include 'printads2.php';
}
?>