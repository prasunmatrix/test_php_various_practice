<?php
  echo $a=0;
  echo "<br>";
	echo $b=1;
  echo "<br>";
	//$c=0;
	$temp;
	// while($c<=8)
	// {
	//   $c=$a+$b;
	//   $b=$c;
	//   $c++;
	// }
	//echo $a.",";
	//echo $b.",";
	//echo $c.","; 
  while($b <= 25)
  {
    $a=$a+$b;
    //$temp=$b;
    //$a=$temp;
    //$b=$b++;
    $b=$a+$b;
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
  }
  //echo $b;
?>