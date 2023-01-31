<?php
$islandX = 42;
$islandY = 31;
$planes = ['P:62,1C:WAD', 'P:94,67C:KQV', 'P:15,2C:RBN', 'P:26,6C:XTX', 'P:43,14C:AKZ', 'P:29,100C:WUE', 'P:96,20C:HEM'];

// Initialiser un tableau vide
$planesDistances = [];

foreach ($planes as $planeInformations) {

    $plane = parser($planeInformations);

    $distanceBeetweenPlaneAndIsland = pythagore(
        xPlane: $plane['x'],
        yPlane: $plane['y'],
        xIsland: $islandX,
        yIsland: $islandY
    );

    // On mettra comme clé le code de l'avion, et comme valeur la distance
    $planesDistances[$plane['code']] = $distanceBeetweenPlaneAndIsland;
}

// sort => tri dans l'ordre croissant
asort($planesDistances); // a => associative

$planesDistances = array_slice($planesDistances, 0, 3);

echo '<pre>';
print_r($planesDistances);
echo '</pre>';
$planesCodes = array_keys($planesDistances);

echo '<pre>';
print_r($planesCodes);
echo '</pre>';

$codes = implode('', $planesCodes);
echo $codes;

// On triera tout ça

// 1. Fonction pythagore
function pythagore(int $xPlane, int $yPlane, int $xIsland = 0, int $yIsland = 0): float
{
    $x = $xPlane - $xIsland;
    $y = $yPlane - $yIsland;

    return sqrt(
        pow($x, 2) + pow($y, 2)
    );
}

// 2. Parsing
function parser(string $informations): array
{
    $data = sscanf($informations, 'P:%d,%dC:%s');

    return [
        'x' => $data[0],
        'y' => $data[1],
        'code' => $data[2]
    ];
}