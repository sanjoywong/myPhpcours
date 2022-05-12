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
/* $fruits = ['Banana','Kiwi','Pomme','Poire'];
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
// construire une tableau $nombres à l'aide la boucle for contenant des nombres de 14 à 78
$nombres = array();
$nombres = [];

for($i=0,$j=14;$i<65;$i++,$j++){
    // array_push($nombres,$j);
    $nombres[]= $i + 14; 
}; */
echo '<hr>';
// var_dump($nombres) ;

// tableau Associatif  
$fruits = ['Banane'=>'jaune','Pomme'=>'rouge','Wiki'=>'vert'];

// echo 'La couleur d\'une pomme est '.$fruits['Pomme'].'<hr>';

echo 'La longeur du tableau est de '.sizeof($fruits).'<hr>';
$ages = ['Michael'=>20,'Lucie'=>12,'Meuloud'=>56];
print_r($ages);
$chaine = implode('-',$ages); //assemble les valeurs du tableaux en une chaine de caratere
echo $chaine;

echo '<hr>';
$age2 = explode('-',$chaine);
print_r($age2);
echo '<hr>';
$ages['Paul'] = 22; // ajout d'un nouvel element au tableau
$ages['Lucie'] = 02; // modification d'une entrée du tableau
//print_r($ages);

foreach($ages as  $clef=>$valeur){
    echo $clef.' a ' . $valeur . ' ans<br>';
}
$html = '<ul>';
foreach($ages as  $key=>$value){
    $html .= '<li>'. $key.' a ' . $value . ' ans</li>';
}

$html .= '</ul>';
echo $html;
// Creer un tableau $notes avec un prenom => une note
// Afficher une liste ul des eleves et leur notes
// Marc a obtenu 15/20
$notes = ['Michael'=>10,'Lucie'=>9,'Meuloud'=>16];
$notes['Marc'] = 15;
$html = '<ul>';
foreach($notes as  $key=>$value){
    $html .= '<li>La note de '. $key.' est ' . $value . '/20</li>';
}

$html .= '</ul>';
echo $html;


//var_dump($ages);
//echo $tableau;
// echo 'Le moyenne de notes est : '.$moy;
echo '</pre>'
?>