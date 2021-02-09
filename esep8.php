<!DOCTYPE html>
<html lang="en">
<body>

<?php
$q = 25;
$w = 35;
$e = "25";

var_dump($q == $e);
echo "is the first bool.","<br>";

var_dump($q > $e);
echo "is the second bool.","<br>";

var_dump($q != $w);
echo "is the third bool.","<br>";

var_dump($q !== $e);
echo "is the fourth bool.","<br>";

var_dump($q < $w);
echo "is the fifth bool.","<br>";

var_dump($q > $w);
echo "is the sixth bool.","<br>";

var_dump($w <= $e);
echo "is the seventh bool.","<br>";

var_dump($w >= $e);
echo "is the eigth bool.","<br>";
?>

</body>
</html>