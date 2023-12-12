<?php
// $number=2;
// $divid_number=0;
// for($i=1;$i<=100;$i++)
// {
//   if(($number%$i)==0)
//   {
//     $divid_number++;
//   }

// }

$number = 2;
while ($number < 100) {
  $divid_number = 0;
  for ($i = 1; $i <= $number; $i++) {
    if (($number % $i) == 0) {
      $divid_number++;
    }
  }
  if ($divid_number < 3) {
    echo $number . '<br>';
  }
  $number = $number + 1;
}

echo 'prime number between 1 to 100 are:</br>';
for ($i = 1; $i <= 100; $i++) {
  $b = 0;
  for ($j = 1; $j <= $i; $j++) {
    if ($i % $j == 0) {
      $b = $b + 1;
    }
  }
  if ($b == 2) {
    echo ' ' . $i;
  }
}
echo "<br><br>";
echo 'prime number between 1 to 100 are:</br>';
for($i=0;$i<100;$i++)
{
  $b=0;
  for($j=1;$j<=$i;$j++)
  {
    if($i%$j==0)
    {
      $b=$b+1;
    }
  }
  if($b==2)
  {
    echo $i;
    echo "\n";
  }
}
