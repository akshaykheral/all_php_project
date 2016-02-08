<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
	<title>GNR Form</title>
	<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#ccffff">
	<div align="center">
		<img src="images/banner_index1.jpg" alt="Test Image"><br>
	</div>

<td>
	<p class="foot">
		<marquee behavior=alternate onmouseover="this.stop();" onmouseout="this.start();">
			<strong>
				Online Submission Portal
			</strong>
		</marquee>
	</p>
</td>
	
<!--	<div align="center">
	<form action="view.php" method="POST" name="ss" enctype="multipart/form-data">
	<td>
		First Name:
			<input type="text" name="firstname"></br>
		Lastname:
			<input type="text" name="lastname"></br>
		File:x
			<input type="file" name="image">
			<input type="submit" value="Upload">
			<input type="reset" value="Reset Form">

	</td>
	</form>
	</div> -->
	<div style="margin:auto; width:700px; background-color:#CCC; overflow:auto;">
<div style="margin:auto; width:100%; height:80px; text-align:center; color:#00F; background:#666; font-size:36px;">
	Candidate Information
</div>
<div style="margin:auto; width:300px">
	<form action="view.php" method="post" name="ss" enctype="multipart/form-data">
	<table>
		<tr>
			<td>First Name</td>
			<td>:</td>
			<td><input type="text" name="firstname" /></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td>:</td>
			<td><input type="text" name="lastname" /></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>:</td>
			<td>
				<select name="gender" style="width:173px;">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
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
				<input type="radio" name="status" value="BTech" />B.Tech.
				<input type="radio" name="status" value="MSc" />M.Sc.
				<input type="radio" name="status" value="MCA" />MCA
			</td>
		</tr>
		<tr>
			<td>Image Upload</td>
			<td>:</td>
			<td><input type="file" name="image" /></td>
		</tr>
		<tr>
			<td>Document Upload</td>
			<td>:</td>
			<td>Document Name: <input type="text" name="doc_name" value="" /></td>
			<td><input type="file" name="document" value="" /></td>
		</tr>
		<tr>
			<td>
				<!-- Vacant space for coding -->
			</td>
		</tr>
	</table><br>
			<div align="center">
				<input type="submit" value="Submit" name="submit">
				<input type="reset" value="Reset">
			</div>
	</form>
	</div>
	</div>

	
<div id="tooplate_copyright_wrapper">
	<div id="tooplate_copyright">
	
    	Managed by © SSB YSA Unit Folks <a href="http://www.csirhrdg.res.in/" target="_blank">CSIR-HRDG</a>
		
    </div>
</div>
</body>
</html>