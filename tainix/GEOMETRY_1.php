<?php
define('TRIANGLE', 'triangle');
define('SQUARE', 'square');
define('PENTAGON', 'pentagon');
define('HEXAGON', 'hexagon');


$shapes = ['square_9', 'circle_3', 'triangle_7', 'hexagon_1', 'hexagon_7', 'hexagon_7', 'hexagon_9'];

// Programme à écrire
$totalPerimeter = 0;

foreach ($shapes as $shape) {

    // Je fais mon parsing
    $informations = explode('_', $shape);

    // Je stocke les valeurs dans 2 variables dédiées
    $shapeName = $informations[0];
    $lengthSide = (int) $informations[1]; // '9' en 9 (string vers int)

    // Je calcule le périmètre grâce à ma fonction
    $shapePerimeter = perimeter2($shapeName, $lengthSide);

    // J'augmente la valeur de $totalPerimeter
    $totalPerimeter += $shapePerimeter;
}

echo '<p>Résultat : ' . $totalPerimeter . '</p>';


function perimeter(string $shapeName, int $lengthSide): int
{
    // Selon le nom de la forme, je multiplie le côté par 3, 4, 5 ou 6

    // switch
    switch ($shapeName) {
        case 'triangle':
            $perimeter = $lengthSide * 3;
        break;
        
        case 'square':
            $perimeter = $lengthSide * 4;
        break;
        
        case 'pentagon':
            $perimeter = $lengthSide * 5;
        break;
        
        case HEXAGON:
            $perimeter = $lengthSide * 6;
        break;

        default:
            // Je vais pouvoir gérer une forme inconnue ici !
            die('Erreur, forme inconnue');
        break;
    }

    return $perimeter;


    // Tableau ?

    // Gérer une erreur ? Que se passe t-il si je fais :
    // perimeter('circle', 7) ???

}




function perimeter2(string $shapeName, int $lengthSide): int
{
    // Selon le nom de la forme, je multiplie le côté par 3, 4, 5 ou 6
    $nbSides = [
        TRIANGLE => 3,
        SQUARE => 4,
        PENTAGON => 5,
        HEXAGON => 6,
    ];

    if (! array_key_exists($shapeName, $nbSides)) {
        die('Erreur, forme inconnue');
    }

    return $nbSides[$shapeName] * $lengthSide;
}