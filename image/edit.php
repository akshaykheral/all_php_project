<?php

require('db.php');

 	$firstname = addslashes($_POST['firstname']);
	$lastname = addslashes($_POST['lastname']);

	echo $firstname;

	echo $lastname;
	echo "Hello......";

?>

<!--
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>Edit Record</title>
 </head>
 <body>
 <form action="" method="post">

 <div>
 <p><strong>ID:</strong> <?php //echo $id; ?></p>
 <strong>First Name: *</strong> <input type="text" name="firstname" value="<?php// echo $firstname; ?>"/><br/>
 <strong>Last Name: *</strong> <input type="text" name="lastname" value="<?php// echo $lastname; ?>"/><br/>
 <p>* Required</p>
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
 </body>
 </html> 