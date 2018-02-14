<?php
	session_start();
	$_SESSION['otheruser'] =$_POST['person'];
	$ot = $_SESSION['otheruser'];
	echo $ot;

?>