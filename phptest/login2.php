
<?php
include('templates/header.html');

?>

		<div id="content">
		<?php	//login.php
		// Identify the file to use:
		$file = '../users/users.txt';
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){ // Handle the form.
		
			$loggedin = FALSE;// No currently logged in.
			
			// Enable auto_detect_line_endings:
			ini_set('auto_detect_line_endings', 1);
			
			// Open the file:
			
			$fp = fopen($file, 'rb');
			
			// Loop through the file:
			while ($line = fgetcsv($fp, 200, "\t") ){
			
				// Check the file data against the submitted data:
				if ( ($line[0] == $_POST['username'] AND ($line[1] == md5(trim($_POST['password'])))
				)){
				
					$loggedin = TRUE; // Correct username/password combination.
					
					
					// Stop looping through the file:
					break;
				} // End of IF.
			
			} // End of EHILE.
			
			fclose($fp); // Close the file.
			
			// Print a message:
			if ($loggedin){
			
				
				// Do session stuff
				session_start();
				$_SESSION['username'] = 
				$_POST['username'];
				$_SESSION['loggedin'] = time();
				// Redirect the user to the welcome page!
				ob_end_clean();// Destory the buffer!
				header ('Location:welcome.php');
				exit();
				
				}else{
				print '<p style="color: red;">The username and password you entered do not match those on file.</p>';
				}
			}else { //Dspaly the form.
			
			// Leave PHP and dispaly the form:	
			
			
		?>
		<form action="login2.php" method="post">
			<p>Username: <input type="text" name="username" size="20" /></p>
			<p>Password: <input type="password" name="password" size="20" /></p>
			<input type="submit" name="submit" value="login" />
		</form>	
		
		<?php } // End of submission IF. ?>
</ div>
	
			
			<?php
			include('templates/footer.html');
			
			?>