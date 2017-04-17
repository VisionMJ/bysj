<?php
require("connect.php");
$result1 = mysql_query("select * from friend where fo='test1' and ft = 'test'");
$result2=mysql_query("select * from dongtai where id = '12'");
$rows1 = mysql_fetch_array($result1);
$rows2 = mysql_fetch_array($result2);
echo $rows2['neirong'];
if ($rows1=="")
{
    echo "1";
}
else{
    echo "2";
}

echo "1";
?>
