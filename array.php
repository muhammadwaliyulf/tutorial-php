<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Array</title>
</head>

<body>
<?php
$cars=array("Volvo","Toyota","BMW","ZIP","Honda");
echo"<h2>Indexed Array</h2>";
echo"I like ".$cars[0]." ,".$cars[1]." and ".$cars[2].".";
echo"<br>";
echo count ($cars);
echo"<br>";

echo"<h3>Loop Through</h3>";

$fruits=array("banana","coconut","orange","grape","tomatoes","carrot","spinach");
$marketfruit=count($fruits); //untuk menampilakan array
for($x=0; $x<$marketfruit; $x++){
	echo $fruits[$x];
	echo"<br>";
	}
	echo"<hr>";
	echo"<h2>Associative Array</h2>";
	$age=array("Peter"=>"35","Ben"=>"37","Roni"=>"20","Rojul"=>"14");
	foreach($age as $a=>$a_value){
		echo"Key=".$a.",Value=".$a_value;
		echo"<br>";
		}
	echo"<br>";
	echo"<hr>";
	echo"<h2>Multidimensional Array</h2>";
		$motorcycle=array
		(
	array("Kawasaki",20,10),
	array("Honda",20,18),
	array("Suzuku",19,7),
	array("Yamaha",23,17),
	);	
		echo $motorcycle[0][0].":In stock:".$motorcycle[0][1].",sold:".		
		$motorcycle[0][2].".<br>";	
		echo $motorcycle[1][0].":In stock:".$motorcycle[1][1].",sold:".$motorcycle[1][2].".<br>";
		echo $motorcycle[2][0].":In stock:".$motorcycle[2][1].",sold:".$motorcycle[2][2].".<br>";
		echo $motorcycle[3][0]."Stock:".$motorcycle[3][1]."sold:".$motorcycle[3][2].".";
echo"<br>";
	echo"<hr>";
	echo"<h2>Kinds of Array</h2>";
	echo"<h3>arsort ()</h3>";
	$age=array("Peter"=>"30","Ben"=>"19","Roni"=>"21","Rojul"=>"14");
	arsort($age);//untuk nilai dari tertinggi ke terndah
	foreach($age as $b=>$b_value){
		echo"Key=".$b.",Value=".$b_value;
		echo"<br>";
		}
	echo"<br>";
	echo"<h3>asort ()</h3>";
	asort($age); //untuk nilai dari terendah ke tertinggi
	foreach($age as $b=>$b_value){
		echo"Key=".$b.",Value=".$b_value;
		echo"<br>";
		}
	echo"<br>";
	echo"<h3>krsort ()</h3>";
	krsort($age); //untuk abjad dari z-a
	foreach($age as $b=>$b_value){
		echo"Key=".$b.",Value=".$b_value;
		echo"<br>";
		}
	echo"<br>";
	echo"<h3>ksort()</h3>";
	ksort($age);//untuk abjad dari a-z
	foreach($age as $b=>$b_value){
		echo"Key=".$b.",Value=".$b_value;
		echo"<br>";
		}
	echo"<br>";
	echo"<h3>array_change_key_case()</h3>";/*Mengubah semua kunci dalam array ke huruf besar*/
	print_r(array_change_key_case($age,CASE_UPPER));
	echo"<br>";
	echo"<h3>array_chunk()</h3>";//Membagi array menjadi dua potongan 
	print_r(array_chunk($age,2));
	echo"<br>";
	
		
?>
</body>
</html>