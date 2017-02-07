<?php
	
	$value = rand(1,3);

	switch ($value) {
		case 1:
			header("location: Ch1.php ");
			break;
		case 2:
			header("location: Ch2.php ");
			break;
		default:
			header("location: Ch1tset.php ");
			break;
	}
?>