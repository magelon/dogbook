<?php

	// Set the page title and include the header file:
	define('TITLE', 'Welcome to the Club!');
	include('templates/header2.html');

	// Need the session:
	session_start();
	
	// Print a greeting:
	print '<h2> Welcome!</h2>';
	print '<p>Hello, ' . $_SESSION['username']. '!</p>';
	
	// Print how long they've been logged in:
	date_default_timezone_set('America/Los_Angeles');
	
	print '<p>You have been logged in since: ' . date('g:i a',$_SESSION['loggedin']).'</p>';
	
	// Make a logout link:
	//print '<p><a href="logout.php">Click here to logout.</a></p>';
	
	
?>
<form action="logout.php" >
	<input type="submit" name="submit" value="logout" />
	</form>
<!--<h2>Welcome to the Club!</h2>
<p>successfully logged in and can take advantage of everything the site has to offer.</p>-->

<?php include('templates/footer.html'); // Need the footer. 
?>