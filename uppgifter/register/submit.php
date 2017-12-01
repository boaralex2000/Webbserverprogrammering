<?php

	$dbc = mysqli_connect("localhost","root","","introphp");
	
	$Username = $_POST['Username'];
	$FirstName = $_POST['First_Name'];
	$LastName = $_POST['Last_Name'];
	$Mail = $_POST['Email'];
	$Birthday = $_POST['Birthday'];
	$Password = $_POST['Password'];
	
	$query = "INSERT INTO form (Username,First_name,Last_name,Mail,Birthday,Password) VALUES('$Username','$FirstName','$LastName','$Mail','$Birthday','$Password');";
	
	mysqli_query($dbc,$query);

?>