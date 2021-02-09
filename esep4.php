<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

function puppy(){
	$puppies=array("Шарик","Рекс","Брюс");
	
	foreach($puppies as $value){
		echo $value,"<br/>";
	}
}
puppy();
?>
</body>
</html>