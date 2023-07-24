<html>
   <head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
      <title>
Form Page: test
      </title>
      <Style>
        BODY, P,TD{ font-family: Arial,Verdana,Helvetica, sans-serif; font-size: 10pt }
        A{font-family: Arial,Verdana,Helvetica, sans-serif;}
        B {	font-family : Arial, Helvetica, sans-serif;	font-size : 12px;	font-weight : bold;}
        </Style>
      
   </head>
<body bgcolor="#FFFFCC">
<center>
<h2>Registration Form</h2>


<form name="test" method="post" action="processform1.php">
<table cellspacing='0' cellpadding='10' border='0' bordercolor='#000000' align="center" width="75%" height="75%">
   <tr>
      <td>
         <table cellspacing='2' cellpadding='2' border='0'>
            <tr>
               <td align='right'>First Name</td>
               <td>
                  <input type='text' name='Name' size='20'>
               </td>
            </tr>
            <tr>
               <td align='right'>Surname</td>
               <td>
                  <input type='text' name='Surname' size='20'>
               </td>
            </tr>
            <tr>
               <td align='right'>Address</td>
               <td>
                  <input type='text' name='Address' size='20'>
               </td>
            </tr>
			 <tr>
               <td align='right'>City</td>
               <td >
                  <input type='text' name='City' size='20'>
               </td>
            </tr>
			<tr>
               <td align='right'>Sex</td>
               <td >
                  <input type='radio' name='r1' size='20' value="Male">Male &nbsp;&nbsp;&nbsp;
				  <input type='radio' name='r1' size='20' value="Female">Female
               </td>
            </tr>
			
       <tr>
               <td align='right'>Computer Skill'</td>
               <td >
                  <input type='checkbox' name='c1' size='20' value="Java">Java &nbsp;&nbsp;&nbsp;
				  <input type='checkbox' name='c2' size='20' value="Php">Php &nbsp;&nbsp;&nbsp;
				  <input type='checkbox' name='c3' size='20' value="Oracle">Oracle
               </td>
            </tr>
			<tr>
               <td align='right'>Course</td>
               <td>
                  <select name="s1">
				  <option>Select</option>
				  <option value="BTech">BTech</option>
				  <option value="MCA">MCA</option>
				  <option value="MTech">Mtech</option>
				  </select>
               </td>
            </tr>
			
            <tr>
               <td colspan='2' align='left' valign='bottom'>Comments</td>
            </tr>
            <tr>
               <td>
               </td>
               <td>
<textarea name='Comments' cols='50' rows='8'></textarea>
               </td>
            </tr>
            <tr>
               <td colspan='2' align='center'>
                  <input type='submit' name='Submit' value='Send'>
               </td>
            </tr>
         </table>
      </td>
   </tr>
</table>
</form>
</body>
<html>