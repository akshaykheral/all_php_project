<html>
<body>

Welcome <?php echo $_POST["firstname"]; ?><br>
Your email address is: <?php echo $_POST["phone"]; ?><br>

<?php 
	
	require('db.php');  

	$firstname = addslashes($_POST["firstname"]);
	$lastname = addslashes($_POST["lastname"]);
	$phone = addslashes($_POST["phone"]);
	$state = addslashes($_POST["state"]);

	$sql = "INSERT INTO data VALUES ('', '$firstname', '$lastname', '$phone', '$state')";
	mysql_query($sql);



?>
<form action="index.php">
	<input type="submit" value="Home">
</form>
<?php exit();
 ?>
</body>
</html>