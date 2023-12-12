<?php
//$array = array(2,7,10,25,35,65,80);
$array = array(80, 7, 25, 35, 65, 2, 45);
$count = count($array);
$min = $array[0];
for ($i = 0; $i < $count; $i++) {
  if ($array[$i] < $min) {
    $min = $array[$i];
  }
}
echo "minmum value: ".$min;
//output 2
