<?php
$nm=$_GET['nm'];
$no1=$_GET['num1'];
$no2=$_GET['num2'];

function add($x,$y)
        {
 			 $total=$x+$y;
			 return $total;
        }
        function writeName($name)
        {
         	echo $name;
        }
		

?>
<html>
<body>
<?php
	
      echo "<h3><font color=Maroon>Students's Name       	                                    	: " ;   writeName($nm);
	  echo "<br> Marks Obtained in PHP : " . $no1 ;
	  echo "<br> Marks Obtained in Java : " . $no2 ;
	  echo "<br>\t\t\t     -------------------------------";
	  echo "<br>  Grand Total     : " . add($no1,$no2);
	  echo "<br>  ------------------------------";
 ?>
</body>
</html>