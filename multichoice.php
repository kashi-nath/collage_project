<?php
	$ctry_nm=" ";
	$ctry="";
	$flag=0;
	if(!isset($_POST["multi"]))
		echo "<b style='color:red'>No country has been choosen";
	else
	{
		$ctry=$_POST['multi'];
		$ct=count($ctry);
		$flag=1;
		echo "No. of country selected : ".$ct;
		for($i=0;$i<$ct;$i++)
			$ctry_nm=$ctry[$i]." ";
	}
	if($flag==1)
		echo "<br/>Country selected : ".$ctry_nm;
	
?>