<?php
define('TITLE','Login');
include('templates/header.html');

print '<h2>Login Form</h2>
	<p>Users who are logged in can take advantage of certain features like this, that, and the other thing.</p>';
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	// Handle the form:
	if((!empty($_POST['email']))&&(!empty($_POST['password'])) ){
		
		if( (strtolower($_POST['email']) == 'me@example.com') && ($_POST['password'] == 'testpass') ){
		// Correct!
		
		// Do session stuff
		session_start();
		$_SESSION['email'] = 
		$_POST['email'];
		$_SESSION['loggedin'] = time();
		
		print '<p>You are logged in!<br />Now you can blash, blash, blash...</p>';
		
		// Redirect the user to the welcome page!
		ob_end_clean();// Destory the buffer!
		header ('Location:welcome.php');
		exit();
		
		}else{// Incorrect!
		print '<p>The submitted email address and password do not match those on file!<br />Go back and try again.</p>';
		}
	
	}else{// Forget a field.
		print '<p>Please make sure you enter both an email address and a password!<br />Go back and try again.</p>';
		
		}
		}else{// Dispaly the form.
		
		print '<form action="login.php" method="post">
		<p>Email Address: <input type="text" name="email" size="20" /></p>
		<p>Password: <input type="password" name="password" size="20" /></p>
		<p><input type="submit" name="submit" value="Log In!" /></p>
		</form>';
	}	
		
include('templates/footer.html'); 
?>