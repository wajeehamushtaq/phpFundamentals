<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>GET function</title>
</head>
<body>
<form action="GET.php" method="get">
Password:<input type="password" name="password">
<br>
<input type="submit">
</form>
<br><br>
<?php
// because of GET password or data show in URL
echo $_GET["password"];
?>
</body>
</html>