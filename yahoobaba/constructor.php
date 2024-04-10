<?php
class person
{
  public $name;
  public $age;

  function __construct($name="no name",$age=0)
  {
    $this->name=$name;
    $this->age=$age;
  }
  function show(){
    echo "Name: ".$this->name.", age: ".$this->age."<br>";
  }
}

$p1=new person();
$p2=new person("Raju",20);
$p3=new person("Rajiv",30);

$p1->show();
$p2->show();
$p3->show();
