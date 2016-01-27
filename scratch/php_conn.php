<?php

$server = 'localhost';
$host = 'root';
$password = 'csirhrdg';
$database = 'gnr';

$connection = mysql_connect($server, $host, $password)
or die("Could not connect to server.... \n" . mysql_error());
mysql_select_db($database)
or die("Could not connect to database.... \n" . mysql_error());

?>