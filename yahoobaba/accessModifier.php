<?php

class base
{
  //private $name;
  protected $name;
  //public $name;
  public function __construct($n)
  {
    $this->name = $n;
  }

  public function show()
  {
    echo "Your Name : " . $this->name . "<br>";
  }
}

class derived extends base
{
  public function get()
  {
    echo "Your Name : " . $this->name . "<br>";
    //$this->show();
  }
}

$test = new base("Yahoo baba");

//$test->name = "Testing public property";

$test->show();

$test1 = new derived("baba Yahoo");
$test1->get();
