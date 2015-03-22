<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
		<title>Page Title</title>
</head>

	<body>
		<?php
			ini_set ('dispaly_errors',1);
			error_reporting (E_ALL | E_STRICT);
			$name = $_GET['name'];
			print "<p>Hello, <span style=\"font-weight: bold;\"> $name</span>!</p>";
			
		?>
		
	</body>

</html>