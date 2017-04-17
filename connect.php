<?php
$conn=@mysql_connect("localhost","root",""); //连接数据库
mysql_select_db("temp");  //选择数据库
mysql_query("SET names UTF8");  //设置字符编码UTF8
header("Content-Type: text/html; charset=UTF-8");
date_default_timezone_set("PRC"); //设置中国时区标准时间
?>