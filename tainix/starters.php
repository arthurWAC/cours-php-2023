<?php
// Startet 5

$values = [7, 6, 1, 8, 10, 5, 1, 2, 3, 5, 8, 3, 7, 2, 2, 5, 1, 6, 4, 4, 3];

$somme = 0;

foreach ($values as $value) {
    if ($value >= 5) {
        $somme += $value;
    }
}

// Avec le continue
$somme = 0;

foreach ($values as $value) {

    if ($value < 5) {
        continue;
    }

    $somme += $value;
}


// STARTER 6

// Créer un tableau vide

$values = [10, 30, 99, 37, 80, 15, 48, 14, 87, 26, 97, 12, 77, 27, 11, 44, 49, 71, 95, 60, 97, 52, 97, 31, 16, 29, 23, 63, 88];

$tab = [];

foreach ($values as $value) {
    if ($value%3 !== 0) {
        continue;
    }

    $tab[] = $value;
    // Ou : array_push($tab, $value);
}

$reponse = implode('-', $tab);
echo $reponse;

// Ou directement
// echo implode('-', $tab);

function filtreLesMultiples(array $values, int $multiple = 3, int $maxValues = 100): array
{
    $tab = [];

    foreach ($values as $value) {
        if ($value % $multiple !== 0) {
            continue;
        }

        $tab[] = $value;
        // Ou : array_push($tab, $value);
    }

    return $tab;
}
echo '<br />';
echo implode('-', filtreLesMultiples($values, 3));
echo '<br />';
echo implode('-', filtreLesMultiples($values, 5));
echo '<br />';
echo implode('-', filtreLesMultiples($values, 7));

$multiple = 4;

filtreLesMultiples($values); // $multiple n'est pas renseigné, donc on prend la valeur par défaut

filtreLesMultiples(
    multiple: $multiple,
    values: $values
);

filtreLesMultiples(
    $values,
    multiple: 3
);

filtreLesMultiples($values, 4, 10);
filtreLesMultiples($values, 10);

filtreLesMultiples(
    $values,
    maxValues: 10
);