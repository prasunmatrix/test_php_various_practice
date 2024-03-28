<?php
trait message1{
  public function msg1(){
    echo "OOP is fun";
  }
}

trait message2{
  public function msg2(){
    echo "OOP reduces code duplication!";
  }
}

class welcome{
  use message1;
}

class welcome2{
  use message1,message2;
}

$obj=new welcome();
$obj->msg1();
echo "<br>";
$obj1=new welcome2();
$obj1->msg1();
$obj1->msg2();