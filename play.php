<?php
$pln=$_GET['P_name'];
$cn1=$_GET['c_name1'];
$rn1=$_GET['runs1'];
$cn2=$_GET['c_name2'];
$rn2=$_GET['runs2'];
$cn3=$_GET['c_name3'];
$rn3=$_GET['runs3'];
$cn=array($cn1,$cn2,$cn3);
$rn=array($rn1,$rn2,$rn3);
$gt=0;
?>
<html>
<body bgcolor=orange>
<table  align="center">
<caption><h3><font color="dodgerblue">Player's Statistics</font></caption>
<tr>
<td align="center"><h4>Player's name  : </h4></td>
<td align="center"><h4><?php echo "     " . $pln ; ?></h4></td>
</tr>
</table>
<p><center><font color="dodgerblue"><h3>Runs Scored Against Countries</h3>
</font></center>
</p>
<table align="center">
<tr>
<td width="200">Countries Name</td><td>Runs</td>
</tr>
<?php
	for($i=0;$i<count($cn) && $i<count($rn);$i++)
         {
?>
<tr>
<td><?php echo $cn[$i] ;?></td><td><?php echo $rn[$i] ;?></td>
</tr>
<?php
  $gt=$gt+$rn[$i];
}
?>
<tr>
<td>Total Runs</td><td><?php echo $gt;?></td>
</tr>
<tr>
<td>Average :</td><td><?php echo round($gt/count($rn),2);?></td>
</tr>
</table>
</body>
</html>


