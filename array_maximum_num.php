<?php
$array = array(7, 25, 35, 65, 2, 45,30);
$max=$array[0];
for($i=0;$i<count($array);$i++)
{
  if($array[$i]>$max)
  {
    $max=$array[$i];
  } 
}
echo "maximum value: ".$max;