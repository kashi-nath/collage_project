<?php
$num1=$_GET['fnm'];
$num2=$_GET['snm'];
$op=$_GET['op'];

switch($op)
{
	case '+' :
	          echo "Sum of Numbers " .($num1+$num2);break;
	case '-' :
	          echo "Subtraction of Numbers " .($num1-$num2);break;
	case '*' :
	          echo "Multiplication of Numbers " .($num1*$num2);break;
	case '/' :
	          echo "Dividend of Numbers " .($num1/$num2);break;		  		  		  
	default :
				echo "Error!!Invalid Operator Entered ";
			  



}



?>
