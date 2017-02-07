<?php
session_start();
if (isset($_GET["username"]))
{
	$username = $_GET["username"];
}
else
{
	$username="";
}
if ($username !="") 
{
	if ($username=="logout") 
	{
		$name = $_SESSION["username"];
		$msg="<div>使用者:<span class='name'>".$name."</span>離開聊天室</div>" ;

		$fp = fopen("message.html", "a+");
		fwrite($fp, $msg);
		fclose($fp);
		session_destroy();
		header("location: Ch15_index.php");
	}
	if (!isset($_SESSION["username"])) 
	{
		$_SESSION["username"] = $username ;
		$fp = fopen("message.html", "a+");

		$string = "<div>使用者:<span class='name'>".$username."</span>進入聊天室</div>" ;	
		fwrite($fp, $string);
		fclose($fp);

	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="chatroom.css">
	<script src="jquery-3.1.0.min.js"></script>
	<script type="text/javascript">
		$(function()
		{
			$('form#chat-form').submit(function(e){
				e.preventDefault();
				var message = $('#chatmessage').val();
				$.post("writechat.php",{text:message});
				$('#chatmessage').val('');
				return false ;
			});

			function loadContent()
			{
				var oldHeight = $('#chatwindow').prop("scrollHeight") -20 ;

				$.ajax({
					url:"message.html",
					cache:false,
					success:function(content)
					{
						$('#chatwindow').html(content);
						var newHeight = $('#chatwindow').prop("scrollHeight")-20;
						if (newHeight>oldHeight) 
						{
							$("#chatwindow").animate({scrollTop:newHeight},'slow');
						}
					}
				})
			}
			setInterval(loadContent,2000);
		})
	</script>
</head>
<body>

<?php 
	if (!isset($_SESSION['username'])) 
	{
?>
		<form action="Ch15_index.php">
			使用者名稱:<input type="text" name="username" id="username"></input>
			<input type="submit" value="登入"></input>
		</form>
<?php
	}
	else
	{
?>
		<div id="chatmenu">
			<div id="chattitle">
				<p>歡迎使用者:<?php echo $_SESSION['username'] ?></p>
				<a href="Ch15_index.php?username=logout">登出</a>
			</div>
			<div id="chatwindow">
				
			</div>
			<div id="chatform">
				<form id="chat-form">
					<input type="text" id="chatmessage" name="chatmessage"></input>
					<input type="submit" id="send" value="送出"></input>
				</form>
			</div>
		</div>


<?php		
	}
 ?>
</body>
</html>