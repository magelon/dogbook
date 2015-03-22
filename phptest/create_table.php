<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
		<title>Page Title</title>
</head>

	<body>
		<?php
			// Create_table.php
			// Connect and select:
			if ($dbc =@mysql_connect('localhost','root','1234')){
			
				// Handle the error if the database could't be selected:
				if (!@mysql_select_db('myblog', $dbc)){
					print '<p style="color: red;">Could not select the database because:<br />'.
					mysql_error($dbc). '.</p>';
					mysql_close($dbc);
					$dbc = FALSE;
					}
				}else{ // Connection failure.
					print '<p style= "color: red;">Could not connect to MySQL: <br />'. mysql_error() . '.</p>';
					}
				if($dbc){
					// Define the query:
					$query = 'CREATE TABLE entries(
					entry_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
					title VARCHAR(100) NOT NULL,
					entry TEXT NOT NULL, 
					date_entered DATETIME NOT NULL
					)';
					
					//Execute the query:
					if (@mysql_query($query, $dbc)){
						print '<p>The table has been created!</p>';
						}else{
						print '<p style="color: red;">
						Could not create the table because:<br />'.
						mysql_error($dbc).'.<p/>';
						}
						
						mysql_close($dbc); //Close the connection.
						}
			
		?>
		
	</body>

</html>