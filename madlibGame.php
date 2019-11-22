<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Mad lib Game</title>
</head>
<body>
<form action="madlibGame.php" method="get">
Color:<input type="text" name="color"><br>
PluralNoun:<input type="text" name="pluralNoun"><br>
Celebrity:<input type="text" name="celebrity">
<input type="submit">
</form>
<br>
<?php 
$color=$_GET["color"];
$pluralNoun=$_GET["pluralNoun"];
$celebrity=$_GET["celebrity"];
echo "Red are $color <br>";
echo "$pluralNoun are blue <br>";
echo "I love $celebrity<br>";
?>
</body>
</html>