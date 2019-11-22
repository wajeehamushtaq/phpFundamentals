<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>GETTER & SETTER</title>
</head>
<body>
<?php 
class Movies{
	public $name;
	private $rating;

	function _construct($bName,$bRate){
	$this->name=$bName;
	$this->rating=$bRate;
	}
	
	function getRate(){
	return $this->rating;
	}
	
	function setRate($rating){
	$this->rating=$rating;
	}
}
$avengers=new Movies("avengers","PG-13");
$avengers->setRate("PG-8");
echo $avengers->getRate();
?>
</body>
</html>