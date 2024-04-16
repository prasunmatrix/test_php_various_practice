<?php
abstract class parentClass
{
  public $name;

  public function __construct($name)
  {
    echo $this->name=$name;
    echo "<br>";
  }

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

$obj1=new childClass("Rimu");
$obj1->name;

$obj1->calc(10,20);