<?php
	// header("Content-type: image/png");
	// $img = imagecreate(250, 150);
	// imagecolorallocate($img, 123, 145, 32);
	// imagepng($img);
	// imagedestroy($img);

	header("Content-type: image/jpeg");
	$img = imagecreate(500, 500);
	imagecolorallocate($img, 124, 111, 145);
	imagejpeg($img);
	imagedestroy($img);
?>
