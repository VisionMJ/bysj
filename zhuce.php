<html>
<head>
<title>注册页面</title>
<script>
function check()
	{
		var username = document.getElementById("username").value;
		var password = document.getElementById("pwd").value;
		var password1 = document.getElementById("pwd1").value;

		if(username.length != 0 && password.length != 0 && password1.length != 0)
		{
			if(password === password1 )
					return true;
			else
			{
				alert("两次密码输入不一样");
				return false;
			}
		}
		else
		{
			alert("用户名或密码不能为空");
			return false;
		}
	}
</script>
</head>
<body>
<form action="reg.php" method="post" onSubmit="return check()">
用户名:<input type="text" name="username" id="username" /><br>
密&nbsp;码:<input type="password" name="pwd" id="pwd" /><br>
重&nbsp;复:<input type="password" name="pwd1" id="pwd1" /><br>
<input type="submit" value="注册" />
	<a href="load.php">若已注册，请登录！</a>
</form>
</body>
</html>
