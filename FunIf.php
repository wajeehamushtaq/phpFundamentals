<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Function using If</title>
</head>
<body>
<?php
function getMax($num1,$num2){
	if($num1>$num2){
		return $num1;
	}else{
		return $num2;
	}
}
echo getMax(3,80);
?>
</body>
</html>