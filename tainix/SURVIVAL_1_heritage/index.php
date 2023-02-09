<?php

require 'MapPoint.php';
require 'Island.php';
require 'Plane.php';
require 'Geometry.php';

$mapPoint = new MapPoint(3, 4);


$islandX = 42;
$islandY = 31;
$planes = ['P:62,1C:WAD', 'P:94,67C:KQV', 'P:15,2C:RBN', 'P:26,6C:XTX', 'P:43,14C:AKZ', 'P:29,100C:WUE', 'P:96,20C:HEM'];

$island = new Island($islandX, $islandY);

$planesDistances = [];

foreach ($planes as $planeInformations) {

    $plane = new Plane($planeInformations);

    // On mettra comme clé le code de l'avion, et comme valeur la distance
    $planesDistances[$plane->code] = $plane->getDistanceFromIsland($island);
}

echo '<pre>';
print_r($planesDistances);
echo '</pre>';