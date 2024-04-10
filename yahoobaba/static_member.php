<?php
class personal{
  public static $name="yahoo baba";
  // public static function show(){
  //   echo self::$name;
  //   echo "<br>";
  //   echo "test static method";
  // }


  // public function __construct($n)
  // {
  //   self::$name=$n;
  // }
}

class member extends personal{
  public static function show(){
    echo parent::$name;
    echo "<br>";
    echo "test static method";
  }
}
// echo personal::$name;
// echo "<br>";
//echo personal::show("WOW");
//echo personal::show();

// $obj=new member();
// $obj->show();
echo member::show();
?>