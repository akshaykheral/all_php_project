<?php


if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
	mysql_connect("localhost", "root", "csirhrdg");
	mysql_select_db ("test");
	
	$imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
	$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
	
	$sql = "INSERT INTO output_images(imageType ,imageData)
	VALUES('{$imageProperties['mime']}', '{$imgData}')";
	$current_id = mysql_query($sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());
	if(isset($current_id)) {
		header("Location: listImages.php");
	}
}
}
?>
<HTML>
<HEAD>
<TITLE>Upload Image to MySQL BLOB</TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
<form name="frmImage" enctype="multipart/form-data" action="" method="post" class="frmImageUpload">
<label>Firstname:</label>
<input name="userFirstname" type="text" /><br/>
<label>LAstname:</label>
<input name="userLastname" type="text" /><br/>

<label>Upload Image File:</label>

<input name="userImage" type="file" class="inputFile" />

<input type="submit" value="Submit"  name="submit" class="btnSubmit" />
</form>
</div>
</BODY>
</HTML>