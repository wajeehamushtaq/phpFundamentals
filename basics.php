<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>basics</title>
</head>
<body>
<?php 
// to print string or data
echo"Hello World";
echo"<h1>Wajeeha's Site</h1>";
echo"<hr>";
echo"<p>This is my first website. It is not only for practicing php language</p>";
// using variales
$characterName="Mike";
$characterAge=20;
echo"Once there was a man $characterName<br>";
echo"He was $characterAge years old<br>";
// datatypes
$phrase="Hello World";
$num=10;
$decNum=10.55;
$isSomething=true;
echo $decNum;
echo"<br>";
// working with string
echo strtolower($phrase);
echo"<br>";
echo strtoupper($phrase);
echo"<br>";
echo strlen($phrase);
echo"<br>";
//phrase[0]="B";
echo $phrase;
echo"<br>";
echo str_replace("Bello","Bye",$phrase);
echo"<br>";
// taking characters from string without considering space
$string="Github repository";
echo substr($string,7,4);
echo"<br>";
// working wiht numbers
echo 5+9;
echo"<br>";
echo 10%3;
echo"<br>";
// order operation
$num=10;
$num++;
echo $num;
echo"<br>";
$num+=5;
echo $num;
echo abs(-100);
echo"<br>";
echo pow(2,4);
echo"<br>";
echo max(2,10);
echo"<br>";
echo round(6.9);
?>
</body>
</html>