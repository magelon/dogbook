<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
		<title>Page Title</title>
</head>

	<body>
		<?php
		$name = $_GET['name'];
		$email = $_GET['email'];
		print "<p>Thank you, <span style=\"font-weight: bold;\"> $name<br />$email</span>!</p>";
		?>
	</body>

</html>