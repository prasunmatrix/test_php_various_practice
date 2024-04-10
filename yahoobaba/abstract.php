<?php
abstract class parentClass
{
  public $name;

  abstract protected function calc($a, $b);
}

class childClass extends parentClass
{
  public $name;

  public function calc($c, $d)
  {
    echo $c + $d;
    echo "<br>";
    echo $c * $d;
    echo "<br>";
    echo "Hello World";
  }
}

//$obj=new parentClass();

$obj1=new childClass();

$obj1->calc(10,20);