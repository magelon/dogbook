<?php
include('templates/header.html');

?>
<div id="content">
	<h1>Register</h1>
		<?php //register2.php
			// Identify the dirctory and file to use:
			$dir = '../users/';
			$file = $dir . 'users.txt';
			
			if($_SERVER['REQUEST_METHOD'] == 'POST') { //Handle the form.
			
			$problem = FALSE; // No problems so far.
			
			// Check for each value...
			if (empty($_POST['username'])) {
				$problem = TRUE;
				print '<p class = "error">Please enter a username!</p>';
				}
			
				if (empty ($_POST['password1'])) {
				$problem = TRUE;
				print '<p class= "error">Please enter a username!</p>';
				}
				
				if ($_POST['password1'] !=$_POST['password2']){
					$problem = TRUE;
					print '<p class="error">Your password did not match your confirmed password!</p>';
					}
					
					if (!$problem) { // If there weren't any problems...
						
						if(is_writable($file)){ // Open the file.
						
						// Create the data to be written:
						$subdir = time() . rand(0, 4596);
						$data = $_POST['username'] . "\t" . md5(trim($_POST['password1'])) . "\t" .
						$subdir . PHP_EOL;
						
						// Write the data:
						file_put_contents($file, $data, FILE_APPEND | LOCK_EX );
						
						// Create the directory:
						mkdir ($dir . $subdir);
						
						// Print a message:
						print '<p>You are now registered!</p>';
						
						}else { // Couldn't write to the file.
							print '<p class= "error">You could not be registered due to a system error.</p>';
							}
						}else { // Forgot a field.
							print '<p class="error">Please go back and try again!</p>';
							}
						}else { // Dispaly the form.
							
							// Leave PHP and dispaly the fom:
			
		?>
		<form action= "register2.php" method="post">
			<p>Username: <input type="text" name="username" size="20" /></p>
			<p>Password: <input type="password" name="password1" size="20" /></p>
			<p>Confirm Password: <input type="password" name="password2" size="20" /></p>
			<input type="submit" name="submit" value="Register" />
		</form>
		<?php } // End of submission IF. ?>
</ div>
		
	
			
			<?php
			include('templates/footer.html');
			
			?>