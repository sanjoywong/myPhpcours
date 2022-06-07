
<?php

$resultat ="<ul>";
for($i=-128;$i<=1257;$i++){ 

    if($i % 7 ===0){
        $resultat .= "<li>";
        $resultat .= $i;
        $resultat .= "</li>"; }
    }
    $resultat .="</ul>";
        echo "<hr>";
        echo $resultat;
        echo "<hr>";
?>

<?php

$j = -128;
$resultat1="<ul>";
while($j<=1257){
    if($j%7 === 0){
        $resultat1 .="<li>";
        $resultat1 .=$j;
        $resultat1 .="</li>";
    }
    $j++;
}
$resultat1 .="</ul>";

echo " utiliser boucle while <hr>".$resultat1."fin d'utiliser while<hr>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php
         for($i=-128;$i<=1257;$i++){ 
            if($i % 7 ===0){?>
                <li><?=$i?></li>
                <?php    }
         } ?>
    
    </ul>

</body>
</html>