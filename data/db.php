<?php

$server = 'localhost';
$user  = 'root';
$password = 'csirhrdg';
$db_name = 'test';

mysql_connect($server, $user, $password) or die("Could not connect to server...." . mysql_error());
mysql_select_db($db_name) or die("Could not connect to database..." . mysql_error());

?>