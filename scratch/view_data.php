<?php 
 
 // connect to the database
 include('php_conn.php');
 
 // check if the form has been submitted. If it has, start to process the form and save it to the database
 if (isset($_POST['submit']))
 	{ 
 		// get form data, making sure it is valid
 		$firstname = mysql_real_escape_string(htmlspecialchars($_POST['firstname']));
 		$lastname = mysql_real_escape_string(htmlspecialchars($_POST['lastname']));
 		$uploadimage = mysql_real_escape_string(htmlspecialchars($_POST['uploadimage']));
 
 		// save the data to the database
 		mysql_query("INSERT details SET firstname='$firstname', lastname='$lastname', uploadimage='$uploadimage'")
 		or die(mysql_error()); 
 		$id = mysql_insert_id();
 		
 		// once saved, redirect back to the view page
 		//header("Location: view_data.php"); 
 	}

?>


<html>
<head>
<title>PHP AJAX Image Upload</title>
<link href="Form.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
$(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "upload.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			$("#targetLayer").html(data);
		    },
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
</head>
<body>
<div class="bgColor">
<form id="uploadForm" action="upload.php" method="post">
<div id="targetLayer">No Image</div>
<div id="uploadFormLayer">
<label>Upload Image File:</label><br/>
<input name="userImage" type="file" class="inputFile" />
<input type="submit" value="Submit" class="btnSubmit" />
</form>
</div>
</div>
</body>
</html>

<?php
echo $targetLayer;
?>