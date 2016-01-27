<?php
$host = 'localhost';
$user = 'root';
$pass = 'csirhrdg';
$db_name = 'gnr';

$conn = mysql_connect($host, $user, $pass, $db_name)
or die("Could not connect to server... \n" . mysql_error());

mysql_select_db($db_name)
or die("Could not connect to database... \n"  . mysql_error());

?>