<?php
class Fruit
{
  public $name;
  function set_name($name)
  {
    $this->name = $name;
  }
}

$apple = new Fruit();
$apple->set_name("Apple");
echo $apple->name;
echo "<br/>";


class FruitNew
{
  public $name;
  function __construct($name)
  {
    $this->name = $name;
  }
  public function set_name(){
    return $this->name;
  }
}
$obj=new FruitNew("Orange");
echo $obj->set_name(); 
