<?php
$exemplaires = [50000, 100, 50000, 2000, 2000, 500, 2000, 50000, 50000, 50000, 50, 2000, 100, 2000, 50000, 2000, 2000];
$cotes = [0.8, 15, 1, 0.8, 0.6, 8, 0.6, 1.2, 0.8, 1.2, 1.6, 0.6, 4, 0.6, 0.6, 1, 0.6];
// Commencer par "fusionner" les 2 tableaux en 1 seul qui contient toutes les informations (tableau de tableaux, avec des index bien nommés : 'exemplaires', 'achat', 'cote', 'revente')

$tableauAvecTout = [];

foreach ($exemplaires as $key => $exemplaire) {
    $cote = $cotes[$key];

    // Calcul prix d'achat
    $achat = 15;
    if ($exemplaire < 2000) {
        $achat = 30;
    }

    // Calcul prix de revente
    $revente = $achat * $cote;

    // On met tout bien rangé dans $tableauAvecTout
    $figurine = [
        'exemplaires' => $exemplaire,
        'achat' => $achat,
        'cote' => $cote,
        'revente' => $revente
    ];

    $tableauAvecTout[] = $figurine;
}


// Et utiliser array_column et array_sum
$tousMesAchats = array_column($tableauAvecTout, 'achat');
// echo '<pre>';
// print_r($tousMesAchats);
// echo '</pre>';

$total = 
    array_sum(array_column($tableauAvecTout, 'revente')) - 
    array_sum(array_column($tableauAvecTout, 'achat'));

echo $total;


foreach ($tableauAvecTout as $key => $figurine) {
    $tableauAvecTout[$key]['diff'] = $figurine['revente'] - $figurine['achat'];
}


echo '<pre>';
print_r($tableauAvecTout);
echo '</pre>';