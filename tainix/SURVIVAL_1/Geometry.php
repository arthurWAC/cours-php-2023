<?php

class Geometry
{
    // Méthode "statique" pythagore
    public static function pythagore(
        Coordinates $coordinatesA,
        Coordinates $coordinatesB
    ): float
    {
        $x = $coordinatesA->x - $coordinatesB->x;
        $y = $coordinatesA->y - $coordinatesB->y;

        return sqrt(
            pow($x, 2) + pow($y, 2)
        );
    }
}

// A l'usage, en dehors de la classe : 
// $resultat = Geometry::pythagore(4, 5);