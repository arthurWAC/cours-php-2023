<?php

class Geometry
{
    // Méthode "statique" pythagore
    public static function pythagore(
        MapPoint $mapPointA,
        MapPoint $mapPointB
    ): float
    {
        $x = $mapPointA->x - $mapPointB->x;
        $y = $mapPointA->y - $mapPointB->y;

        return sqrt(
            pow($x, 2) + pow($y, 2)
        );
    }
}