<?php
$array = array(1, 6, 2, 23, 10, 15, 3, 2, 15, 7);
echo "<pre>";
print_r($array);
$newarray = array();
foreach ($array as $key => $val) {
  $newarray[$val] = $val;
}
echo "<pre>";
print_r($newarray);
echo "<br>";
$newarray1=array();
foreach($array as $val)
{
  foreach($newarray1 as $val1)
  {
    if($val==$val1)
    {
      continue 2;
    }
  }
  $newarray1[]=$val;
}
print_r($newarray1);
echo "<br>";
$inputArray = array(1, 4, 2, 1, 6, 4, 9, 7, 2, 9);
$outputArray = array();

foreach ($inputArray as $inputArrayItem) {
  foreach ($outputArray as $outputArrayItem) {
    if ($inputArrayItem == $outputArrayItem) {
      //print_r($outputArrayItem);
      continue 2;
    }
  }
  $outputArray[] = $inputArrayItem;
  //print_r($outputArray);
}
print_r($outputArray);
