<?php 
	
		$fnm=$_POST['Name'];
		$snm=$_POST['Surname'];
		$addr=$_POST['Address'];
		$cty=$_POST['City'];
		$addr=$_POST['Address'];
		$sx=$_POST['r1'];
		$sub1=$_POST['c1'];
		$sub2=$_POST['c2'];
		$sub3=$_POST['c3'];
		$course=$_POST['s1'];
		$com=$_POST['Comments'];
		
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#000000">
<center>
<h2>Example of Retrieving Data sent from Client end in Server end from HTML controls</h2>

<table width="1100" align="center"  border="2" bordercolor="#FF0000">
<caption><h3><font color="white">Data Retrieved At Server End</font></h3></caption>
<tr>
<th align="center"><h2><font color=dodgerblue>Name</font></h2></th>
<th align="center"><h2><font color=dodgerblue>Address</font></h2></th>
<th align="center"><h2><font color=dodgerblue>City</font></h2></th>
<th align="center"><h2><font color=dodgerblue>Gender</font></h2></th>
<th align="center"><h2><font color=dodgerblue>Computer Skill</font></h2></th>
<th align="center"><h2><font color=dodgerblue>Course Name</font></h2></th>
<th align="center"><h2><font color=dodgerblue>Comments</font></h2></th>
</tr>
<tr>
<td><?php echo "<h2><font color=dodgerblue>".$fnm . " " . $snm . "</font></h2>";?></td>
<td><?php echo "<h2><font color=dodgerblue>".$addr . "</font></h2>";?></td>
<td><?php echo "<h2><font color=dodgerblue>".$cty . "</font></h2>";?></td>
<td><?php echo "<h2><font color=dodgerblue>".$sx . "</font></h2>";?></td>
<td><?php echo "<h2><font color=dodgerblue>".$sub1 . " " . $sub2 ." " . $sub3 . "</font></h2>";?></td>
<td><?php echo "<h2><font color=dodgerblue>".$course . "</font></h2>";?></td>
<td><?php echo "<h2><font color=dodgerblue>".$com . "</font></h2>";?></td>
</tr>
</table>
</body>
</html>
