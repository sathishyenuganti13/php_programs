<!DOCTYPE html>
<html lang="en">
<head>
	<title><b>Palindrome </b></title>
</head>
<body>
	<form action=""method="post">
	<br><center><h1><u><font color="red">PALINDROME</font></u></h1></center>
	<br><table color=forestgreen" align=:center">
	<tr><td><br><input type="text" value="  Enter the value: "readonly>
	<input type="text" name="n"></tr></td>
	<tr><td><br><br><center><br><br>
	<input type="submit" value"&nbsp;&nbsp;SUBMIT&nbsp;&nbsp;">
	<br><br><br></center></tr></td></table>
	</form>
	<?php
	if($_POST)
	{
	$n1=$_POST['n'];
	$p=$n1;
	$s=0;
	while($n1>=1)
	{
	$r=$n1%10;
	$n1=$n1*(10/100);
	$s=$s*10+$r;
	}
	echo "<font color='forest green'>";
	if($p==$s)
	echo"<h2>$p is a palindrome number</h2>";
	else{
	echo "<h2> $p is not a palindrome number</h2>";
	}
	}
	echo'</font>';
	echo'</td></td></table>';
	?>
</body>
</html>
