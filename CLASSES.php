<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CLASSES AND OBJECTS</title>
</head>
<body>
<?php 
class Books{
	var $title;
	var $author;
	var $pages;
}
$book1=new Books;
$book1->title="Harry Potter";
$book1->author="JK Rowling";
$book1->pages=4000;
echo $book1->title;
echo"<br>";
$book2=new Books;
$book2->title="Lord of the Rings";
$book2->author="Tolkein";
$book2->pages=7500;
echo $book2->title;
?>
</body>
</html>