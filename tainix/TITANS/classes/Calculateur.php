<?php

class Calculateur
{
    public static function gazConsumedToMove(int $start, int $destination): int
    {
        return abs($destination - $start);
    }

    public static function gazConsumedToAttackTitan(Titan $titan, Habitation $habitation): int
    {
        if ($habitation->height > $titan->size) {
            return $habitation->height - $titan->size + $habitation->distance;
        }

        return abs($habitation->height - $titan->size + $habitation->distance);
    }

    public static function powerOfAttack(Titan $titan, Habitation $habitation): int
    {
        if ($habitation->height > $titan->size) {
            return ($habitation->height - $titan->size) * 10 + $habitation->distance * 2 - $titan->speed;
        }

        return abs($habitation->height - $titan->size) * 5 + $habitation->distance * 2 - $titan->speed;
    }
}
