<?php

error_reporting(E_ERROR|E_WARNING|E_NOTICE);

function myErrorHandler($type,$msg,$file,$line)
{
	switch ($type) {
		case E_ERROR:
			echo "<b>致命錯誤:</b><br>";
			break;

		case E_WARNING:
			echo "<b>警告錯誤:</b><br>";
			break;
		
		default:
			echo "<b>注意錯誤:</b><br>";
			break;
	}

	$err = "檔案:$file 第:$line 行<br>";
	$err .="錯誤訊息:<b>$msg</b><br>";
	echo $err;
	error_log($err,3,"error.log");
	if ($type==E_ERROR) {
		echo "<font color=red>終止程式執行</font>";
		die();
	}
}
set_error_handler('myErrorHandler');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
$var++;
$x = 0; $y = 10;
$c =$y/$x;
echo "測試自訂PHP的錯誤處理函數結束";
?>
</body>
</html>