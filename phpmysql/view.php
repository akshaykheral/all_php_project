<?php

error_reporting(0);

$conn = mysql_connect("localhost","root","csirhrdg");

if($conn) 
{
	mysql_select_db("phpmysql", $conn) or die("Error......" . mysql_error());
}
else
{
	echo "error connection....";
}

if (isset($_POST['submit'])) 
{

	$studentname = $_POST['studentname'];
	$gender = $_POST['gender'];
	$pob = $_POST['pob'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$status = $_POST['status'];

	$sql = "INSERT INTO tblstudent (studentname, gender, pob, address, phone, status) VALUES ('$studentname','$gender','$pob','$address','$phone', '$status')";
	$insertdb = mysql_query($sql);

	if ($insertdb) 
	{
		echo "Successful.....";
	}
	else
	{
		echo "please try again";
	}

}
mysql_close($conn);

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table style="border:1 solid #FOO;">
		<thead style="border:1 solid #FOO; background:#90F;">
			<th>ID</th>
			<th>Student Name</th>
			<th>Place of Birth</th>
			<th>Address</th>
			<th>Phone</th>
			<th>Status</th>
			<th>Action</th>
		</thead>
		<tbody style="border:1 solid #FOO; background:#FFF;">
			
<?php
	$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'csirhrdg';
   
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
    if(! $conn ) 
    {
    	die('Could not connect: ' . mysql_error());
    }
	
	$sql = 'SELECT * FROM tblstudent';
		mysql_select_db('phpmysql');
    $retval = mysql_query( $sql, $conn );
   
    if(! $retval ) 
    {
    	die('Could not get data: ' . mysql_error());
    }
		while ($row = mysql_fetch_object($retval)) 
		{
			echo "<tr>
				  <td>$row->id</td>
				  <td>$row->studentname</td>
				  <td>$row->pob</td>
				  <td>$row->address</td>
				  <td>$row->phone</td>
				  <td>$row->status</td>
				  <td>
				  		<a href='index.php?id='  {$row->id}  '>Edit</a>
				  		<a href='index.php?id='{$row->id}'>Delete</a>
				  </td>

				  </tr>";
		}
?>
		</tbody>
	</table>
	</form>
<div>
	<form action="index.php" method="get">
		<input type="submit" value="INSERT DATA"> 
	</form>
</div>
</div>
</div>
</body>
</html>