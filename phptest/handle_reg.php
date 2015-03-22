<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
		<title>Page Title</title>
		<style type="text/css" media="screen"> .error{ color:red;} </style>
</head>

	<body>
		<?php
		print '<h1> Regiester Results</h1>';
			$okay = TRUE;
			
			// Validate the name:
			if (empty($_POST['name'])) {
			print '<p class="error">Please enter your name.</p>';
			$okay = FALSE;
			}
			// Validate the email address:
			if (empty($_POST['email'])) {
			print '<p class="error">Please enter your email address.</p>';
			$okay = FALSE;
			}
			
			// Validate the password:
			if (empty($_POST['password'])){
			print '<p class="error">Please enter your password.</p>';
			$okay = FALSE;
			}
			
			// Check the two passwords for equality:
			if ($_POST['password'] !=$_POST['confirm']){
			print '<p class="error">Your confirmed password does not match the original password.</p>';
			$okay=FALSE;
			}
			
			//Validate the birth year:
			if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4)){
			$age = 2014 - $_POST['year'];
			
			// Calculate age this year.
			}else{
			print '<p class="error">Please enter the year you were born as four digits.</p>';
			$okay = FALSE;
			}
			
			
			//Check that they were born before this year:
			if ($_POST['year'] >=2014){
			print '<p class="error">Either you entered your birth year wrong or you come from the future!</p>';
			$okay = FALSE;
			}
			
			// Validate the terms:
			if (!isset($_POST['terms']) ){
			print '<p class="error">You must accept the terms.</p>';
			$okay = FALSE;
			}
			
			// Validate the color:
			if ($_POST['color'] == 'red'){
			$color_type = 'primary';
			}elseif($_POST['color'] == 'yellow'){
			$color_type = 'primary';
			}elseif($_POST['color'] == 'green'){
			$color_type = 'secondary';
			}elseif($_POST['color'] == 'blue'){
			$color_type = 'primary';
			}else{// Problem!
			print '<p class="error">Please select your favorite color.</p>';
			$okay = FALSE;
			}
			
			/*
			switch ($_POST['color']){
				case 'red':
					$color_type = 'primary';
					break;
				case 'yellow':
					$color_type = 'primary';
					break;
				case 'green':
					$color_type = 'secondary';
					break;
				case 'blue':
					$color_type = 'primary';
					break;
				default:
			print '<p class="error">Please select your favorite color.</p>';
			$okay = FALSE;
			break;
			}//end of switch.	
			*/
			
			
			// If there were no errors, print a success message:
			if ($okay){
			print '<p>You have been successfully registered (but not really).</p>';
			}
			
			$body = "Thank you for registering with the club! Your password is '{$_POST['password']}'.";
			mail($_POST['email'], 'Registration Confirmation', $body, 'From: admin@example.com');
			
		?>
		
	</body>

</html>