<?php
/* 
 CONNECT-DB.PHP
 Allows PHP to connect to your database
*/

 // Database Variables (edit with your own server information)
 $server = 'localhost';
 $user = 'root';
 $pass = 'csirhrdg';
 $db = 'gnr';

 $connection = mysql_connect($server, $user, $pass)
 or die("could not connect to server..... \n" . mysql_error());
 mysql_select_db($db)
 or die("could not connect to database.... \n" . mysql_error());
?>
