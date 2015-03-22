



<?php
	//menus.php
	function make_date_menus(){
	
		$months = array (1 => 'Januzry', 'February', 'March', 'April', 'September', 'October', 'November', 'December', 'November', 'December');
		
		print '<select name="month">';

		foreach ($months as $key => $value){
		print "\n<option value=\"$key\">$value</option>";
		}
		
		print '</select>';
		
		// Make the day pull-down menu:
		print '<select name="day">';
			for($day=1; $day <=31; $day++){
				print "\n<option value=\"$day\">$day</option>";
				}
				print '</select>';
				
				// Make the year pull-down menu:
				print '<select name="year">';
				$start_year = date('Y');
				for($y=$start_year; $y<=($start_year + 10);$y++){
					print "\n<option value=\"$y\">$y</option>";
					}
					print '</select>';
				}// End of make_date_menus() function.

				// Make the form:
				print '<form action="" method="post">';
				make_date_menus();
				print '</form>';


?>