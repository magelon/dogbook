<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
		<title>Page Title</title>
</head>

	<body>
		<?php
			// upload_file.php
			
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			// Handle the form.
			// Try to move the upload file:
			
			if (move_uploaded_file ($_FILES['the_file']['tmp_name'], "../uploads/{$_FILES['the_file']['name']}")){
			print '<p>Your file has been uploaded.</p>';
			
			}else { // Problem!
				
				print '<p style="color: red;">Your file could not be uploaded because: ';
				
				// Print a message based upon the error:
				switch ($_FILES['the_file']['error']){
					case 1:
						print 'The file exceeds the upload_max_filesize setting in php.ini';
						break;
					case 2:
						print 'The file exceeds the MAX_FILE_SIZE setting in the HTML form';
						break;
					case 3:
						print 'The file was only partially uploaded';
						break;
					case 4:
						print 'No file was uploaded';
						break;
					case 5:
						print 'The temporary folder dose not exit.';
						break;
					default:
						print 'Something unforessen happened.';
						break;
					}

						print '.</p>'; // Complete the paragraph.
				} // End of move_uploaded_file() IF.
			
			} // End of submission IF.
				
			// Leave PHP and dispaly the form:	
					
			
		?>
		<form action="upload_file.php" enctype="multipart/form-data" method="post">
			<p>Upload a file using this form:</p>
			<p><input type="file" name="the_file" /></p>
			<p><input type="submit" name="submit" value="Upload This File" /></p>
		</ form>	
		
	</body>

</html>