<?php
	$correct= 0;
	$Q1 = $_POST["Q1"];
	$Q2 = $_POST["Q2"];
	$Q3 = $_POST["Q3"];

	if (!empty($Q1) && $Q1 == "PHP") {
		$correct += 1 ;
	}
	if (!empty($Q2)&& $Q2 == "JavaScript") {
		$correct += 1 ;
	}
	if (!empty($Q3)&& $Q3 == "JSP") {
		$correct += 1 ;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<div>
	<div>你的成績=<?php echo ((100.0*$correct)/3.0) ?>分</div>
	Q1:答案:"<?php echo "$Q1"?>" -正確:PHP <br>
	Q2:答案:"<?php echo "$Q2"?>" -正確:JavaScript <br>
	Q3:答案:"<?php echo "$Q3"?>" -正確:JSP <br>

</div>
</body>
</html>