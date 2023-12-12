<?php
$arr=array(58,30,55,67,72,86,42);
$min=$arr[0];
for($i=0;$i<count($arr);$i++)
{
  if($arr[$i]<$min)
  {
    $min=$arr[$i];
  }  
}
//print_r($min);
echo "Minimum value ".$min;
echo "<br>";
$max=$arr[0];
for($i=0;$i<count($arr);$i++)
{
  if($arr[$i]>$max)
  {
    $max=$arr[$i];
  }  
}
echo "Maximum value ".$max;
?>