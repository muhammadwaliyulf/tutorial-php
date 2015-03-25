<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Statement</title>
</head>

<body>
<?php
$t=date("H");
$a=1;
$b=2;
$c=20;
$d=30;
$favcolor="blue";
$day="rain";
echo"<h2>Switch</h2>";
echo"<br>";
echo"<br>";
switch($favcolor){
	case"red";
	echo"Your favorite color is red";
	break;
	case "blue";
	echo"Your favorite color is blue";
	break;
	case"green";
	echo"your favorite color is green";
	break;
	case"yellow";
	echo"your favorite color is yellow";
	break;
	default:
	echo "Your favorite color is neither";
	}
	echo"</br>";
	echo"</br>";
	switch($day){
	case"sunny";
	echo"Hore today is sunny";
	break;
	case "cloudy";
	echo"Hore today is cloudy";
	break;
	case"rain";
	echo"Today is rain";
	break;
	default:
	echo "I don't know today";
	}
	echo"<hr>";
	echo"</br>";
	echo"<h2>If, if else, if elseif</h2>";
	echo"<br>";
if($t<"20"){
	echo"Have a good boys";
	}
	echo"</br>";
if($a<=$b){
	echo"It's right";
	}
	echo"</br>";
	if($c==$d){
		echo"It's right";
		}
		else{
			echo"It's wrong";
			}
	echo"</br>";
	echo "<p> will give the following message:</p>";
	if($c<"10"){
		echo"Kamu salah";
		}elseif($c<"1"){
			echo"Kamu benar";
			}	else{
				echo"Tidak keduanya";
				}
?>
</body>
</html>