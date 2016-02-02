<?php

require('db.php');

if (isset($_GET['id'])) 
{
	$sql = "SELECT image FROM imagedb WHERE id=" . $_GET['id'];
	$result = mysql_query($sql) or die("Problem retrieving an Image" . mysql_error());
	$row = mysql_fetch_array($result);
	echo $row["image"];
}

?>