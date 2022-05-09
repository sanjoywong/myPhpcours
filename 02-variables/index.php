<?php

echo "Hi welcome to the world!<br>";
define('HOST','localhost');
define('User','root');
// define('user';'root',true);

echo HOST.'<br>';
echo User.'<br>';

var_dump(User);
print_r(User);
echo User.'<br>';

$x =4;
$y = 2;
$z = 5;

$calcul = $x + $y;
$calcul = $x * $y;
$calcul = $z % $y;
$calcul = $x ** $y; 
$calcul = $x + ($y * $z);

echo $calcul.'<br>';

//affectation
$a =5;
$a = '5';
$b =7;

 $a += 1; // $a = $a +6;
 // $a += $b;
 // $a -= $b;
 //$a %= $b;
 //$a /= $b;
echo $a.' sdfsq '.$b.'<br>';
 $a **= $b-4;
echo $a.' sdfsq '.$b.'<br>';
//echo round($a,3);

$c = 'Hello ';
$c.= 'World.';
echo $c;


?>