<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>RETURN STATEMENT</title>
</head>
<body>
<?php 
function cube($num)
{
	return $num*$num*$num;
}
$cubeRes=cube(3);
echo $cubeRes;
?>
</body>
</html>