<html>
<head>
<title>Finding Weekend day from Date </title>
<body bgcolor=silver>

	<?php
		$d=date("D");
		
		//switch case based on range of values.Change System Date to see effect.
		switch($d)  
		{
		  case "Mon" :
		  case "Tue" :
		  case "Wed" :
		  case "Thu" :
		  case "Fri" :
		  				echo "<br/><center><h2><font color=seagreen>Have a nice working day!</font></h2></center>";
						break;
		  case "Sat" :				
						echo "<br/><center><h2><font color=seagreen>Have a nice weekend!</font></h2></center>";
						break;
						
		  case "Sun" :				
						echo "<br/><center><h2><font color=seagreen>Have a nice holiday!</font></h2></center>";
						break;				
		}	
	?>
</body>
</html>