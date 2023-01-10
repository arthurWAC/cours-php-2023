<?php

// LES FONCTIONS

// echo


// rand()
// min() max()
// shuffle()
// print_r()
// range()
// etc.

// 2 grandes familles de fonctions

// Fonctions natives, déjà disponibles dans PHP
// Est ce que ça n'existe pas déjà dans PHP ?

$tableau = [1, 2, 3];

$nbElements = count($tableau);

// Nom de la fonction
// Des parenthèses
// Un ou des paramètres, séparés par des virgules
// Important de respecter les types attendus
// Important de respecter l'ordre

$carreDeTrois = pow(3, 2); // Différent de pow(2, 3)

// ne pas hésiter à se référer à la documentation


// Fonctions personalisées
function double(int $nombre): int
{
    return 2 * $nombre;
}

$essai = double(4);
echo $essai;


$essai2 = double(124);
echo $essai2;


/**
 * La recette d'une fonction : 
 * 1. Le mot clé function
 * 2. Son nom : camelCase, explicite
 * 3. Le ou les paramètres, avec leur type respectif
 *        int => nombre entier
 *        float => nombre décimaux
 *        string => chaine de caractères
 *        bool => booléen
 *        array => tableau
 *        .... (il y en a d'autres) ....
 * 4. Le type de retour (cf. point précédent)
 * 5. Le return
 * 
 * 6. Les instructions de la fonction
 */

function repeteUnMot(string $mot, int $nbRepetition): string
{
    $motsRepetes = '';

    // Etape 6. je code le "coeur" de ma fonction

    return $motsRepetes;
}

// NE PAS CONFONDRE : 
// - la déclaration d'une fonction
// - son utilisation
// On parle de différence de "scope"

$name = 'Joe';

function buildSentence(string $name, string $room): string
{
    $sentence = '';
    $sentence .= $name;
    $sentence .= ' is in the ';
    $sentence .= $room;

    return $sentence;
}

echo '<p>' . buildSentence('Bryan', 'kitchen') . '</p>';

echo $name; // Joe

// echo $room; // N'existe pas
// echo $sentence; // N'existe pas







