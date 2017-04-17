<?php
require("connect.php");
$userName=trim($_POST["username"]);//要添加的id
$userName1=trim($_POST["username1"]);//用户id

$result = mysql_query("select * from user where username='$userName'");
//首先判断要添加的id是否已经注册
$rows = mysql_fetch_array($result);
	if($rows=="")
	{
		echo "no";
	}
	else
	{
		//在数据库中查找2者之间的关系，若未查找到，则添加关系
		$result1 = mysql_query("select * from friend where fo='$userName1' and ft = '$userName'");
		$result3 = mysql_query("select * from friend where fo='$userName' and ft = '$userName1'");
		$rows1 = mysql_fetch_array($result1);
		$rows3 = mysql_fetch_array($result3);
		//第一个if是查看数据表中有没有两者之间的关系
		if($rows1==""&&$rows3 == "")
		{
			$result2 = mysql_query("insert into friend(fo,ft,zt)value('$userName1','$userName','f')");
			$rows2=mysql_affected_rows();
			if($rows2 > 0){
				echo "fs";
			}
			else
			{
				echo "sb";
			}


		}
		//第二个if是判断用户之前有没有申请过以及关系
		else if($rows1!=""&&$rows3 == ""){
			if($rows1['zt']=="t")
			{
				echo "t";
			}
			if($rows1['zt']=="f")
			{
				echo "f";
			}
		}
		//第三个if是判断用户之前有没有被这个id申请过以及关系；
		else if($rows1==""&&$rows3 != "")
		{
			if($rows3['zt']=="f")
			{

			$result4 = mysql_query("update friend set zt = 't' where fo='$userName' and ft='$userName1'");
			$line = mysql_affected_rows();
			if($line>0)
			{
				echo "fs";
			}
			else{
				echo "sb";
			}
			}
			if($rows3['zt']=="t")
			{
				echo "t";
			}

		}
	
	}
	mysql_close($conn);
?>
