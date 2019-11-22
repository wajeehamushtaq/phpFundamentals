<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>OBJECT FUNCTIONS</title>
</head>
<body>
<?php
class Students{
	var $name;
	var $major;
	var $gpa;
	public function _construct($name,$major,$gpa){
	 $this->name=$name;
	 $this->major=$major;
	 $this->gpa=$gpa;
	}
	function hasHonor(){
		if($this->gpa >= 3.5){
			return "true";
		}
			return "false";
	}
}
	$student1=new Students("James","Mechnical Engineer",3.6);
	$student2=new Students("Thomas","Computer Engineer",3.9);
	
	echo $student1->hasHonor();
?>
</body>
</html>