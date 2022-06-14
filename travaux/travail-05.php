<?php
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
$json_obj = '[
    {
      "_id": "62867259d83d25d3135b2c8f",
      "isActive": true,
      "picture": "https://ximg.es/64x64/000/fff",
      "age": 32,
      "eyeColor": "blue",
      "name": "Delaney Lester",
      "gender": "male",
      "company": "ZANYMAX",
      "email": "delaneylester@zanymax.com",
      "phone": "+1 (827) 596-2879",
      "address": "537 Thatford Avenue, Drummond, Arizona, 2418",
      "registered": "2017-12-05T08:42:03 -01:00",
      "tags": [
        "enim",
        "consectetur",
        "cillum",
        "eu",
        "anim",
        "aliquip",
        "aliqua"
      ],
      "friends": [
        {
          "id": 0,
          "name": "Leticia Delgado"
        },
        {
          "id": 1,
          "name": "Myra Santana"
        },
        {
          "id": 2,
          "name": "Mary Brady"
        }
      ],
      "favoriteFruit": "strawberry"
    },
    {
      "_id": "62867259f6d6ded287f32418",
      "isActive": false,
      "picture": "https://ximg.es/64x64/000/fff",
      "age": 20,
      "eyeColor": "blue",
      "name": "Ball Shaffer",
      "gender": "male",
      "company": "ZENSURE",
      "email": "ballshaffer@zensure.com",
      "phone": "+1 (892) 589-2978",
      "address": "538 Linwood Street, Virgie, New York, 5067",
      "registered": "2017-02-28T07:21:27 -01:00",
      "tags": [
        "exercitation",
        "sint",
        "adipisicing",
        "proident",
        "sunt",
        "excepteur",
        "elit"
      ],
      "friends": [
        {
          "id": 0,
          "name": "Livingston Barton"
        },
        {
          "id": 1,
          "name": "Dina Harding"
        },
        {
          "id": 2,
          "name": "Knox Romero"
        }
      ],
      "favoriteFruit": "apple"
    },
    {
      "_id": "62867259bdfdc101b44a8938",
      "isActive": false,
      "picture": "https://ximg.es/64x64/000/fff",
      "age": 21,
      "eyeColor": "green",
      "name": "Raymond Jimenez",
      "gender": "male",
      "company": "TINGLES",
      "email": "raymondjimenez@tingles.com",
      "phone": "+1 (841) 522-3529",
      "address": "211 Wilson Avenue, Websterville, Pennsylvania, 7428",
      "registered": "2014-02-02T02:17:59 -01:00",
      "tags": [
        "ullamco",
        "labore",
        "commodo",
        "adipisicing",
        "officia",
        "occaecat",
        "minim"
      ],
      "friends": [
        {
          "id": 0,
          "name": "Dorothy Estrada"
        },
        {
          "id": 1,
          "name": "Campos Rosa"
        },
        {
          "id": 2,
          "name": "Dorothea Mccall"
        }
      ],
      "favoriteFruit": "strawberry"
    },
    {
      "_id": "62867259dea920c66395552f",
      "isActive": true,
      "picture": "https://ximg.es/64x64/000/fff",
      "age": 27,
      "eyeColor": "brown",
      "name": "Skinner West",
      "gender": "male",
      "company": "ISOLOGICA",
      "email": "skinnerwest@isologica.com",
      "phone": "+1 (901) 497-3126",
      "address": "907 Vandalia Avenue, Rossmore, Northern Mariana Islands, 4965",
      "registered": "2015-07-04T11:45:37 -02:00",
      "tags": [
        "id",
        "sit",
        "sunt",
        "veniam",
        "cupidatat",
        "ut",
        "nostrud"
      ],
      "friends": [
        {
          "id": 0,
          "name": "Vinson Stokes"
        },
        {
          "id": 1,
          "name": "Phoebe Richards"
        },
        {
          "id": 2,
          "name": "Mcfarland Pacheco"
        }
      ],
      "favoriteFruit": "strawberry"
    },
    {
      "_id": "628672595124660f8480893e",
      "isActive": true,
      "picture": "https://ximg.es/64x64/000/fff",
      "age": 27,
      "eyeColor": "brown",
      "name": "Cabrera Jackson",
      "gender": "male",
      "company": "FIBEROX",
      "email": "cabrerajackson@fiberox.com",
      "phone": "+1 (998) 493-2067",
      "address": "866 Whitty Lane, Bladensburg, Wisconsin, 2264",
      "registered": "2016-03-17T01:30:03 -01:00",
      "tags": [
        "sit",
        "anim",
        "Lorem",
        "id",
        "excepteur",
        "sint",
        "dolor"
      ],
      "friends": [
        {
          "id": 0,
          "name": "Jan Moses"
        },
        {
          "id": 1,
          "name": "Salazar Brooks"
        },
        {
          "id": 2,
          "name": "Tina Perez"
        }
      ],
      "favoriteFruit": "apple"
    }
  ]';

/*
$json_obj = file_get_content("./persons.json");
*/
$persons = json_decode($json_obj, true);

echo '<pre>';
print_r($persons);
echo "<hr>";
print_r($persons[2]->friends[1]->name);
echo "<hr>";
echo '</pre>';

echo '<h3>' . $persons[2]['friends'][1]['name'] . '</h3>';
echo '<hr>';
echo 'La couleur des yeux de Ball Shaffer est : <strong>' . $persons[1]['eyeColor'] . '</strong>';
echo '<hr>';
echo '<article>';
foreach ($persons as $key => $value) {
    echo '<img src="' . $value['picture'] . '"><br>';
    echo 'Nom: ' . $value['name'] . '<br>';
    echo 'Age: ' . $value['age'] . '<br>';
    echo 'Couleur des yeux: ' . $value['eyeColor'] . '<br>';
    echo 'Email: ' . $value['email'] . '<br>';
    echo 'Fruit Favori: ' . $value['favoriteFruit'] . '<br>';
    if ($value['isActive']) {
        echo 'ACTIF<br>';
    }
    $tag = implode(",", $value['tags']);
    echo '<p>Tags: ' . $tag . '</p>';
    echo '<hr>';
}
echo '</article>';