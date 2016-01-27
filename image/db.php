<?php
	$host = "localhost";
	$username = "root";
	$password = "csirhrdg";
	$db_name = "test";

	mysql_connect($host, $username, $password) or die("Database not connect");
	mysql_select_db($db_name) or die("could not connect database");
	error_reporting('E_ERROR');
?>