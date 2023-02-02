<?php
/**
 * On utilise :
 * - la promotion de propriétés dans le constructeur
 * - la déclaration "readonly" pour les propriétés
 * 
 * Ici on applique la notion de "Data Object"
 */
class Coordinates
{
    public function __construct(
        public readonly int $x,
        public readonly int $y
    ) {}
}