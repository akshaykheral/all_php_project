<!DOCTYPE html>
<html>
<head>
	<title>Insert Data into Database</title>
</head>
<body>
	<form action="welcome.php" method="POST" enctype="multipart/form-data">
		<strong>FIRST NAME: </strong>
			<input type="text" name="firstname"><br /><br />
		<strong>LAST NAME: </strong>
			<input type="text" name="lastname"><br /><br />
		<strong>Phone Number: </strong>
			<input type="text" name="phone"><br /><br />
		<strong>State: </strong>
			<input type="text" name="state"><br /><br />

			<input type="submit" value="Submit"><br />
	</form>

<?php 
	
	require('db.php');  

	$firstname = addslashes($_POST["firstname"]);
	$lastname = addslashes($_POST["lastname"]);
	$phone = addslashes($_POST["phone"]);
	$state = addslashes($_POST["state"]);

	$sql = "INSERT INTO data VALUES ('', '$firstname', '$lastname', '$phone', '$state')";
	mysql_query($sql);

	 


?>
</body>
</html>