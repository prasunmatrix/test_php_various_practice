<?php
abstract class ParentClass{
  // Abstract method with argument
  abstract protected function prefixName($name); 
}

class ChildClass extends ParentClass{
  // The child class may define optional arguments that is not in the parent's abstract method
  public function prefixName($name,$separator=".",$greet="Dear"){
    if($name=="John Doe")
    {
      $prefix="Mr";
    }
    elseif($name=="Jane Doe")
    {
      $prefix="Mrs";
    }
    else
    {
      $prefix="";
    }
    return "{$greet} {$prefix}{$separator}{$name}";
  }
}

$obj=new ChildClass;
echo $obj->prefixName("John Doe");
echo "<br>";
echo $obj->prefixName("Jane Doe");
echo "<br>";
echo $obj->prefixName("Prasun Kundu");