<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CHECKBOXES</title>
</head>
<body>
<form action="CHECKBOXES.php" method="post">
Orange:<input type="checkbox" name="fruits[]" value="orange"><br>
Bannana:<input type="checkbox" name="fruits[]" value="bannana"><br>
Apple:<input type="checkbox" name="fruits[]" value="apple"><br>
Mango:<input type="checkbox" name="fruits[]" value="mango"><br>
<br>
<input type="submit">
</form>
<br><br>
<?php
$fruits= $_POST["fruits"];
echo $fruits[0];
?>
</body>
</html>