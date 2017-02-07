<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
PHP檔案在快取保留到:<br>
<?php
header("Expires:". gmdate("D, d M Y H:i:s",mktime(0,0,0,12,31,2016))." GMT");

echo gmdate("D, d M Y H:i:s",mktime(0,0,0,12,31,2016))." GMT<br>" ;
echo date("D, d M Y H:i:s",mktime(0,0,0,12,31,2016)) ."<br>" ;
?>

</body>
</html>