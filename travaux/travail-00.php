<?php
/*
 Travail-00 :

    Créer un tableau php avec ses nombres : 27,15,34,379,248,5643,81,211,999,142,300,572
    Tester les nombres de ce tableau pour savoir si chaque nombre est pair ou impair (un nombre est pair si le resultat de la division par 2 est 0)
    Afficher les résultats sous forme de liste html ul comme ceci (xx,yy sont des nombres) :

* xx : pair
* yy : impaire
etc ...
 */
 
$tabs = [27,15,34,379,248,5643,81,211,999,142,300,572];

foreach ($tabs as $key => $value) {
    
    if (($value%2)==0) {
        echo "$value est pair <br>";
    } else {
        echo "$value est impair <br>";
<<<<<<< HEAD
    }
    ;
}
=======
    };
    
}
>>>>>>> shengzhuo
