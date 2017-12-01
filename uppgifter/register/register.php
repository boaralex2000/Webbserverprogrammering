<!DOCTYPE html>

<html>

	<head>
	
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="register-css.css">
	
	</head>
	
	<body>
		
			<form action="submit.php" method="POST">
			
				<div class="container">
				
					<label id="l1a"><b>Username</b></label>
					<input  id="l1b" type="text" placeholder="Enter Username" name="Username" required>
					</br>
					<label id="l2a"><b>First Name</b></label>
					<input id="l2b" type="text" placeholder="Enter First Name" name="First_Name" required>
					</br>
					<label id="l3a"><b>Last Name</b></label>
					<input id="l3b" type="text" placeholder="Enter Last Name" name="Last_Name" required>
					</br>
					<label id="l4a"><b>Email</b></label>
					<input id="l4b" type="text" placeholder="Enter Email" name="Email" required>
					</br>
					<label id="l5a"><b>Birthday</b></label>
					<input id="l5b" type="date" name="Birthday" required>
					</br>
					<label id="l6a"><b>Password</b></label>
					<input id="l6b" type="password" name="Password" placeholder="Enter Password" required>
					<button id="l7b" type="submit" name="Submit">Submit</button>
				</div>
	
			</form>
	
	</body>
	
</html>