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
/* echo count($tableau);
echo '<hr>';
$tab3 = array_merge($tableau,$tableau2,$notes); //assemble des tableaux
echo '<br>what\'s next one onononno:<br>';
//var_dump($tableau);
echo count($tab3).'<br>'.' Here we are :'.'<br>';
var_dump($tab3); */
echo '<hr>';
echo '<br>Les elements dans l\'array tableau2:<br>';
for($i=0;$i <count($tableau2);$i++){
    echo $tableau2[$i].'<br>';
    if($i== count($tableau2)- 1) echo 'Fin .';
};
echo '<hr>';
$fruits = ['Banana','Kiwi','Pomme','Poire'];
$html = '';
for($i=0;$i<count($fruits);$i++){
    if($i== count($fruits)- 1) $html .=$fruits[$i].'.';
    else  $html .=$fruits[$i].',';
}
echo $html;
echo '<hr>';
foreach($fruits as $fruit){
    echo $fruit.'<br>';
};
//echo $tableau;
// echo 'Le moyenne de notes est : '.$moy;
echo '</pre>'
?>