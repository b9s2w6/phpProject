<?php
	include("./lib.php");
	session_start();
	$db_host = "localhost";
	$db_user="root";
	$db_pass="student";
	$db_name="webp_20170715";
	$connect = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	function mq($sql)
	{
		global $connect;
		return $connect->query($sql);
	}
?>