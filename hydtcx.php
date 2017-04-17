<?php
/**
 * Created by PhpStorm.
 * User: Administrater
 * Date: 2017/3/15
 * Time: 15:16
 */
//主要是在好友表中查找自己的好友
require("connect.php");
$haoyou = array();
$haoyoudt = array();
$userName=trim($_POST["username"]);
//$userName = "吴奇隆";
$sql ="select ft from friend where fo='$userName' and zt = 't'";
$sql2 = "select fo from friend where ft='$userName' and zt = 't'";

$result1 = mysql_query("select ft from friend where fo='$userName' and zt = 't'");
$result2 = mysql_query("select fo from friend where ft='$userName' and zt = 't'");

//echo $result;
while($a = mysql_fetch_assoc($result1)){
    array_push($haoyou,$a['ft']);
}
while($a1 = mysql_fetch_assoc($result2)){
    array_push($haoyou,$a1['fo']);
}
array_push($haoyou,$userName);//将自己的用户名写入数组
for($i = 0; $i<count($haoyou); $i++){
    $g = $haoyou["$i"];
    $result3 = mysql_query("select * from dongtai where username = '$g'");
    while($a3 = mysql_fetch_assoc($result3) ){
        $haoyoudt[]= $a3;
    }

}

echo json_encode($haoyoudt);
//echo json_encode($haoyou);


