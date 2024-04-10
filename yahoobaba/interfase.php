<?php
interface parent1
{
  function add($a, $b);
}

interface parent2
{
  function sub($a, $b);
  function mul($a, $b);
}

class childClass implements parent1, parent2
{

  public function add($c, $d)
  {
    echo $c + $d;
  }
  function sub($c, $d)
  {
    echo $c - $d;
  }
  function mul($c, $d)
  {
    echo $c * $d;
  }
}

$obj = new childClass();

$obj->add(20,10);
echo "<br>";
$obj->sub(50,10);
echo "<br>";
$obj->mul(10,60);