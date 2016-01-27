
<?php
	require('db.php');

		 $firstname = addslashes($_POST['firstname']);
		 $lastname = addslashes($_POST['lastname']);
		 $gender = $_POST['gender'];
		 $pob = $_POST['pob'];
		 $address = $_POST['address'];
		 $phone = $_POST['phone'];
		 $status = $_POST['status'];
	     $file = $_FILES['image']['tmp_name'];

	
		 $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		 $image_name = addslashes($_FILES['image']['name']);
		 $image_size = getimagesize($_FILES['image']['tmp_name']);
		

		 if ($image_size == FALSE) 
		 {
		 	echo "That's not an image";
		 }
		 else
		 {
		 $path = "C:\Windows\Temp";
 		define ("filesplace",$path);

 		if (is_uploaded_file($_FILES['classnotes']['tmp_name'])) {

 		if ($_FILES['classnotes']['type'] != "application/pdf") {
 		echo "<p>Class notes must be uploaded in PDF format.</p>";
 		} else {
 				$name = $_POST['name'];
 $result = move_uploaded_file($_FILES['classnotes']['tmp_name'], filesplace."/$name.pdf");
 if ($result == 1)
 { 
 	echo "<p>Upload done .</p>";
 	$link =  $path . "/" . $name . ".pdf";
 	//$link1 = "C:\Windows\Temp\apdf.pdf";
 	echo $link."<br>";
   echo "<a href='C:\Windows\Temp\apdf.pdf'>click</a>";

 	
 }
 else
 { 
 	echo "<p>Sorry, Error happened while uploading . </p>";
 }
} #endIF
 } #endIF
		$sql = "INSERT INTO imagedb VALUES ('', '$image_name', '$image', '$firstname', '$lastname', '$gender', '$pob', '$address', '$phone', '$status', '$link') ";
		 mysql_query($sql);

		  $lastid = mysql_insert_id();

		  echo "<div align='center'><strong>Your ID:</strong>" . $lastid . "</div><br>";
		  echo "<div align='center'><strong>First Name:</strong> " . $firstname . "</div><br>";
		  echo "<div align='center'><strong>Last Name:</strong> " . $lastname  . "</div><br>";
		  echo "<div align='center'><strong>Gender:</strong> " . $gender  . "</div><br>";
		  echo "<div align='center'><strong>Place of Birth:</strong> " . $pob  . "</div><br>";
		  echo "<div align='center'><strong>Residential Address:</strong> " . $address  . "</div><br>";
		  echo "<div align='center'><strong>Phone No.:</strong> " . $phone  . "</div><br>";
		  echo "<div align='center'><strong>Qualification:</strong> " . $status  . "</div><br>";
		 echo "<div align='center'><strong>Your image:</strong><p/><img src =get.php?id=$lastid></div>";

   		 }

		 	
		 
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Details</title>
</head>
<body>
<div align="center">
<form action="edit.php" method="post" enctype="multipart/form-data">
	<input type="submit" value="Edit">
	<?php

		$firstname = addslashes($_POST['firstname']);
		$lastname = addslashes($_POST['lastname']);

	

	  ?>

</form>
<form action="success.php">
	<input type="submit" value="Submit">
</form>
</div>

</body>
</html>