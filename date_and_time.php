<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Date and time</title>
</head>

<body>
<?php
echo("<h2>Date</h2>");
echo "Today is ".date("Y/m/d")."<br>";
echo "Today is ".date("Y.m.d")."<br>";
echo "Today is ".date("Y-m-d")."<br>";
echo "Today is ".date("l")."<br>";
echo("<h3>time</h3>");
echo"The time is ".date("h:i:s a");
echo"<br>";
echo("<h3>date_default_timezone_set</h3>");
date_default_timezone_set("America/New_York");
echo "The time in Newyork,US is ".date("h:i:s a")."<br>";
echo"<br;>";
echo("<h3>mktime</h3>");
$d=mktime(11,14,54,8,12,2014);
echo"Created date is ".date("Y-m-d h:i:s a" , $d)."<br>";
echo"Created date is ".date("h:i:s a d-m-Y " , $d)."<br>";
$c=mktime(09,20,03,12,03,2015);
echo"Created date is ".date("h:i:s a d-m-Y " , $c)."<br>";
echo"<br>";
echo"<hr>";
echo"<h2>strtotime()</h2>";
$w=strtotime("10:30 pm 06 February  2014");
echo"created date is ".date("d-m-Y h:i:s a",$w)."</br>";
$v=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $v) . "<br>";
$f=strtotime("next saturday");
echo date("Y-m-d h:i:sa", $f) . "<br>";
$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
echo"<br>";
echo"<hr>";
echo"<h2>date</h2>";
$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks",$startdate);
while($ok<$enddate){
	echo date("M d",$startdate),"<br>";
	$ok=strtotime("+1 week,$startdate");
	}
?>

</body>
</html>