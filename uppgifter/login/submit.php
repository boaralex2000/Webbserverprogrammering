<?php

	$dbc = mysqli_connect("localhost","root","","introphp");

	$Name = $_POST['First_Name'];
	$Password = $_POST['Password'];
	
	$query = "SELECT * FROM form WHERE First_Name='$Name' AND Password='$Password';";
	
	mysqli_query($dbc,$query);
    
    $result = mysqli_query($dbc,$query);

    if($row = mysqli_fetch_array($result)) {
		
		echo "Successfully logged in!";
		
	}
    else {
        echo "Wrong Name or Password, Try again!";
    }

?>
