<?php

require('db.php');
$id_updated = $_POST['id_edit'];
$fristname_updated = $_POST['firstname_edit'];
$lastname_updated = $_POST['lastname_edit'];
$gender_updated = $_POST['gender_edit'];
$pob_updated = $_POST['pob_edit'];
$address_updated = $_POST['address_edit'];
$phone_updated = $_POST['phone_edit'];
$status_updated = $_POST['status_edit'];

$sql = "UPDATE imagedb SET firstname='$fristname_updated', lastname='$lastname_updated', gender='$gender_updated', pob='$pob_updated', address='$address_updated', phone='$phone_updated', status='$status_updated' WHERE id=$id_updated"; 
mysql_query($sql);

echo "You have successfully updated your submission<br>";
echo "Click below to view your application inputs";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Updated Form</title>
</head>
<body>
<div>
	<form action="view_updated_application.php">
		<input type="submit">
	</form>
</div>
</body>
</html>