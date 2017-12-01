<?php

	$dbc = mysqli_connect("localhost","root","","introphp");

	$Name = $_POST['First_Name'];
	$Password = $_POST['Password'];
	
	$query = "SELECT * FROM form WHERE name=$Name AND Password=$Password;";
	
	mysqli_query($dbc,$query);
    
?>