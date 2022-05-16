<?php
// loops

//while
$j = 0;
while($j <=10){
   // echo $j.'_';
    echo "$j-";
    $j++;
}

//  Avec une boucle while afficher toutes les années de 1970 à aujoud'hui dans une liste ul
// Affichier le nombre de jour depus 1970 
// travailler dans une branche annees
 $i = 1970;
 echo "<ul>";
 while($i <= date('Y')){
     echo "<li> $i </li>";
     $i++;
 };
 echo "</ul>";

 var_dump(date("Y-m-d"));
 $cle =strtotime(date("Y-m-d"))-strtotime( "1975.01.01");
echo floor($cle/3600/24);
?>