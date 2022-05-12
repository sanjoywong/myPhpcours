<?php
// tableau indexé
$tableau = array(); // declaration d'un tableau
$tableau =[];
$tableau = array('Lindi','Mardi',45,67.8,false);
// $tableau = [true,45,'Terre',56,[45,67,78]];

$tableau=[
    true,
    45,
    'Terre',
    56,
    [45,67,78]
];

echo '<pre> What\'s next<br>';

$tableau[] = 'Janvier';
$tableau[] = 45;
$tableau[] = false; 
var_dump($tableau);
$notes = [12,5,16,7];
// afficher la moyenne des notes
$moy = ($notes[0]+$notes[1]+$notes[2]+$notes[3])/4;
echo $tableau[2].'<br>';
echo 'Le moyenne de notes est : '.$moy;
echo '</pre>'
?>