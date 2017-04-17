<?php
session_start();	//开启session
require("connect.php"); 

$userName=trim($_POST["username"]);
$passWord=trim($_POST["pwd"]);
$passWord=md5($passWord);	//密码必须使用md5加密
$checkbox = $_POST['checkbox']; //获取复选框值

//查询用户名和密码
$result = mysql_query("select id from user where username='$userName' and password='$passWord'");
	
//查看结果集
$rows = mysql_fetch_array($result);

if($rows['id'] > 0)
{
	//用户登录成功
	$_SESSION['userName'] = $userName;  //将用户名赋值给$_SESSION['userName']
	if(!empty($checkbox[0]))
	{
		setcookie('userName',$userName,time()+10);
		setcookie('passWord',$passWord,time()+10);
	}
	header("Location:index.html");			//跳转到个人主页
}
else
	echo "<script>alert('登录失败');window.location.href='load.php';</script>";
	
mysql_free_result($result);		//关闭结果集

mysql_close($conn);

?>