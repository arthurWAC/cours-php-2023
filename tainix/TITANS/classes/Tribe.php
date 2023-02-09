<?php

class Tribe
{
    /**
     * @var Titan[] $titans
     */
    public array $titans;

    public function __construct(array $titansInformations)
    {
        $this->titans = [];

        foreach ($titansInformations as $titanInformations) {
            $data = explode(';', $titanInformations);
            $this->titans[] = new Titan($data[0], $data[1], $data[2]);
        }
    }

    public function getTallest(): ?Titan // ?Titan veut dire "Titan ou null"
    {
        $titanLePlusGrand = null;

        foreach ($this->titans as $titan) {

            if (! $titan->isAlive()) {
                continue;
            }

            // Gérer le cas où c'est null
            if (is_null($titanLePlusGrand)) {
                $titanLePlusGrand = $titan;
                continue;
            }

            if ($titan->size > $titanLePlusGrand->size) {
                $titanLePlusGrand = $titan;
            }
        }

        return $titanLePlusGrand;
    }

    public function hasAtLeastOneAliveTitan(): bool
    {
        foreach ($this->titans as $titan) {
            if ($titan->isAlive()) {
                return true;
            }
        }

        // Aucun de mes titans n'est vivant
        return false;
    }
}