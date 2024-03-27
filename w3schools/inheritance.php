<?php
class Fruit{
  public $name;
  //public $flower;
  public function test($name){
    $this->name=$name;
    echo $this->name;
    //echo $name;
  }
  protected function test1(){
    echo "Hello World";
  }
}  
class Strawberry extends Fruit{
  public function extendedFunction()
  {
    $this->test1();
  }
 
} 

$obj=new Strawberry();
$obj->test("testing going on for inheritance");
echo "<br/>";
$obj->extendedFunction();