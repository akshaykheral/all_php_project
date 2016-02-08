<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <title>View Records</title>
</head>
<body>
<h1 align="center"><u><strong>G N Ramachandran Gold Medal Applicants</strong></u></h1>
<div align="center">
<form action="index.php">
<input type="submit" value="Submit Another Form"> <br>
</form>
</div>

<?php
/* 
  VIEW.PHP
  Displays all data from 'players' table
*/

  // connect to the database
  include('db.php');

  // get results from database
  $result = mysql_query("SELECT * FROM imagedb ORDER BY id ASC") 
    or die(mysql_error());  
    
  // display data in table

  echo "<table border='01' cellpadding='20'>";
  echo "<tr> 
        <th>ID</th> 
        <th>First Name</th> 
        <th>Last Name</th>
        <th>Gender</th> 
        <th>Place of Birth</th> 
        <th>Residential Address</th>
        <th>Phone</th>
        <th>Qualification</th>
        <th>Image</th>
        <th>Document</th>
        </tr>";

  // loop through results of database query, displaying them in the table
  while($row = mysql_fetch_array( $result )) {
    
    // echo out the contents of each row into a table
    echo "<tr>";
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['firstname'] . '</td>';
    echo '<td>' . $row['lastname'] . '</td>';
    echo '<td>' . $row['gender'] . '</td>';
    echo '<td>' . $row['pob'] . '</td>';
    echo '<td>' . $row['address'] . '</td>';
    echo '<td>' . $row['phone'] . '</td>';
    echo '<td>' . $row['status'] . '</td>';
    echo '<td> <img src=all_image_view.php?id=' . $row["id"] . ' /></td>';
    //echo '<td>' . $row['document'] . '</td>';
    echo '<td> <a href=http://192.168.250.204/temp/' . $row['document'] . ' target=_blank>Doc Link</a> </td>';
  

    echo "</tr>"; 
  } 

  // close table>
  echo "</table>";
?>



</body>
</html> 