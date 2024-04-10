<?php
class calculation
{
  public $a,$b,$c;

  public function sum(){
    $this->c=$this->a+$this->b;
    return $this->c;
  }

  public function sub(){
    $this->c=$this->a-$this->b;
    return $this->c;
  }

}

$c1=new calculation();

$c1->a=50;
$c1->b=30;

echo "Sum of the two number: ". $c1->sum(); 
echo "<br>";
echo "Subtract of the two number: ". $c1->sub();  
