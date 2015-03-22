<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
		<title>Page Title</title>
</head>

	<body>
		<?php
			print "Hello, world!";
			//send link to browser
			print "<a href=\"page.php\">link</a>";
			#send html to browser use \ to preceding quotation
			echo "<br/>";
			print "<span style=\"font-weight: bold;\">Hello, world!</span>";
			
		?>
		<p style="color: green;">Any HTML outside of the PHP tags will automatically go to the browser.
		</p>
		<?php
			phpinfo();
		?>
	</body>

</html>