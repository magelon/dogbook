<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
		<title>Page Title</title>
</head>

	<body>
		<?php // view_quote.php
		
		// Read the file's contents into an array:
		$data = file('../quotes.txt');
		
		// Count the number of items in the array:
		$n = count($data);
		
		// Pick a random item:
		$rand =rand(0, ($n - 1));
		
		// Print the quotation:
		print '<p>' . trim($data[$rand]) . '</p>';
			
			
		?>
		
	</body>

</html>