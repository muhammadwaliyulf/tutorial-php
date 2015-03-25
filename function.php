<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Function</title>
</head>

<body><?php
echo"<h2>Function Defined</h2>";
function php(){
echo "Hello makkah and madinah";
echo"<br>";

}
php();

echo"<br>";
echo"<hr>";
echo"<h2>Function Argument</h2>";
function example($names){
	echo "$names <br>";
	}
	example("Abdul");
	example("Khan");
	example("Syeikh");
	example("Ahmad");
	function edit($names,$years){
		echo"$names ,Born in $years<br>";
		}
		edit("John","1976");
		edit("Rambo","1968");
		edit("Hardy","1988");
		edit("Boy","1989");
		echo"<br>";
echo"<hr>";
echo"<h2>Argumen Value</h2>";
function h($minheight=50){
	echo"The height is : $minheight<br>";
	
	}
	h(350);
	h();
	h(135);
	h(80);
	echo"<br>";
echo"<hr>";
echo"<h2>Returning Value</h2>";
function sum($x,$y){
	$z=$x+$y;
	return $z;
	}
	echo"5+10=".sum(5,10)."<br>";
	echo"6+7=".sum(6,7)."<br>";
	echo"8+2=".sum(8,2)."<br>";
	echo"10+9=".sum(10,9);
	echo"<br>";
echo"<hr>";

?>

</body>
</html>