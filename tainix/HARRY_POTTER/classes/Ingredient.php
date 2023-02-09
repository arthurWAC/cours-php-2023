<?php

class Ingredient
{
    public const QUEUE_DE_LEZARD = 'queue_de_lezard';
    public const OREILLE_DE_SOURIS = 'oreille_de_souris';
    public const PETALE_DE_ROSE = 'petale_de_rose';
    public const NUAGE_TENEBREUX = 'nuage_tenebreux';
    public const POUSSIERE_DE_FEE = 'poussiere_de_fee';
    public const EAU_DE_JOUVENCE = 'eau_de_jouvence';
    public const BAVE_DE_CRAPAUD = 'bave_de_crapaud';

    public function __construct(
        public string $name,
        public int $quantity
    ) {}
}