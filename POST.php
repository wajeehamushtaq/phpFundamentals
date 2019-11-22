<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>POST FUNCTION</title>
</head>
<body>
<form action="POST.php" method="post">
Password:<input type="password" name="password">
<br>
<input type="submit">
</form>
<br><br>
<?php
// because of GET password or data show in URL
echo $_POST["password"];
?>
</body>
</html>