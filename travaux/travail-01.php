<?php
/*
Travail-01 :

    Réaliser un script qui convertit une température de degré Celsius °C en degré Fahrenheit °F
    Afficher les résultats dans un tableau html table ,
     utiliser la fonction php round pour arrondir à l'unité supérieur
    Voici le tableau de conversion que vous devez avoir :

     <!--     |  °C   |   °F  |
        <?php foreach($tabs as $degre) { ?>
            |  <?php=$degre ?> |   <?php=round(($degre*1.8)+32) ?>  |
        <?php} ?> -->

| °C | °F |
|--- |--- |
| 25 | 77 |
| 03 | 37.4 |
| 35 | 95 |
| 11 | 51.8 |
 */

$tabs = [25,3,11,24,99,14];

/* 
$number = sprintf("%'5s",strval($tabs[2]));
var_dump(strval($tabs[2]));

echo $number."<br />";
  */
/* 
foreach ($tabs as $degre) {
    $degreF = round(($degre*1.8)+32);
    //$newStr1= sprintf("%'5s",$degre );
    $newStr1 = str_pad($degre,2,"0",STR_PAD_LEFT);
    $newStr2= sprintf("%'5s",$degreF );
   // echo str_pad($newStr1,5," ",STR_PAD_BOTH);
 //var_dump($newStr1);
 echo "| $newStr1 | $newStr2 |<br>"; 
}; */

?>
<!DOCTYPE html>
<html lang="en">
<style>
    table, th, td {
    border:1px solid black;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher les température de degré Fahrenheit °F </title>
</head>
<body>
    <?php 
            $s1="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;°C";
            $s2="&nbsp;&nbsp;&nbsp;&nbsp;°F";
            ?>
        <ul>|<?=$s1 ?> |<?=$s2 ?> |</ul>
    <?php foreach($tabs as $degre) { 
        $degreF = round(($degre*1.8)+32);
        $newStr1 = str_pad($degre,2,"0",STR_PAD_LEFT);
       ?>
        <ul>|  <?=$newStr1 ?>°C |  <?=$degreF ?>°F  |</ul>
        <?php } ?>

        <table style="width:50%">
            <tr>
            <th>°C</th>
            <th>°F</th>
            </tr>
            <?php foreach($tabs as $degre) { 
                  $degreF = round(($degre*1.8)+32);
                  $newStr1 = str_pad($degre,2,"0",STR_PAD_LEFT);
            ?>
            <tr>
            <td style="text-align:center"><?=$newStr1 ?>°C</td> 
            <td style="text-align:center"> <?=$degreF ?>°F </td>
            </tr>
        <?php } ?>

        </table>
</body>
</html>