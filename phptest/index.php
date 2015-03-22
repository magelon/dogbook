<?php
include('templates/header.html');

?>
<div id="content">
			<!-- BEGIN CHANGEABLE CONTENT. -->
			<h2>Welcome to doge book!</h2>
			<p>
			Doge book is an online social 
			networking service headquartered in 
			some place, California.
			We design a place let dogs talk</p>
			<h2>Another Header</h2>
			<p>After registering to use the site, users can create a User profile, 
			add other users as "friends", exchange messages, post status updates and photos, 
			share videos and receive notifications when others update their profiles. 
			Additionally, users may join common-interest user groups, organized by workplace, 
			school or college, or other characteristics, 
			and categorize their friends into lists such as "People From Work" or "Close Friends". </p>
			<!-- END CHANGEABLE CONTENT. -->
			<hr />
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
			</div><!-- content -->
			
			
			<?php
			
			include('templates/footer.html');
			
			?>