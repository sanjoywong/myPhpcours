<h1> Un titre</h1>

<?php
// echo/print
echo ' Texte en php' , ' Autre texte<br>';
// print peut seulment avoir une parametre
print 'Texte en php avec print<br>' ;
//, 'Autre texte avec print<br>';
// un commentaire
# un commentaire

/* commentaires 
sur plusieurs
lignes
*/

//variables
 $variable = 'Une variale';
 $variable = 'Une autre variable';
 echo $variable,'----------------',$variable,'<br>';
// c'est pas bon : $3var = 34;
$_var = 34;

echo $_var;

$camlCase = 'une variable en camel';
$snake_case = 'une variable en snake case';
$PascaleCase = 'une variable pascale case';
$var = 'une variable en kebab-case';

// string
$nom = 'mohamed';
// int
$nombre = 34;
// float
$nombreDecimale = 23.7;
// boolean
$vrai = true;
$faux = false;
// array/objet
$tableau =['grouge',34,45.6,false];
// null
$variable = null;
echo '<br>';
// simple/double guillemets (quotes)

//$message = "aujourd'hui";
$message = 'ah ah; aujourd\'hui';
echo $message;
$txt = 'Bonjour';
echo '<br>','$txt tout le monde <br>';
echo "$txt tout le monde";

$fruit1 = 'Kiwi';
$fruit1 = 'Pomme';
$fruit2 = 'Banane';

echo '<br>',$fruit1,'<br>'.$fruit2;




?>
