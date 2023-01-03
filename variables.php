<?php

// Le premier type de variable : 
// Les CHAINES DE CARACTERES

// Déclaration d'une variable, utilisation du symbole $

// Le nommage est très important
// Pas de caractères spéciaux
// On utilisera du camelCase
// On ne nommera PAS :$a, $b, $var, $truc, $carac, $mPCDC etc...
// Quelques exceptions : petits exercices d'algos, $i, $key dans certains cas

$sautDeLigne = '<br />';

$maPremiereChaineDeCaracteres = 'Bonjour' . $sautDeLigne;

echo $maPremiereChaineDeCaracteres;


$maPremiereChaineDeCaracteres = 'Au revoir';

echo $maPremiereChaineDeCaracteres;


/*
Notes : 
L'opérateur de concaténation est le point .
La concaténation sert à "coller" les chaines de caractères entre elles
*/

$prenom = 'Bryan';
$piece = 'Kitchen';

$phrase = $prenom . ' is in the ' . $piece;

echo $sautDeLigne;
echo $phrase;

$piece = 'Bathroom';

$autrePhrase = ''; // Chaine de caractères vide
$autrePhrase = $autrePhrase . $prenom;
$autrePhrase = $autrePhrase . ' is in the ';
$autrePhrase = $autrePhrase . $piece;

echo $sautDeLigne;
echo $autrePhrase;
// => Bryan is in the Bathroom

// Opérateur de concaténation "condensé"
$autrePhrase = ''; // J'initialise, un seul égal =
$autrePhrase .= $prenom; // Je remplis .=
$autrePhrase .= $sautDeLigne;
$autrePhrase .= ' is in the ';
$autrePhrase .= $sautDeLigne;
$autrePhrase .= $piece;


echo $sautDeLigne;
echo $autrePhrase;