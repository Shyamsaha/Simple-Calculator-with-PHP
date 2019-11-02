<?php

include 'Function.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP OOP</title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>		
			 	<td><label>First number:</label></td>
			 	<td><input type="number" name="first" placeholder="1st Num" value=" "></td>
		 	</tr>

		 	<tr>
			 	<td><label>Secound number:</label></td>
			 	<td><input type="number" name="sec" placeholder="2nd Num" value=" "></td>
		 	</tr>

		 	<tr>
		 			<td></td>
		 		 	<td><input type="submit" name="submit" value="calculate"></td>

		 	</tr>
	 	</table>
	</form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
	$Firststnum=$_POST['first'];
	$Secoundndnum=$_POST['sec'];
	if (empty($Firststnum) or empty($Secoundndnum)) {
		echo "<span style ='color:#EE6554'>Field Must Not Be Empty.</span>";
	}
}

$obj = new Calculation;
echo "<span style='color:green'><br/>First number is : $Firststnum & Secound Number is: $Secoundndnum<br/><br/></span>";
$obj->add($Firststnum,$Secoundndnum);
$obj->sub($Firststnum,$Secoundndnum);
$obj->mul($Firststnum,$Secoundndnum);
$obj->div($Firststnum,$Secoundndnum);


?>

