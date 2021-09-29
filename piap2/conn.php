<?php
	$db = mysqli_connect("localhost","root","");
	if (!$db) { 
		die('Could not connect to MySQL: ' . mysqli_error()); 
	} 
	mysqli_select_db($db,"cacassessment");
?>
