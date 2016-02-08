<!DOCTYPE html>
<html>
<head>
	<title>Edit Application</title>
</head>
<body>
<?php

	require('db.php');
	$sql = "SELECT MAX(id) from imagedb";
	$result = mysql_query($sql);

	$last_id = mysql_result($result,0);
	

	$sql1 = "SELECT id, firstname, lastname, gender, pob, address, phone, status FROM imagedb WHERE id=$last_id";
	$result1 = mysql_query($sql1);

	while ($row = mysql_fetch_assoc($result1))
	{

	$id_edit = $row['id'];
	$firstname_edit = $row['firstname'];
	$lastname_edit = $row['lastname'];
	$gender_edit = $row['gender'];
	$pob_edit = $row['pob'];
	$address_edit = $row['address'];
	$phone_edit = $row['phone'];
	$status_edit = $row['status'];
}
?>

<div align="center">
	<form action="updated_view.php" method="post">
		<br><strong>ID: </strong><input type="hidden" name="id_edit" value="<?php echo $id_edit; ?>"></br>
		<br><strong>First Name: </strong><input type="text" name="firstname_edit" value="<?php echo $firstname_edit; ?>"></br>
		<br><strong>Last Name: </strong><input type="text" name="lastname_edit" value="<?php echo $lastname_edit; ?>"></br>
		<br><strong>Gender: </strong><input type="text" name="gender_edit" value="<?php echo $gender_edit; ?>"></br>
		<br><strong>Place of Birth: </strong><input type="text" name="pob_edit" value="<?php echo $pob_edit; ?>"></br>
		<br><strong>Address: </strong><input type="text" name="address_edit" value="<?php echo $address_edit; ?>"></br>
		<br><strong>Phone: </strong><input type="text" name="phone_edit" value="<?php echo $phone_edit; ?>"></br>
		<br><strong>Status: </strong><input type="text" name="status_edit" value="<?php echo $status_edit; ?>"></br>
		<br><input type="submit" value="Update"></br>
	</form>
</div>
</body>
</html>