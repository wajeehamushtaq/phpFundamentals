<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ASSOCIATIVE ARRAYS</title>
</head>
<body>
<form action="ASSOCIATIVEARRAYS.php" method="post">
<input type="text" name="student">
<br>
<input type="submit">
</form>
<br><br>
<?php 
$grades=array("Tim"=>"A+","Tonny"=>"B+","Smith"=>"C+");
//echo $grades["Tim"];
echo $grades[$_POST["student"]];
?>
</body>
</html>