<?php
    $conn = mysql_connect("localhost", "root", "csirhrdg");
    mysql_select_db("test");
    $sql = "SELECT imageId FROM output_images ORDER BY imageId DESC"; 
    $result = mysql_query($sql);
?>
<HTML>
<HEAD>
<TITLE>List BLOB Images</TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>
</HEAD>
<BODY>

<?php
	while($row = mysql_fetch_array($result)) {
	?>
 

	<td>	<img src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" /></td>

	
<?php		
	}
    mysql_close($conn);
?>

</BODY>
</HTML>