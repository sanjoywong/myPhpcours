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
$fruit2 .= 'Poire';

echo '<br>',$fruit1,'<br>'.$fruit2;

echo '<br>',$fruit1;
echo '<br>',$fruit2.'<br>';

$html ='';
/* $html ='<h1>';
$html ='Cours de php';
$html ='<h1/>'; */
$html .= '<h1> Cours de php </h1>';
$html .= '<p>Ajoute d\'un texte dans un paragraphe';

echo $html;

?>
<h2>Texte ne html dans une php</h2>

<?php
 $titre = 'Texte de titre';
?>

<h4><?php echo $titre,' === hq'; ?></h4>
<h4><?=$titre; ?></h4>
<!--
    $data1 = 'Hello';
    $data2 = 'les terriens';
    $data3 = 'Mars';
    $data4 = 'planete';

    Avec les 2 methodes de concatenation 
    ecrire la phrase dans un paragraphe:
    Hello, les terriens. Je viens de la planete Mars
-->
<?php
    $data1 = 'Hello ';
    $data2 = 'les terriens';
    $data3 = ' Mars';
    $data4 = 'planete';
?>

<h4><?php echo '<p>'.$data1.', '.$data2.'. Je viends de la '.$data4.$data3.'.'.'</p>' ?></h4>
<h4><?=$data1,$data2,'.   Je viends de la ',$data4,$data3,'.'; ?></h4>

<?php

$html = '';
$html .= '<p>'.$data1.','.$data2;
$html .= '. Je viends de la '.$data4.' '.$data3.'.</p>';
echo $html;

?>