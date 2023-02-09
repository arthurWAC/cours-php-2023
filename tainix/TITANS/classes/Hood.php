<?php

class Hood
{
    /**
     * @var Habitation[] $habitations
     */
    public array $habitations;

    public function __construct(array $habitationsInformations)
    {
        $this->habitations = [];

        foreach ($habitationsInformations as $habitationInformations) {
            $data = explode(';', $habitationInformations);
            $this->habitations[] = new Habitation($data[0], $data[1]);
        }

        // On trie les habitations, de la + petite à la + grande
        usort($this->habitations, function (Habitation $h1, Habitation $h2) {
            return $h1->height <=> $h2->height;
        });
    }

    public function getClosest(Titan $titan): Habitation
    {
        // Postulat de départ, c'est la + petite
        $habitationClosest = $this->habitations[0];

        // Recherche
        foreach ($this->habitations as $habitation) {

            // Si je suis déjà au dessus, je change pas
            if ($habitationClosest->height > $titan->size) {
                continue;
            }

            // Dès que je dépasse le titan, je prends l'habitation
            if ($habitation->height > $titan->size) {
                $habitationClosest = $habitation;
                continue;
            }

            // Si je suis dessous, mais que l'habitation testée est + haute
            if ($habitation->height > $habitationClosest->height) {
                $habitationClosest = $habitation;
            }
        }

        return $habitationClosest;
    }
}