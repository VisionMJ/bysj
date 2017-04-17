<?php
session_start();


if(!empty($_SESSION['userName']))
{
	echo $_SESSION['userName'];
	
}
else
	echo "error";
?>