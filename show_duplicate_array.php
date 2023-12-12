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

$array = array(1, 6, 2, 23, 10, 15, 3, 2, 15, 7);
$newarr=array();
foreach($array as $key=>$val)
{
  if(isset($newarr[$val]))
  {
    $newarr[$val]=$val;
  }
  else
  {
    $newarr[$val]=0;
  }
}
echo "<pre>";
print_r($newarr);

foreach($newarr as $key2=>$val2)
{
  if($val2>0)
  {
    echo $val2;
    echo "\n";
  }
}