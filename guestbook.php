<?php

	// if (isset($_POST["send"])) {
		$name = $_GET["name"];
		$email = $_GET["email"];
		$message = $_GET["message"];
	// }
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>新增訪客留言</h1><hr>
<?php
	$file = "guestbook.txt" ;
	$msg = "" ;
	if (!file_exists($file)) {
		$fp = fopen($file, "w");
		fclose($fp);
	}

	$fp = fopen($file, "a");
	$today = date("Y年m月d日 星期w h:i:s a");
	$msg .= "<b>留言時間:</b>".$today."<br>";
	$msg .= "<b>姓名:</b>".$name ."<br>" ;
	$msg .="<b>電子郵件:</b>".$email."<br>";
	$msg .="<b>留言:</b>".$message."<br><hr>\r\n";
	fputs($fp,$msg);
	fclose($fp);
	echo $msg;

?>
|<a href="Ch15_2_2.php">新增留言</a>|<a href="showmessage.php">檢視留言</a>|
</body>
</html>