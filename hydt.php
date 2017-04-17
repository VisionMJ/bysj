<?php

require("connect.php");

$nr=trim($_POST["neirong"]);
$uid=trim($_POST["user"]);
$shijian = time();

if (!empty($nr)){
	$sql = "insert into dongtai(username,neirong,date)values('$uid','$nr','$shijian')";
    mysql_query($sql);
    $line = mysql_affected_rows();
    if($line > 0){
        echo "yes";
       // echo $nr;
    }
    else{
        echo "no1";
    }

}
else{
    echo "no";
	}
?>