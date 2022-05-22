<?php

$ami_json = json_decode(file_get_contents('./persons.json'));

/*
Travail-02 :

    Travaller avec le fichier json persons.json dans le dossier Travaux
    Afficher le(a) deuxieme ami(e) de Raymond Jimenez dans un titre html <h3>
    Afficher la couleur des yeux de Ball Shaffer en gras html strong sous la forme d'une phrase : La couleur des yeux de Ball Shaffer est :
    Afficher dans une balise html article dans l'ordre suivant :
        image de la personne dans une balise html img
        Nom : le nom de la personne
        Age: age de la personne
        Couleur des yeux : la couleur des yeux de la personne
        Email: email de la personne
        Age: age de la personne
        Fruit favori : fruit favori de la personne
        Si isActive est à true : afficher ACTIF
        Tags : afficher tous les tags de la personne séparé d'une virgule
        Ne pas afficher la derniere la deniere virgule de tous les tags
        Chaque personne sera séparé d'une ligne horizontale html <hr>

Vous trouverez une capture du resultat attendu.
 */
//var_dump($ami_json);
//print_r($ami_json);
//echo $ami_json[0]->name;
?>
  <!DOCTYPE html>
  <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>le(a) deuxieme ami(e) de Raymond Jimenez</title>
        </head>
        <body>
            <h3><?=$ami_json[2]->friends[1]->name ?></h3>
            <p>La couleur des yeux de Ball Shaffer est : <strong><?=$ami_json[1]->eyeColor ?>.</strong></p>
            <article>
                
                <?php foreach ($ami_json as $personne) { 
                    echo '<hr>'; ?>
                    <img src=<?=$personne->picture ?> alt="">
                    <p>Nom : <?=$personne->name  ?></p>
                    <p>Age : <?=$personne->age  ?></p>
                    <p>Couleur des yeux : <?=$personne->eyeColor  ?></p>
                    <p>Email : <?=$personne->email  ?></p>
                    <p>Fruit favori : <?=$personne->favoriteFruit  ?></p>
                    <?php 
                      if($personne->isActive){
                          echo '<p>ACTIF</p>';
                      };
                      $string=implode(',',$personne->tags);
                      ?>
                      <p>Tags : <?=$string  ?></p>
                      
                <?php echo '<hr>'; } ?>

                
            </article>
  </body>
  </html>