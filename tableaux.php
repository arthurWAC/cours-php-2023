<?php
// 1 tableau permet de stocker et manipuler plusieurs valeurs

// Premier type de tableau : "auto indexé"
$tableau = [1, 2, 3]; // valeurs séparées par des virgules

// Auto indexé car on n'a pas défini manuellement les index. Et ils sont donc numériques, en commençant par 0. Et en s'incrémentant de 1 en 1.

// Affichage d'un tableau :
// echo ne fonctionne pas
// print_r($tableau);

$tableau = [0, 3, 4, 5, 8, 9, 12, 1234, 324, 3, 2];

echo '<pre>';
print_r($tableau);
echo '</pre>';
// Important : dans un tableau auto indexé, on ne mélange pas les types de valeurs

// On évitera d'avoir des tableaux comme ça : 
// $tableau = ['Bonjour', 3, 'salut', 5, 6];

// Dans un tableau, je peux mettre du texte, je peux mettre des nombres, je peux mettre d'autres tableaux !
$tableauAPlusieursDimensions = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
]; // Ecris sur plusieurs lignes pour + de lisibilité

echo '<pre>';
print_r($tableauAPlusieursDimensions);
echo '</pre>';

// Accéder à une valeur précise d'un tableau
// Pour ça, on va utiliser les index

echo $tableau[6]; // 12
// echo $tableau[11]; // Erreur

echo '<br />';
echo $tableauAPlusieursDimensions[0][2];
echo '<br />';
echo $tableauAPlusieursDimensions[1][1];

// La ligne ci-dessous renvoie une erreur car $tableauAPlusieursDimensions[0] est un tableau
// echo $tableauAPlusieursDimensions[0];

// ---------------

// Deuxième type de tableau : index manuels

$professeur = [
    'prenom' => 'Arthur',
    'age' => 35,
    'profession' => 'Directeur agence',
    'langages_preferes' => ['PHP', 'Javascript']
];

// Les index : 
// Chaines de caractères
// Pas de caractères spéciaux
// Ecrits en snake_case (tout en minuscule avec des underscore)

echo '<pre>';
print_r($professeur);
echo '</pre>';

$phrase = 'Je m\'appelle ' . $professeur['prenom'] . ' et j\'ai ' . $professeur['age'] . ' ans.';

echo '<p>' . $phrase . '</p>';
// echo '<p>Mes langages préférés sont : ' . $professeur['langages_preferes'] . '</p>';