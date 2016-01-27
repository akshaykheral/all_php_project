<?php

$conn = odbc_connect('db_test', '', '') or die("Error in Connection");
$sql = "select * from Table2";

$rs = odbc_exec($conn, $sql);
if (!$rs)
	{
		exit("Error in sql");
	}

echo "<h1>MS Access Table</h1>";
echo "<table><tr>";
echo "<th>ID</th>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Age</th>";
while (odbc_fetch_row($rs))
	{
		$conid = odbc_result($rs, "id");
		$confname = odbc_result($rs, "fname");
		$conlname = odbc_result($rs, "lname");
		$conage = odbc_result($rs, "age");

		echo "<tr><td>$conid</td>";
		echo "<td>$confname</td>";
		echo "<td>$conlname</td>";
		echo "<td>$conage</td></tr>";
	}

odbc_close($conn);
echo "</table>";

?>