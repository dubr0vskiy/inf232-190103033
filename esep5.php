<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$dobr=[
	"first"=>"Доброе утро",
	"second"=>"Добрый день",
	"third"=>"Добрый вечер"];
foreach ($dobr as $key => $value) {
    switch ($key) {
        case 'first' :
            echo "$value <br>";
            break ;
        case 'second' :
            echo "$value <br>";
            break ;
        case 'third' :
            echo "$value <br>";
            break ;
     }
 }
?>
</body>
</html>