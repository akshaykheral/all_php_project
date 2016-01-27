<?php
/*
$server = "localhost";
$options = array(  "UID" => "sa",  "PWD" => "sa",  "Database" => "Sample1");
$conn = sqlsrv_connect($server, $options);
	if ($conn === false) die("<pre>".print_r(sqlsrv_errors(), true));
	echo "Successfully connected!";
sqlsrv_close($conn);





$dbName = $_SERVER["C:\Users\HP\Documents\project1.accdb"];
if (!file_exists($dbName)) {
    die("Could not find database file.");
}
$db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.accdb)}; DBQ=$dbName; Uid=; Pwd=;");
$data = $conn->Execute("SELECT * FROM Table2");

$rs = odbc_exec($db, $data);
if (!$rs)
	{
		exit("Error in sql");
	}
echo "<table><tr>";
echo "<th>name</th>";
echo "<th>fname</th>";
while (odbc_fetch_row($rs))
	{
		$compname = odbc_result($rs, "name");
		$conname = odbc_result($rs, "fname");
		echo "<tr><td>$compname</td>";
		echo "<td>$conname</td></tr>";
	}
odbc_close($conn);
echo "</table>";
*/

 <?php
// Replace the value of these variables with your own data
$user = '';
$pass = '';
$server = '';
$database = 'project1';

// No changes needed from now on
$connection_string = "DRIVER={SQL Server};SERVER=$server;DATABASE=$database";
$conn = odbc_connect($connection_string,$user,$pass);

if ($conn) {
    echo "Connection established.";
} else{
    die("Connection could not be established.");
}
?>
?>
