<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test</title>
</head>

<body>
<?php
$x=10;
$x%=5;
$y=5;
$a=100;
$b="100";
$c=14;
$d=9;
$txt="muhammad ";
$txt1="waliyul fahmi";
var_dump($a===$b)."</br>";
var_dump($a!=$b)."</br>";
var_dump($a==$b)."</br>";
var_dump($a>$y)."</br>";
var_dump($a>=$b)."</br>";
if($c==14 and $d=19){
	echo"Good luck";
}
echo"<hr>";
if($c==14 or $d=20){
	echo"Yous the best";
}
echo"<br>";
if($c!==099){
	echo"Already return";
	}
	echo"<br>";
echo $txt.$txt1."</br>";
echo "This is= ".++$c."</br>";
echo $c++."</br>";
echo "This is= ".--$d."</br>";
echo $d--."</br>";
echo strlen("muhammad waliyul fshmi")."</br>";
echo str_word_count("Hy my name is fahmi")."</br>";
echo strrev("kasur rusak")."</br>";
echo $x%$y."</br>";
echo $x."</br>";
echo strpos("Hello world! apa kabar garam","garam")."</br>";
echo strlen("Hello world! apa kabar")."</br>";
echo str_replace("world","Anu","hai world")."</br>";
echo"<hr>";
echo str_replace("hai","heh","hai fahmi nuju naon hah??")."</br>";
echo str_replace("ada","tidak ada","ada tuhan selain allah");
echo"<hr>";
define("solm","Welcome in my blog!");
echo solm."</br>" ;
function test(){
	echo solm;
	}
	test();
?>


</body>
</html>