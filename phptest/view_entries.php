<?php
include('templates/header2.html');

?>
		<?php //view_entries.php
		// Connect and select:
		$dbc = mysql_connect('localhost', 'root', '1234');
		mysql_select_db('myblog', $dbc);
		
		// Define the query:
		$query = 'SELECT * FROM entries ORDER BY date_entered DESC';
		if ($r = mysql_query($query, $dbc)) { // Run the query.
		// Retrieve and print every record:
		while ($row = mysql_fetch_array($r)) {
		print "
		<!--<p>{$row['entry_id']}</p>--> <br />
		<p><h3>{$row['title']}</h3>
		{$row['entry']}<br />
		
		<a href=\"edit_entry.php?id={$row['entry_id']}\">Edit</a>
		<a href=\"delete_entry.php?id={$row['entry_id']}\">Delete</a>
		</p><hr />\n";
		}

		} else { // Query didn't run.
		print '<p style="color: red;">Could not retrieve the data because:<br />' . mysql_error($dbc)
		. '.</p><p>The query being run was: ' . $query . '</p>';
		} // End of query IF.

		mysql_close($dbc); // Close the connection.
		
			
		?>
		
			<?php
			include('add_entry.php');
			?>

	<?php
	include('templates/footer.html');
	?>