<?php
/* Have fun, made by StuntmanPackage 
Date: February 16 2021  */

	$round1 = 42;
	$round2 = 38;
	$round3 = 36;
	$total = $round1 + $round2 + $round3;
	$average = round(($total / 3), 1);
	
	echo "Total time over the three laps is: " . $total . " seconds. <br/>";
	echo "The average lap time is: " .$average . " seconds.";
?>
