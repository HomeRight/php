<?php
	if (isset($_POST["send"])) 
	{
		$lat = $_POST["lat"];
		$lon = $_POST["lon"];
		if (!empty($lat)&&!empty($lon)) 
		{
			$para ="?lat=".$lat ."&lon=".$lon ;
			header("location:Ch14_5_2a.php".$para);
		}
		else
		{
			echo $result ="輸入的經緯座標錯誤";
		}
	}
	else
	{
		echo $result = "請輸入經緯座標";
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<form action="" method="post">
	<div>
		<label for="lat">緯度:</label>
		<input type="text" id="lat" name="lat"></input>
	</div>

	<div>
		<label for="lon">經度:</label>
		<input type="text" id="lon" name="lon"></input>
	</div>

	<input type="submit" name="send">顯示地圖</input>
</form><hr>

<?php
	echo $result;
?>
</body>
</html>