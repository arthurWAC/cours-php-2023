<?php
declare(strict_types=1);

// NOS FONCTIONS

function puissance(int $force, int $agilite, int $defense): int
{
    $puissance = 0;

    $puissance += $force * 2;
    $puissance += $agilite;

    // round
    $puissance += (int) round($defense / 2); // On passe de float à int

    return $puissance;
}

// Test de ma fonction
// $essai = puissance(5, 5, 6);
// if ($essai === 18) {
//     echo 'FONCTION OK';
// } else {
//     echo 'TOUJOURS PAS BON';
// }


// // Test de ma fonction
// $essai = puissance(5, 5, 7);
// if ($essai === 19) {
//     echo 'FONCTION OK';
// } else {
//     echo 'TOUJOURS PAS BON';
// }


// 2. Créer une fonction qui génère un ennemi aléatoirement, c'est à dire qui retourne un tableau avec un nom et une puissance. Cette fonction prendra en paramètre un niveau. La puissance de l'ennemi sera alors comprise entre 10 * $niveau et 20 * niveau. 
// Chaque ennemi s'appelera "Ork " suivi de 6 caractères majuscules aléatoires
// Regarder du côté de str_shuffle et substr
function creerUnEnnemi(int $niveau): array
{
    // Puissance
    $puissance = rand(10 * $niveau, 20 * $niveau);

    // Nom
    $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $alphabet = str_shuffle($alphabet);
    $nom = substr($alphabet, 0, 6);

    $ennemi = ['nom' => 'Ork ' . $nom, 'puissance' => $puissance];

    return $ennemi;

    // return [
    //     'nom' => 'Ork ' . $nom,
    //     'puissance' => $puissance
    // ];
}