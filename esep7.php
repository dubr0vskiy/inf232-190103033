<!DOCTYPE html>
<html>
<body>

<?php
$t = date("Y");
echo "<p>Now is the " . $t; 
echo ", and will give the following message:</p>";

if ($t < "2020") {
  echo "Kazir 2019 zhyl";
} elseif ($t < "2021") {
  echo "Kazir 2020 zhyl";
} else {
  echo "Kazir 2021 zhyl";
}
?>
 
</body>
</html>