<?php
$array = array(1, 6, 2, 23, 10, 15, 3, 2, 15, 7);
$newarray=array();
foreach($array as $val)
{
  if(isset($newarray[$val]))
  {
    $newarray[$val]=$val;
  }
  else
  {
    $newarray[$val]=0;
  }
}
echo "<pre>";
print_r($newarray);
