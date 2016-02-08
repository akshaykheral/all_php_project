<?php
	require('db.php');

	$doc_path = "C:\inetpub\wwwroot/temp/";

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
		  /*
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
		  */
		  echo "<table border='1' style='width:100%' align='center'>";
		  echo "<tr>";
		  echo "<th>Particulars</th>";
		  echo "<th>Inputs</th>";
	      echo "</tr>";
	      echo "<tr align='center'>";
		  echo "<td><font color='red'>First Name</font></td>";
		  echo "<td>" . $firstname . "</td>";
	  	  echo "</tr>";
		  echo "<tr align='center'>";
		  echo "<td><font color='red'>Last Name</font></td>";
		  echo "<td>" . $lastname . "</td>";
	 	  echo "</tr>";
		  echo "<tr align='center'>";
		  echo "<td><font color='red'>Gender</font></td>";
		  echo "<td>" . $gender . "</td>";
		  echo "</tr>";
		  echo "<tr align='center'>";
		  echo "<td><font color='red'>Place of Birth</font></td>";
		  echo "<td>" . $pob . "</td>";
	  	  echo "</tr>";
	  	  echo "<tr align='center'>";
		  echo "<td><font color='red'>Address</font></td>";
		  echo "<td>" . $address . "</td>";
		  echo "</tr>";
		  echo "<tr align='center'>";
		  echo "<td><font color='red'>Qualification</font></td>";
		  echo "<td>" . $status . "</td>";
		  echo "</tr>";
		  echo "<tr align='center'>";
		  echo "<td><font color='red'>Image</font></td>";
		  echo "<td><img src =get.php?id=$lastid></td>";
		  echo "</tr>";
		  echo "<tr align='center'>";
		  echo "<td><font color='red'>Document</font></td>";
		  echo "<td>" . $doc_link . "</td>";
		  echo "</tr>";
		  echo "</table>";
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