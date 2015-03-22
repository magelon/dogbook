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
		print "<p><h3>{$row['title']}</h3>
		{$row['entry']}<br /></p><hr />";}
		
		mysql_close($dbc);}
		
		?>
		<?php
	include('templates/footer.html');
	?>