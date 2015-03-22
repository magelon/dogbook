<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
		<title>Page Title</title>
</head>

	<body>
	<h1>Mmm...soups</h1>
		<?php
			// Create the array
			$soups = array (
			'Monday' => 'Clam Chowder',
			'Tuesday' => 'White Chicken Chili',
			'Wednesday' => 'Vegetarian'
			);
			
			// Try to print the array:
			print "<p>$soups[Monday]</p>";
			
			// Print the contents of the array:
			print_r ($soups);
			
			$count1 = count ($soups);
			print "<p>The soups array originally had $count1 elements.</p>";
			
			// Add three items to the array:
			$soups['Thursday'] = 'Chicken Noodle';
			$soups['friday'] = 'Tomato';
			$soups['Saturday'] = 'Cream of Broccoli';
			
			// Count and print the number of elements again:
			$count2 = count ($soups);
			print "<p>After adding 3 more soups, the array now has $count2 elements.</p>";
			
			// Print the content of the array:
			print_r ($soups);
			
			foreach ($soups as $day => $soup){
			print "<p>$day: $soup</p>\n";
			}
			
			$books = array ('computer','apple','bananas');
			$meats = array ('steaks', 'hamburgers', 'pork chop');
			$groceries = array ('books' => $fruits,
			'meats' => $meats,
			'other' => 'peanuts',
			'cash' => 30.00
			);
			
			
			
			
		?>
		
	</body>

</html>