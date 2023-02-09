<?php

/**
 * Classe abstraite
 * Ne peut pas être instanciée
 * Cette classe sera utilisée comme parent dans le cadre de l'héritage
 */
abstract class MapPoint
{
    public function __construct(
        public readonly int $x,
        public readonly int $y
    ) {}

    public function product(): int
    {
        return $this->x * $this->y;
    }
}