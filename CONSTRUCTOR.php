<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CONSTRUCTOR</title>
</head>
<body>
<?php
class Books{
	var $title;
	var $author;
	var $pages;
	function __construct(){
	echo "New book created!!<br>";
	}
	function __construct1($name){
	echo $name;
	}
	/*function __construct($btitle,$bauthor,$bpages){
	$this->title=$btitle;
	$this->author=$bauthor;
	$this->pages=$bpages;
	}*/
}
$book1=new Books();
$book1->title="Harry Potter";
$book1->author="JK Rowling";
$book1->pages=4000;
echo $book1->author;
echo"<br>";
$book2=new Books("Tom");
$book2->title="Lord of the Rings";
$book2->author="Tolkein";
$book2->pages=7500;
echo $book2->pages;
echo"<br>";
/*$book3=new Books("The Nudge","xyz",1000);
echo $book3->author;*/
?>
</body>
</html>