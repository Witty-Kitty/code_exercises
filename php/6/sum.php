<?php
$number = $_POST["number"];
$i = 1;
$sum = 0;

while($i <= $number){
  $sum = $sum + $i;
$i++;
}

echo $sum;

?>

