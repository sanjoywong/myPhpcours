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
$notes = ['Mouel'=>10,'Lumme'=>9,'Meulandie'=>16];
$notes['Marc'] = 15;
$html = '<ul>';
foreach($notes as  $key=>$value){
    $html .= '<li>La note de '. $key.' est ' . $value . '/20</li>';
}

$html .= '</ul>';
echo $html;

//$ages = ['Michael'=>20,'Lucie'=>12,'Meuloud'=>56];

$tab4 = array_merge($ages,$notes);
asort($tab4);
print_r($tab4);

$planetes = ['mars','terre','pluton','venus','jupiter'];
/* print_r($planetes);
echo '<hr>';
asort($planetes); // tri des valeurs d'un tableau par ordre
print_r($planetes); */

print_r($planetes);
echo '<hr>';
arsort($planetes); // tri des valeurs d'un tableau par ordre
print_r($planetes);
//rsort
//arsort
//ksort()
//krsort

// Créer un tableau avec les mois de l'annnée
// - afficher la valeur de la 5eme ligne de ce tableau
// - afficher la valeur de l'index 10
// - modifier le mois d'avril en le mettant en majuscule

// $mois = ['janvier','fevrier','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','decembre'];
// echo 'La 5eme ligne de ce tableau est : ' . $mois[4] .'<br>' ;
// echo 'La valeur de l\'index 10 est : ' . $mois[10] . '<br>';
// echo '<hr>';
// $mois[3] = 'AVRIL';
// $mois[3] = strtoupper($mois[3]);

// 

 $tab = [
     'voiture' => 'ford',
     'nombre' => [1,2,3,4],
     'planete' => ['mars','terre']
 ];
 echo 'La valeur du tableau tab est 1. '.'<hr>';
 print_r($tab);

 $tab = [];
 $tab[] = ['A','B','C'];
 $tab[] = ['Q','R','T'];
 $tab[] = ['E','U','P','I'];
 echo 'La valeur du tableau tab est 2.'.'<hr>';
 print_r($tab);
 echo ' c\'est fini !<hr>';
 //echo $tab['planete'][0];
 
// Ecrire le mot CEPPIC

// echo $tab[0][2].$tab[2][0].$tab[2][2].$tab[2][2].$tab[2][3].$tab[0][2];

// $tab2 = [
//     [0,1],
//     [
//         2,
//         [2,3]
//     ]
//     ];
// // echo $tab2[1][1][1];

$produits = [
    ['nom' => 'chausettes', 'prix' => 10],
    ['nom' => 'velo', 'prix' => 500],
    ['nom' => 'carotte', 'prix' => 2],
    ['nom' => 'boulon', 'prix' => 9],
];
print_r($produits);
// Boucler sur le tableau produits (foreach) en affichant le nom du produit et le prix selon le modele :
//    'nom du produit' : 'prix' €
// dans une liste ul , le 'nom du produit' dans un h3 et le prix dans un p
/* echo 'La valeur du tableau produits : '.'<hr>';
foreach($produits as $key=>$vale ){

     //print_r($vale);
    echo  '<h3>'.$vale['nom'].'</h3>';
    echo  '<p>'.$vale['prix'].' € '.'</p>';

    //echo  $valeur[0].' : '.$valeur[1].' € '.'<hr>';

} */






echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau Produits</title>
</head>
<body>
 <h1>Produits</h1>
 
<!-- 
   <?php
     foreach($produits as $key=>$vale ){

       echo  '<h3>'.$vale['nom'].'</h3>';
       echo  '<p>'.$vale['prix'].' € '.'</p>';  
    }; 
    ?>
     --> 

    <ul>
    <?php foreach($produits as $produit ){ ?>
         <li>
            <h3><?php echo $produit['nom']; ?></h3>
            <p><?php echo $produit['prix']; ?>  €</p>  
        </li>
        <?php } ?>
    </ul>
    
</body>
</html>

