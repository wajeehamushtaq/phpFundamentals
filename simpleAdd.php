<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Simple Add</title>
</head>
<body>
<!--building simple calculator-->
<form action="simpleAdd.php" method="get">
Input1:<input type="number" name="num1">
<br>
Input2:<input type="number" name="num2">
<br>
<input type="submit">
</form>
<br>
Answer:<?php echo $_GET["num1"]+$_GET["num2"]?>
</body>
</html>