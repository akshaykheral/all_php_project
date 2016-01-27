

<!DOCTYPE html>
<html>
<head>
	<title>PHPMYSQL</title>
</head>
<body>
<div style="margin:auto; width:700px; background-color:#CCC; overflow:auto;">
<div style="margin:auto; width:100%; height:80px; text-align:center; color:#00F; background:#666; font-size:36px;">
	Candidate Information
</div>
<div style="margin:auto; width:300px">
	<form action="view.php" method="post">
	<table>
		<tr>
			<td>Student Name</td>
			<td>:</td>
			<td><input type="text" name="studentname" /></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>:</td>
			<td>
				<select name="gender" style="width:173px;">
					<option value="0">Male</option>
					<option value="1">Female</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Place of Birth</td>
			<td>:</td>
			<td><input type="text" name="pob" /></td>
		</tr>
		<tr>
			<td>Address</td>
			<td>:</td>
			<td><input type="text" name="address" /></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>:</td>
			<td><input type="text" name="phone" /></td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td>
				<input type="radio" name="status" value="SSB" />SSB
				<input type="radio" name="status" value="YSA" />YSA
				<input type="radio" name="status" value="GNR" />GNR
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Submit" name="submit">
				<input type="reset" value="Reset">
			</td>
		</tr>
	</table>


</body>
</html>