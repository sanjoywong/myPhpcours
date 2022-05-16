<?php


$person1= [
         'prenom'=>'Carle',
         'nom'=>'Awa',
         'email'=>'carwa@yahoo.com'
        ];
 $people = [
     $person1,
     [
         'prenom'=>'Mohamed',
         'nom'=>'Mourad',
         'email'=>'Mohmou@yahoo.com'
     ],
     ['prenom'=>'Lucie',
     'nom'=>'Dupon',
     'email'=>'ludu@yahoo.com'
     ]
    ];

    echo '<pre>';
    print_r($people);
    // Afficher l'email et le nom de famille de Lucie
    echo '<hr>';
    echo 'L\'email de Lucie est '.$people[2]['email'].PHP_EOL;  //  PHP_EOL pour change la ligne
    echo 'Le nom de famille de Lucie est '.$people[2]['nom'].'<br>';
    $json_file = json_encode($people);
    echo $json_file;
    echo '</pre>';
    $json_obj ='{
        "nom" : "Durand",
        "prenom" : "Michel",
        "email" : "dumi@gmail.com"
    }';
    print_r($json_obj);
    echo '<hr>';
    $json_array_php = json_decode($json_obj);
    print_r($json_array_php);
?>