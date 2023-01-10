<?php

//
// Exercices autour du for
//

// 1.
// Ecrivez 100 fois : « Je ne copierais pas le code PHP de mon voisin »
$phrase = '<p>Je ne copierais pas le code PHP de mon voisin</p>';
for ($i = 1; $i <= 100; $i++) {
    echo $phrase;
}


// 2.
// Ecrivez 150 fois : « Je ne copierais pas le code PHP de mon voisin » en affichant chaque numéro de ligne : 
// 1)
// 2)
// etc.
for ($i = 1; $i <= 150; $i++) {
    echo '<p>' . $i . ') Je ne copierais pas le code PHP de mon voisin</p>'; 
}



// 3.
// Trouver la somme des 100 premiers nombres : 0 + 1 + 2 + 3 + … + 100 = ?

$somme = 0;

for ($i = 1; $i <= 100; $i++) {
    $somme += $i;
}

echo '<p>Somme : ' . $somme . '</p>';
// 4.
// Trouver la somme des 100 premiers nombres pairs : 2 + 4 + 6 + … + 200 = ?

// V1, avec le modulo
$somme = 0;
for ($i = 1; $i <= 200; $i++) {
    if ($i%2 == 0) {
        $somme += $i;
    }
}

echo '<p>Somme : ' . $somme . '</p>';

// V2, sans le modulo
$somme = 0;
for ($i = 2; $i <= 200; $i+=2) {
    $somme += $i;
}

echo '<p>Somme : ' . $somme . '</p>';


// 5.
// Trouver la différence entre la somme des carrés des 100 premiers nombres et le carré de la somme des 100 premiers nombres :
// (1^2 + 2^2 + 3^2 + … + 100^2) - (1 + 2 + 3 + … + 100)^2

// la somme des carrés
$sommeDesCarres = 0;
for ($i = 1; $i <= 100; $i++) {
    $carre = $i * $i;
    $sommeDesCarres += $carre;
}

// carré de la somme
$somme = 0;
for ($i = 1; $i <= 100; $i++) {
    $somme += $i;
}

$carreDeLaSomme = $somme * $somme;

// Différence
$difference = $sommeDesCarres - $carreDeLaSomme;


// en 1 boucle
$sommeDesCarres = 0;
$somme = 0;

for ($i = 1; $i <= 100; $i++) {
    $sommeDesCarres += $i * $i;
    $somme += $i;
}

// Différence
$difference = $sommeDesCarres - ($somme * $somme);