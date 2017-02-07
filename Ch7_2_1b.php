<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<div>
		<h1>Q2:請問下列哪一個不是伺服端網頁技術</h1>
		<div>
			<form method="post" action="Ch7_2_1c.php">
				<input type="radio" name="Q2" id="JavaScript" value="JavaScript"></input>
				<label for="JavaScript">JavaScript</label><br>
				<input type="radio" name="Q2" id="ASP.NET" value="ASP.NET"></input>
				<label for="ASP.NET">ASP.NET</label><br>
				<input type="radio" name="Q2" id="PHP" value="PHP"></input>
				<label for="PHP">PHP</label><br>
				<input type="radio" name="Q2" id="JSP" value="JSP"></input>
				<label for="JSP">JSP</label><br>
				<input type="submit" value="下一題"></input>
				<input type="hidden" name="Q1" id="Q1" value="<?php echo $_POST["Q1"] ?>"></input>
			</form>
		</div>
	</div>
</body>
</html>