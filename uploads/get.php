<?php
require('db.php');

$id = $_REQUEST['id'];

$image = mysql_query("SELECT * FROM imagedb WHERE id=$id");

$image = mysql_fetch_assoc($image);

$image = $image['image'];
$firstname = $firstname['firstname'];
$lastname = $lastname['lastname'];
echo $firstname;
echo $lastname;

header("Content-type: image/jpeg");

echo $image;
?>