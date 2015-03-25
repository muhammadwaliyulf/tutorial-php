<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loop</title>
</head>

<body>
<?php
$a=12;
$b=7;
$colors=array("red","green","blue","yellow","purple");
echo"<h2>While</h2>";
while($a<30){
	echo"My phone is: $a<br>";
	$a++;
	}
	echo"<br>";
	echo"<hr>";
	echo"<h2>Do while</h2>";
	do{
		echo"The number is:$b <br>";
		$b++;
		}while($b<=17);
	echo"<br>";
	echo"<hr>";
	echo"<h2>For</h2>";
	for($a=1; $a<20; $a++){
		echo"Number is:$a<br>";
		}
		echo"<br>";
	echo"<hr>";
	echo"<h2>Foreach</h2>";
		foreach($colors as $warna){
			echo "$warna<br>";
			}
?>
</body>
</html>