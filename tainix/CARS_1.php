<?php

$plates = ['AL-215-FF', 'CU-282-BV', 'WX-969-SU', 'NG-279-AX', 'ET-755-WW', 'NU-340-EU'];

$score = 0;

foreach ($plates as $plate) {
    $score += score($plate);
}

echo '<p>Score : ' . $score . '</p>';
/*
* Créer une fonction qui analyse la plaque et une position, et renvoie true ou false selon la symétrie
 * Par exemple analyse('ED-845-TE', 0) renvoie true, symétrie sur la position 0.
 * */
function analyse(string $plate, int $position): bool
{
    if (strlen($plate) != 8) {
        die('Mauvais format');
    }

    return ($plate[$position] === $plate[8 - $position]);
}

function score(string $plate): int
{
    // 1. J'initialise le score
    $score = 1;
    $nbSymetries = 0;

    // 2. Je vérifie ma position 0
    if (analyse($plate, 0)) {
        $score *= 10;
        $nbSymetries++;
    }

    // 3. Ma position 1
    if (analyse($plate, 1)) {
        $score *= 10;
        $nbSymetries++;
    }

    // 4. Ma position 3
    if (analyse($plate, 3)) {
        $score *= 10;
        $nbSymetries++;
    }

    // Je retourne mon score
    return $score;
    return pow(10, $nbSymetries);

    // Avec une boucle pour moins de répétition
    // $positionsAVerifier = [0, 1, 3];
    // foreach ($positionsAVerifier as $position) {
    //     if (analyse($plate, $position)) {
    //         $score *= 10;
    //         $nbSymetries++;
    //     }
    // }
}

// 1, 10, 100, 1000
// Puissances de 10
// a) Compter le nombre de symétries, puis pow
// b) On part de 1, et on multiplie par 10 à chaque symétrie