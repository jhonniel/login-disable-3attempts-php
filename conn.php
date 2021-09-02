<?php 
	$conn=mysqli_connect("localhost", "root", "", "db_attempt");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>