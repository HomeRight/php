<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<div>
		<h1>Q3:請問下列哪一個不是客戶端網頁技術</h1>
		<div>
			<form method="post" action="Ch7_2_1.php">
				<input type="radio" name="Q3" id="JavaScript" value="JavaScript"></input>
				<label for="JavaScript">JavaScript</label><br>
				<input type="radio" name="Q3" id="Ajax" value="Ajax"></input>
				<label for="Ajax">Ajax</label><br>
				<input type="radio" name="Q3" id="JQuery" value="JQuery"></input>
				<label for="JQuery">JQuery</label><br>
				<input type="radio" name="Q3" id="JSP" value="JSP"></input>
				<label for="JSP">JSP</label><br>
				<input type="submit" value="交卷"></input>
				<input type="hidden" name="Q1" id="Q1" value="<?php echo $_POST["Q1"] ?>"></input>
				<input type="hidden" name="Q2" id="Q2" value="<?php echo $_POST["Q2"] ?>"></input>
			</form>
		</div>
	</div>
</body>
</html>