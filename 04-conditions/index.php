<?php
/*
<
>
>=
<=
==  comparaison d'egalite en valeur
=== comparaison d'egalite en valeur et en type
!= difference sur la valeur
!==  différence sur le type
*/

//=============
// if/elseif/else
//=============

use function PHPSTORM_META\type;

$age = 13;
if($age>=18){
    echo 'Vous avez le droit de voter';
} elseif($age <= 25){
    echo "Vous avez le droit de voter car votre age est de $age ans";
} else {
   // echo 'Vous n\'avez le droit de voter car voter age est de '.$age;
   echo "Vous n'avez le droit de voter car votre age est de $age ans";
}

echo '<hr>';

$heure = date('H');
echo $heure.'<br>';
// avec la condition if /else afficher si on est le matin ou le soir

if($heure<=12){
    echo " C'est le matin, il est $heure !";
} elseif($heure<=16) {
    echo " C'est l'après-midi, il est $heure !";
} else {
    echo " C'est le soir, il est $heure !";
};

echo '<hr>';
// avec la condition if /elseif/else afficher si on est le matin l'après-midi ou le soir
$a = 20;
$b = 5;
$c1 = 10;
$c2= '10';

if ($b != 3){
    echo 'La variables $b n\'est pas égale à 3';
}

// tester $c1 et $c2avec == et ===
echo '<hr>';
if($c1 == $c2){
    // echo "La variables $c1 n'est pas égale à $c2";
    echo "La variables $c1 est égale à $c2";
} else{
    echo "La variables $c1 n'est pas égale à $c2";
}

echo '<hr>';
if($c1 === $c2){
    // echo "La variables $c1 n'est pas égale à $c2";
    echo "La variables ont la meme type";
} else{
    echo "La variables n'ont pas la meme type";
    echo '<hr>';
    // echo "La variables $c1 est de".$c1;
    
}
echo '<hr>';
if($c2 !== 10){
    // echo "La variables $c1 n'est pas égale à $c2";
    echo "La variable  n'a pas la meme type";
}
echo '<hr>';
var_dump($c2);

// =================
// switch /case
// =================
$couleur = 'gris';

switch ($couleur) {
    case 'red':
         echo 'votre couleur favorite est le rouge';
         echo '<hr>';
        break;
    case 'blue':
         echo 'votre couleur favorite est le bleue';
         echo '<hr>';
        break;
    case 'green':
        echo 'votre couleur favorite est le vert';
        echo '<hr>';
        break;
    default:
        echo "votre couleur favorite est ni le rouge, ni le vert, ni le bleu";
        break;
}
echo '<hr>';
$food = 'cake';

$return_value = match($food){
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
};

var_dump($return_value); 
echo '<hr>';
$var1 = 11;
$var2 ='';
// empty teste si la valeur de la variable est vide: 0,'',null,false
if(empty($var1)){
    echo 'la variable $var1 est vide!';
}else{
    var_dump($var1);
}

/* if (isset($var2)){
    echo 'Test';
} */

$articles=['','planete','foot'];
//faire une condition sur ce tableau: tester l'article à l'index 0 si il est non vide;, sinon afficher "il n'y a pas d'articles"
//creer une branche articles, que vous fusionnerez avec main lorsque l'exercice est fini

if(isset($articles[0])){
    echo " l'article à l'index 0 n'est pas vide";
}else{
    echo "il n'y a pas d'articles";
};
echo '<hr>';
$articles=[101];

if(!empty($articles[0])){
    echo " l'article à l'index 0 n'est pas vide";
    var_dump($articles[0]);
}else{
    echo "il n'y a pas d'articles!";
};

?>