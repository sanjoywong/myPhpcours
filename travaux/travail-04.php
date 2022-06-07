<?php
function afficherMessage($prenom){

    echo "<p>Bonjour $prenom </p>";
}

afficherMessage("Michael");


function calculerSurface(int|float $a, int|float $b) :float{
        return abs($a*$b);
}

echo "La surface est ".calculerSurface(5,6).".";

function calculerLongueurLargeur(float $diagonale){
         $diagonale = 2.54*abs($diagonale);
         $Largeur = sqrt($diagonale**2*81/(16*16+81));
         $Longeur = 16/9*$Largeur;
         return array(round($Largeur,2),round($Longeur,2));
}

$resultat2 = calculerLongueurLargeur(50);
var_dump($resultat2);
echo "<p>Le Largeur est ".str_replace('.',',',$resultat2[0])." cm</p>";
echo "<p>Le Longeur est ".str_replace('.',',',$resultat2[1])." cm</p>";


?>