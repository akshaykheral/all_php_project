<?php

	require('db.php');
	$sql = "SELECT MAX(id) from imagedb";
	$result = mysql_query($sql);

	$last_id = mysql_result($result,0);
	

	$sql1 = "SELECT * FROM imagedb WHERE id=$last_id";
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
	$doc_link = $row['document'];

	 	  echo "<div align='center'><strong>Your ID:</strong>" . $id_edit . "</div><br>";
		  echo "<div align='center'><strong>First Name:</strong> " . $firstname_edit . "</div><br>";
		  echo "<div align='center'><strong>Last Name:</strong> " . $lastname_edit  . "</div><br>";
		  echo "<div align='center'><strong>Gender:</strong> " . $gender_edit  . "</div><br>";
		  echo "<div align='center'><strong>Place of Birth:</strong> " . $pob_edit  . "</div><br>";
		  echo "<div align='center'><strong>Residential Address:</strong> " . $address_edit  . "</div><br>";
		  echo "<div align='center'><strong>Phone No.:</strong> " . $phone_edit  . "</div><br>";
		  echo "<div align='center'><strong>Qualification:</strong> " . $status_edit  . "</div><br>";
		  echo "<div align='center'><strong>Your image:</strong><p/><img src =get.php?id=$id_edit></div>";
		  echo "<div align='center'><strong>Document:</strong> " . $doc_link  . "</div><br>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Final Applcation</title>
</head>
<body>
<h>Go to Admin Panel</h>
<form action="admin_panel.php">
	<input type="submit">
</form>
</body>
</html>
