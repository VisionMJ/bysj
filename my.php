<?php
session_start();
/*首先判断session中用户名是否存在，若不存在返回登录页面，否则显示欢迎信息*/

if(!empty($_SESSION['userName']))
{
	echo "欢迎您:".$_SESSION['userName']." 登录时间: ".date('Y-m-d H:m:s');
	
}
else
	echo "<a href='load.php'>请返回登录界面</a>";
?>