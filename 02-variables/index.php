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
echo $c.'<br>';

// Creer 2 variables prix ht et tva
// Afficher le calcul du prix ttc

$ht = 20;
$tva = 0.1;
$prix = $ht +$ht * $tva;
echo 'Le prix ttc est : '.$prix.'<br>';

// Calculer l'age d'une personne en renseignant son année
// de naissance; utiliser la fonction date
/* $nd=date("2012-05-09");
echo date(DATE_RFC2822).'<br>';
echo $nd.'<br>';
echo date('Y-m-d')."\n"; */

//echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
//echo "July 1, 2000 est un " . date("l", mktime(0, 0, 0, 7, 1, 2000));

$anneeDeNaissance = 1990;
$anneEnCours = date("Y");
$age = $anneEnCours - $anneeDeNaissance;

echo 'Votre age est de '.$age.' ans<br>';
echo "voter age est de $age ans";

$i = 0;
$i +=1;
$i++;
echo $i;
$j = 10;
$j -=1;
echo $j;



?>