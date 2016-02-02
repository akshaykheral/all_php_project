<?php
	require('db.php');

	$doc_path = "C:/Windows/Temp";

	define("filesplace", $doc_path);

		 $firstname = addslashes($_POST['firstname']);
		 $lastname = addslashes($_POST['lastname']);
		 $gender = $_POST['gender'];
		 $pob = $_POST['pob'];
		 $address = $_POST['address'];
		 $phone = $_POST['phone'];
		 $status = $_POST['status'];
	     $file = $_FILES['image']['tmp_name'];

	     $doc_name = $_POST['doc_name']; // document file name........................................

	
		 $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		 $image_name = addslashes($_FILES['image']['name']);
		 $image_size = getimagesize($_FILES['image']['tmp_name']);
		

		 if ($image_size == FALSE || $_FILES['document']['type'] != "application/pdf") 
		 {
		 	echo "That's not an image or Class notes must be uploaded in PDF format.";
		 }
		 else
		 {

         $result = move_uploaded_file($_FILES['document']['tmp_name'], filesplace."/$doc_name.pdf");
		 $doc_link  = $doc_name . ".pdf";  
		 $sql = "INSERT INTO imagedb VALUES ('', '$image_name', '$image', '$firstname', '$lastname', '$gender', '$pob', '$address', '$phone', '$status', '$doc_link') ";
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
		  echo "<div align='center'><strong>Document:</strong> " . $doc_link  . "</div><br>";

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


</form>
<form action="success.php">
	<input type="submit" value="Submit">
</form>
</div>

</body>
</html>