<?php
// tableau indexé
$tableau = array(); // declaration d'un tableau
$tableau =[];
$tableau2 = array('Lindi','Mardi',45,67.8,false);
//$tableau = array('Lindi','Mardi',45,67.8,false);
//$tableau = [true,45,'Terre',56,[45,67,78]];

$tableau=[
    true,
    45,
    'Terre',
    56,
    [45,67,78]
];

echo '<pre> tableau  :<br>';
 print_r($tableau);
 echo '<pre> What\'s next<br>';
$tableau[] = 'Janvier';
$tableau[] = 45;
$tableau[] = false; 
// var_dump($tableau);
array_push($tableau,'voiture'); // ajout de voiture au tableau
array_push($tableau,'voiture1','voiture2');

$notes = [12,5,16,7];
// afficher la moyenne des notes
$moy = ($notes[0]+$notes[1]+$notes[2]+$notes[3])/4;
echo count($tableau);
$tab3 = array_merge($tableau,$tableau2,$notes); //assemble des tableaux
echo '<br>what\'s next one onononno:<br>';
//var_dump($tableau);
echo count($tab3).'<br>'.' Here we are :'.'<br>';
var_dump($tab3);
//echo $tableau;
// echo 'Le moyenne de notes est : '.$moy;
echo '</pre>'
?>