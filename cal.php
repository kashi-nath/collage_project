<?php
	
	$numb1=$_GET['num'];
	$numb2=$_GET['num1'];
	$op=$_GET['oprtr'];
	
	//if(is_int($numb1) && is_int($numb2))
	//{
	switch($op)
	{
	  case '+':
                        $sum=$numb1+$numb2;
						echo "Sum of the Numbers : " .$sum ;
                        break;
          case '-':
                        $sum=$numb1-$numb2;
						echo "Subtraction of the Numbers : " .$sum ;
                        break; 	
 	  case '*':
                        $sum=$numb1*$numb2;
						echo "Multiplication of the Numbers : " .$sum ;
                        break;
          case '/':
                        $sum=$numb1/$numb2;
						echo "Division of the Numbers : " .$sum ;
                        break; 	
 	  default :
                       echo "<h3><font color=red>Error!Invalid Operator Entered</font></h3>";
		       break;	
       }
        


?>