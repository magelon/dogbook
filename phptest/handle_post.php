<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
		<title>Page Title</title>
</head>

	<body>
		<?php
			/* This script receives five values from posting.html:
			first_name, last_name, email, posting, submit */
			// Get the values from the $_POST array:
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$posting =nl2br(strip_tags($_POST['posting']));
			$email = urlencode($_POST['email']);
			
			//Get word count:
			$words = str_word_count($posting);
			
			// Get a snippet of the posting:
			$posting = substr($posting, 0, 50);
			
			// Create a full name variable:
			$name = $first_name. ' '.$last_name;
			
			//Print a message:
			print "<div> Thank you, $name, for your posting:
			<p>$posting...</p>
			<p>($words words)</p></div>";
			
			
			// Print a message:
			print "<div> Thank you, $name, for your posting: <p>$posting</p> </div>";
			print "<p>Click <a href=\"thanks.php?name=$name&email=$email\">here</a> to continue.</p>";
			print 'Click <a href="thanks.php?name=' . $name . '&email=' .$email . '">here</a> to continue.';
		?>
		
	</body>

</html>