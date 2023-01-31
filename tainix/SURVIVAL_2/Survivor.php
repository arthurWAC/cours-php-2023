<?php

class Survivor
{
    // Constantes de classes
    // Visibilité
    // Mot clé "const"
    // Pas de typage
    // On conserve le UPPERCASE
    public const WATER = 'W';
    public const FOOD = 'F';
    public const DIFFICULT_FIELD = '_';

    // Propriétés et constructeur
    public function __construct(
        public int $thirst,
        public int $hunger,
        public int $shape
    ) {}

    public function adventure(array $island): void
    {
        foreach ($island as $region) {

            // 1. Je parcours la région ------
            foreach (str_split($region) as $zone) {

                $this->zone($zone);
                if ($this->mustStop()) {
                    return; // Je termine ma fonction, je "return rien"
                }
            }
            // Parcours de la région fini ----

            // 2. Je dors --------------------
            $this->night();
            if (! $this->canContinue()) {
                return;
            }
            // Nuit finie --------------------
        }

        // J'ai fait toutes les régions sans m'arrêter, j'ai fini
    }

    public function zone(string $zone): void
    {
        switch ($zone) {
            case self::WATER:
                $this->thirst++;
            break;

            case self::FOOD:
                $this->hunger++;
            break;
            
            case self::DIFFICULT_FIELD:
                $this->shape -= 2; // 2 de + donc 3
            break;
        }
        
        // Toujours 1 de forme de consommé
        $this->shape--;
    }

    public function night(): void
    {
        // Ma forme augmente de la moitié de la somme de la soif et de la faim,
        $this->shape += floor(($this->thirst + $this->hunger) / 2);

        // Ma faim et ma soif diminuent de 5
        $this->thirst -= 5;
        $this->hunger -= 5;
    }

    public function canContinue(): bool
    {
        // Si un des critères (faim, soif ou forme) tombe à zéro
        // Si un des critères vaut 0, je retourne false,
        return ! ($this->thirst <= 0 || $this->hunger <= 0 || $this->shape <= 0);

        // OU
        return ($this->thirst > 0 && $this->hunger > 0 && $this->shape > 0);
    }

    public function mustStop(): bool
    {
        return ($this->thirst <= 0 || $this->hunger <= 0 || $this->shape <= 0);
    }

    public function getResult(): int
    {
        $result = 1;

        if ($this->thirst > 0) {
            $result *= $this->thirst;
        }

        if ($this->hunger > 0) {
            $result *= $this->hunger;
        }

        if ($this->shape > 0) {
            $result *= $this->shape;
        }

        return $result;
    }
}