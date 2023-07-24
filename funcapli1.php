<?php
require_once("Marks.php");
$nm=$_GET['nm'];
$no1=$_GET['num1'];
$no2=$_GET['num2'];


$mks=new Marks($nm,$no1,$no2);
		

?>
<html>
<body>
<?php
	
      echo "<h3><font color=Maroon>Students's Name       	                                    	: " ;  $mks->writeName($nm);
	  echo "<br> Marks Obtained in PHP : " . $no1 ;
	  echo "<br> Marks Obtained in Java : " . $no2 ;
	  echo "<br>\t\t\t     -------------------------------";
	  echo "<br>  Grand Total     : " . $mks->add1();
	  echo "<br>  ------------------------------";
 ?>
</body>
</html>