<?php
// 2 Concepts
// Promotion de propriété
// Readonly

// PHP 8.2 => readonly class

// PHP 8.1 => Readonly
class Ennemy
{
    public function __construct(
        public readonly int $puissance
    ) {}
}

// $ennemy = new Ennemy(4);
// echo $ennemy->puissance;
// $ennemy->puissance = 5; // Ne fonctionne pas, je ne peux que lire la propriété

// ATTENTION, la valeur d'une propriété readonly ne peut être définie qu'une seule fois. Même au sein de la classe.

// PHP 8
// class Ennemy
// {
//     // Promotion de propriété dans le constructeur
//     public function __construct(
//         private int $puissance
//     ) {}

//     public function getPuissance()
//     {
//         return $this->puissance;
//     }
// }


// PHP >7.4: 
// class Ennemy
// {
//     private int $puissance;

//     public function __construct(int $puissance)
//     {
//         $this->puissance = $puissance;
//     }

//     public function getPuissance()
//     {
//         return $this->puissance;
//     }
// }