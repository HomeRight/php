<?php

	$file = "MyData.txt";
	if (file_exists($file)) {
		$data = file($file);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<ul>
<?php
	if (isset($data)) 
	{
		foreach ($data as $line ) 
		{
?>			
			<li>
<?php			
				$fields = explode(",", $line);
				foreach ($fields as $item ) 
				{
					echo "<p>$item</p>";
				}
?>				
			</li>
<?php				
		}
	}

?>

</ul>	
		
	
</body>
</html>