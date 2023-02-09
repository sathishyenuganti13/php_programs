<!DOCTYPE html>
<html lang="en">
<head>
      <title>  LOGIN_PAGE    </title>
      <style> 
	table{
		background-color: gold;
		width: 50%;
		height: 30%;
		border: 2px solid ;
		border-collapse: collapse;
	    }
	td{
		color: cyanblue;
		font-family: courier;
		font-size: 20px;
		background-color: yellow;
	     }
	th{
		background-color: yellow;
		font-family: verdana;
		font-size: 30px;
		border: 1px solid;
		color: green;
	  }
	p{
		font-family: verdana;
		font-size: 30px;
	 }
	</style>
</head>
<body><center><p> LOGIN PAGE <form action="sslogin.php" method=POST></center></p>
      <center>
      <table> 
	<tr><th> User Name </th><td> <input type="text" name="un" placeholder=" Enter your name: "></td></tr>
	<tr><th> Password  </th><td> <input type="text" name="pw" placeholder=" Password : "></td></tr>
	<tr><td><center> <input type = "submit" value=" SUBMIT "></td></tr></center>
      </table><br><br></center></form>
</body>
<?php
if($_POST)
{
$un=$_POST["un"];
$pw=$_POST["pw"];
if ($un=="sathish" && $pw="7433"){
	echo ' <center> <h1 style="color:red;"> Personal Information </h1> ';
	echo ' <P> NAME: Sathish </p> ';
	echo ' <p> No : 9448674545 </p></center> ';
}
else{
echo '<p> INVALID USERID AND PASSWORD </P> ';
}
}
?>
</HTML>
	
	