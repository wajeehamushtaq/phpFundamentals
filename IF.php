<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>IF statement</title>
</head>
<body>
<?php 
$isMale=true;
$isTall=true;
// for or operation || 
if($isMale&&$isTall){
	echo "Both Condition becomes true";
}elseif($isMale||!$isTall){
	echo "One condition is true";
}else{
	echo "Condition does not true";
}
?>
</body>
</html>