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

// Cas particulier de l'apostrophe
$phrase = 'Je suis à l\'école'; // Utilisation d'un backslash \ (sur le 8)
// "Echappement de caractère"

// Utilisation des doubles quotes
$phrase = "Je suis à l'école et je dis : \"Bonjour\"";

// Publipostage de variables
$lieu = 'jardin';
$phrase = "Je suis dans le $lieu"; // La variable est exécutée
echo $sautDeLigne;
echo $phrase;

// Identique à : 
$phrase = 'Je suis dans le ' . $lieu;



// -----------------------------------------------

// Deuxième type de variable, les nombres ENTIERS

$unNombre = 35;
$unAutreNombre = 11;

// Il y a une limite à ce que peut contenir un entier
// PHP n'est pas "très bon" pour gérer des grands nombres

$unNombreNegatif = -7;

// Calculs
// 5 opérateurs importants pour faire des calculs
// Addition : +
// Soustraction : - (tiret du 6)
// Multiplication : * (étoile)
// Division : / (slash)
// Modulo : % (reste de la division euclidienne)

$calcul = $unNombre + 9;

$calcul = $unAutreNombre - 34;

$calcul = $unNombre * $unAutreNombre;

$calcul = $unAutreNombre / $unNombre;

$calcul = $unNombre + $unNombre + $unNombre + $unAutreNombre;

echo $sautDeLigne;
$calcul = $unNombre + ($unAutreNombre * $unNombreNegatif);
echo $calcul;

echo $sautDeLigne;
$calcul = $unNombre + $unAutreNombre * $unNombreNegatif;
echo $calcul;
// On peut faire des opérations mathématiques aussi complexes que nécessaires

$calculIntermediaire = $unAutreNombre * $unNombreNegatif;
$calculFinal = $unNombre + $calculIntermediaire;

$participants = 20;
$tailleDeGroupe = 3;

$participantsSansGroupe = $participants % $tailleDeGroupe;

$nbGroupesComplets = ($participants - $participantsSansGroupe) / $tailleDeGroupe;


// Opérateurs condensés
// Addition : +=
// Soustraction : -= 
// Multiplication : *=
// Division : /=
// Modulo : %=

$somme = 0;
$somme = $somme + 1; // 1
$somme = $somme + 2; // 3
$somme = $somme + 3; // 6

// Version condensée
$somme = 0;
$somme += 1;
$somme += 2;
$somme += 3;

// += et -= sont souvent utilisés
// Les autres beaucoup moins, à l'appréciation du développeur

// Opérateurs d'incrémentation et décrementation
// Souvent utilisés
$compteur = 5;
$compteur++; // 6

$autreCompteur = 12;
$autreCompteur--; // 11

$a = 1;
// Ces 3 lignes font la même chose :
$a = $a + 1;
$a += 1;
$a++;

// --------------------------------------------------

// 3ème type de variable : les nombres DECIMAUX

$unNombreDecimal = 23.34;
// Il faut utiliser le point, et non la virgule

// On peut utiliser tous les opérateurs de calculs sur les nombres décimaux

$unNombreEntier = 34 + 18;

$unNombreDecimal = 34 / 18;
// Quand on manipule des nombres entiers, on peut finir avec des nombres décimaux