<?php
session_start();
//开启session
require ("connect.php");
if (!empty($_SESSION['userName'])) {
	$username = $_SESSION['userName'];
	$sql="select * from friend where fo='$username' and zt = 't'";
	$result = mysql_query($sql);
	if($result) {


		$row = mysql_fetch_array($result);
		$i = 0;
		if ($row != "") {
			$rows[$i++] = $row['ft'];
			while ($infor = mysql_fetch_array($result)) {
				//把结果放到一个一维数组里
				$rows[$i++] = $infor['ft'];

			}
			echo json_encode($rows);
		} else {
			echo "";
		}
	}
	else{
		echo "";
	}

}
else {
	echo "";
}
?>