<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test2</title>
</head>

<body>
<?php
$x=array("a"=>"red", "b"=>"green");
$y=array("c"=>"yellow","d"=>"purple");
print_r($x+$y);
echo"<br>";
var_dump($x==$y)."</br>";
var_dump($x!=$y)."</br>";
var_dump($x!==$y)."</br>";
?>
</body>
</html>