<!DOCTYPE html>
<html lang="en">
<head><title> ARMSTRONG </title></head>
<body>
 <form action=" " method="POST">
 <br><center><font color="red";font-size=32px><b>Armstrong</b></font></center><br><br>
 <br><table bgcolor="green" align="center">
 <tr><td><br><input type="text" value="enter the number to be  checked"readonly>
 <input type="text" name="n"></tr></td>
 <tr><td><br><br><center><br><br>
 <input type="submit" value="SUBMIT">
 <br><br></center></tr></td></table>
 </form>
 <?php
 if($_POST["submit"])
 {
 $n1=$_POST["n"];
 $m=$n1;
 $s=0;
 while($n>0)
 {
 $r=$n%10;
 $n=$n//10;
 $s=$s+($r^3);
 }
 if($m==$s)
 echo "<h2>$m is armstrong number </h2>";
 else
 echo "<h2> $m is not a armstrong number</h2>";
 }
 echo '</font>';
 echo '</td></tr></table>';
 ?>
</body>
</html>
 