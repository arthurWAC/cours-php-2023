<?php

//
// Exercices autour des tableaux
//

// 1.
// Créer un tableau vide.
// Remplissez ce tableau avec les valeurs de 1 à 1000.
$nombres = [];

for ($i = 1; $i <= 1000; $i++) {
    $nombres[]= $i;  
}

// echo '<pre>';
// print_r($nombres);
// echo '</pre>';


// a) En parcourant le tableau, affichez tous les multiples de 3.
// b) En parcourant le tableau, affichez les nombres multiples de 3 ET de 5. 
// c) Et compter combien il y en a.

$compteur = 0;

foreach ($nombres as $key => $nombre) {

    echo 'Affiche $nombre : ' . $nombre;

    if ($nombre%3 === 0) {
        echo ' MULTIPLE DE 3';
    }

    if ($nombre%3 === 0 && $nombre%5 === 0) {
        echo ' ET MULTIPLE DE 5';
        $compteur++;
    }

    echo '<br />';
}

// 2.
// Créer un tableau de 5 prénoms masculins.
$prenomsMasculins = ['Arthur', 'Anatole', 'Martin', 'Jules', 'Jean'];

// Créer un tableau de 5 prénoms féminins.
$prenomsFeminins = ['Pauline', 'Amélie', 'Martine', 'Marie', 'Lucie'];

// Créer un tableau de 5 aliments.
$aliments = ['un gateau', 'une pomme', 'du pain', 'des sandwichs', 'des fruits'];

// Créer un tableau de 5 villes.
$villes = ['Paris', 'Rennes', 'Rome', 'Marseille', 'Londres'];

// Générer toutes les combinaisons possibles : 625

shuffle($prenomsMasculins);


foreach ($prenomsMasculins as $prenomM) {
    foreach ($prenomsFeminins as $prenomF) {
        foreach ($aliments as $aliment) {
            foreach ($villes as $ville) {
                echo '<p>' . $prenomM . ' et ' . $prenomF . ' mangent ' . $aliment . ' à ' . $ville . '.</p>';
            }
        }
    }
}



// Générer 50 phrases aléatoires du genre « Arthur et Pauline mangent une Pomme à Paris.

$prenomMAuHasard = rand(0, 4);
$prenomM = $prenomsMasculins[$prenomMAuHasard];

// $prenomF 
$alimentAuHasard = $aliments[array_rand($aliments)];












// 3.
// Créer un tableau de 10 valeurs comprises entre 0 et 100 aléatoirement.
// Trouver la valeur maximum  et la valeur minimum à chaque exécution du code.
// (sans utiliser les fonctions min et max)
$tableau = [];
for ($i = 1; $i <= 10; $i++) {
    $tableau[]= rand(0, 100);
}

echo '<pre>';
print_r($tableau);
echo '</pre>';

// Postulat de départ / Conditions initiales
$min = $tableau[0];
$max = $tableau[0];

// Traitement
foreach ($tableau as $valeur) {

    // Recherche du minimum
    if ($valeur < $min) {
        echo '<p>Changement de minimum, ' . $valeur . ' devient le nouveau minimum';
        $min = $valeur;
    }

    // Recherche du maximum
    if ($valeur > $max) {
        echo '<p>Changement de maximum, ' . $valeur . ' devient le nouveau maximum';
        $max = $valeur;
    }
}

// Affichage de la solution
echo '<p>Le minimum est ' . $min . '</p>';
echo '<p>Le maximum est ' . $max . '</p>';


echo '<p>Le minimum est ' . min($tableau) . '</p>';
echo '<p>Le maximum est ' . max($tableau) . '</p>';






