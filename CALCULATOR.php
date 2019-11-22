<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CALCULATOR</title>
</head>
<body>
<form action="CALCULATOR.php" method="post">
First Number:<input type="number" step="0.1" name="num1"><br>
Operator:<input type="text" name="op"><br>
Second Number:<input type="number" name="num2"><br>
<input type="submit">
</form>
<br>
<?php 
$num1= $_POST["num1"];
$op= $_POST["op"];
$num2= $_POST["num2"];

if($op=="+"){
	echo $num1+$num2;
}elseif($op=="-"){
	echo $num1-$num2;
}elseif($op=="*"){
	echo $num1*$num2;
}elseif($op=="/"){
	echo $num1/$num2;
}else{
	echo "Invalid operation";
}
?>
</body>
</html>