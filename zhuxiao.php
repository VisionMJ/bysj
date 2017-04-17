<?php
session_start();


if(!empty($_SESSION['userName']))
{
	
	unset($_SESSION['userName']);
	echo "zxcg";
	
}
else{
	echo "error";
}
	
?>