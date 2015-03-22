<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
		<title>Page Title</title>
</head>

	<body>
		<pre>
		<?php
		#show the value of the $_server variable:
			print_r ($_SERVER);
		?>
		</pre>
		<p>
		<?php
		$year= 2011;//The current year.
		$jun_avg= 88;//The average temperature for the month of june.
		$page_title= 'Weather Reports';//a title of the page.
		$number= 1;
		$floating_number= 1.2;
		$string= "Hello, world!";
		print $number;
		print "String is $string"."year is $year";
		$street= "100 Main Street";
		$city= "State College";
		$state= "PA";
		$zip= 94539;
		print "<br /><p2>The address is:<br />$street<br />$city $state $zip</p2>";
		?>
		</p>
	</body>

</html>