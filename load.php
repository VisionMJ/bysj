<?php
session_start();	//开启session
if(!empty($_COOKIE['userName'])  && !empty($_COOKIE['passWord']))
{
	$_SESSION['userName'] = $_COOKIE['userName'];
	header("Location:index.html");
}
?>
<html>
<head>
<title>登录页面</title>
<head>
<body>
<form action="verify.php" method="post">
用户名:<input type="text" name="username" /><br>
密&nbsp;码:<input type="password" name="pwd" /><br>
记住密码:<input type="checkbox" name="checkbox[]" value="1"/>
<input type="submit" value="登录" />
	<a href="zhuce.php">若未注册，请注册！</a>
</form>
<body>
</html>
