<?php
require("connect.php");

$userName=trim($_POST["username"]);
$passWord=trim($_POST["pwd"]);		//获取密码
$passWord=md5($passWord);			//密码采用md5加密

//创建user表，密码长度修改为32位，密码采用md5()加密，md5加密后字符串长度为32位
mysql_query("create table if not exists user
(id int unsigned not null auto_increment primary key,
username varchar(16) not null,password char(32) not 
null)engine=MyISAM default charset=UTF8");

$result = mysql_query("select * from user where username='$userName'");
	
$rows = mysql_fetch_array($result);
	if($rows['id'] > 0)
	{
		mysql_free_result($result);
			echo "<script>alert('此用户名已经被占用!');
		window.location.href='zhuce.php';</script>";
	}
	else
	{
		//插入用户名和密码,密码采用md5加密
		mysql_query("insert into user(username,password) 
		values('$userName','$passWord')");
		
		//受影响的行数
		$lines = mysql_affected_rows();
		if($lines > 0)
			echo "<script>alert('注册成功!');
		window.location.href='load.php';</script>";
		else
			echo "<script>alert('注册失败!');
		window.location.href='zhuce.php';</script>";
	}
	mysql_close($conn);
?>