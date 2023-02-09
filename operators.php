<?php
$a=5;$b=6;$c=7;
echo "arithmetic operator demonstration: <br> $a+$b= ".$a+$b."<br> $a-$b= ".$a-$b." <br> $a*$b= ".$a*$b."<br> $a/$b= ".$a/$b;
echo "relatinal operator demonstration: <br> $a>$b= ".$a>$b." <br> $a<$b= ".$a<$b."<br> $a==$b: ".$a==$b;
echo "increment-decrement operators demonstration: <br>"
$i=10;
$j=20;
$i++;
$j++;
echo $i."<br/>";echo$j."<br/>";
$k=$i++;
$l=++$j;
echo $k."<br/>";echo $l;

echo "assignment operators demonstration: <br>";
echo "a=".$a;echo"<br/>";
$b += 20;
echo "b=".$b;echo"<br/>";
$c -= 5;
echo "c=".$c;echo"<br/>";
$d=20;
$d*=2;echo "d=".$d;echo"<br/>";
$e=25;
$e /= 5;
echo "e=".$e;echo"<br/>";
$f=30;
$f %= 4;
echo "f=".$f;

echo "string operators: <br>";
$str = "Hello";
$str1 = $str . "bro!";echo $str1;
echo "<br/>";
$str2="Good";
$str2 .= " Day!";echo $str2;

echo "bitwise operators: <br>";
echo "$a & $b = ".$a&$b."<br/>";
echo "$a | $b = ".$a|$b."<br/>";
echo "$a ^ $b = ".$a^$b."<br/>";
echo "$a << $b = ".$a<<$b."<br/>";
echo "$a >> $b = ".$a>>$b."<br/>";
echo "~$a = ".~$a."<br/>";

echo "logical operators demmonstration : <br>"
echo "$a&&$b = ".$a&&$b."<br>;
echo "$a || $b = ".$a||$b."<br/>";
echo "$a xor $b = ".$a xor $b."<br/>";
echo "$a ! $b = ".$a!$b."<br/>";
?>