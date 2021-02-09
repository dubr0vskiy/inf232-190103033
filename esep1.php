<!DOCTYPE html>
<html>
<body>

<?php
function triangle(){
	$a=3;
    $b=4;
    $c=5;
    if(pow($a,2)+pow($b,2)==pow($c,2)){
    echo "Это прямоугольный треугольник";
    }
    else echo "Это непрямоугольный треугольник";
    }  
    triangle(); 
?>
</body>
</html>