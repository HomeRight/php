<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="Ch14_3_2.css">
	<script src="jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="Ch14_3_2.js"></script>
</head>
<body>

<form action="">
	<div>
		<label for="name"></label>
		<input type="text" id="name" name="name" value="陳會安"></input>
	</div><br>
	<div>
		<select id="type" name="type">
			<option value="date" selected>日期</option>
			<option value="time">時間</option>
		</select>
	</div><br>
	<input type="submit" value="送出"></input>
</form><br>

<div class="box">
	<div id="date"></div><br>
	<div id="myname"></div>	
</div><br>
<a href="" class="tabs">載入網頁</a><br>
</body>
</html>