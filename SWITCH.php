<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SWITCH</title>
</head>
<body>
<form action="SWITCH.php" method="post">
What are your grades?
<input type="text" name="grades"><br>
<input type="submit"><br>
</form>
<?php 
$grades=$_POST["grades"];
echo $grades;
echo"<br>";
switch($grades){
	case "A":
	echo "You did amazing";
	echo"<br>";
	break;
	case "B":
	echo "You did best";
	echo"<br>";
	break;
	case "C":
	echo "You did good enough";
	echo"<br>";
	break;
	case "D":
	echo "You didn't perform good";
	echo"<br>";
	break;
	default:
	echo "Invalid Grades!";
	echo"<br>";
}
?>
</body>
</html>