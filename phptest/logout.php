<?php //logout.php
	//destory the session information

	// Need the session:
	session_start();
	session_destroy();
	// Delete the session variable:
	unset($_SESSION);
	
	// Rest the session array:
	
	$_SESSION = array();
	
	// Define a page title and include the header:
	define('TITLE', 'logout');
	include('templates/header.html');
	?>
	
	<h2> Welcome!</h2>
	<p>You are now logged out.</p>
	<p>Thank you for using this site. We hope that you liked it.<br /></p>
	
	<?php
	include ('templates/footer.html'); 
	?>