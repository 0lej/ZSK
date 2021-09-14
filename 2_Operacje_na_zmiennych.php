<?php

echo PHP_VERSION ; //7.3.10
echo"<br>";
echo 2**10;
echo"<br>";
$x=1;
$y=10;

echo $x<=>$y;

$x=1;
$y=1.0;

echo"<br>";
echo gettype($x);
echo"<br>";

echo gettype($y);
echo"<br>";

//identyczne
if ($x==$y) {
  echo "Równe<br>";
}else {
  echo "Równe<br>";
}

if ($x===$y) {
  echo "identyczne<br>";
}else {
  echo "Różne<br>";
}
/*
postinkrementacja $x++
preinkrementacja ++$x
postdekrementacja $x--
predekrementacja --$//
*/
$x=10;
$x=$x++;
echo $x; //10
$x=++$x;
echo $x; //11
$y=++$x;
echo $x; //12
echo $y; //11


$x=1
echo $x // 1
$x=$x++
echo $x //1
$x = ++$x //2
$y=++$x // y3 x3
$y=$x++ // y3 x4
?>
