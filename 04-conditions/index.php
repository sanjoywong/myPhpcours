<?php
/*
<
>
>=
<=
==
===
!=
!== 
*/

//=============
// if/elseif/else
//=============

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
// avec la condition if /elseif/else afficher si on est le matin l'après-midi ou le soir

?>