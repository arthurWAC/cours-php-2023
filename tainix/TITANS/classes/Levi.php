<?php

class Levi
{
    public int $score = 0;
    public int $altitude = 0;
    private ?Habitation $habitationWhereIAm = null;

    public function __construct(
        public int $gaz,
        public Hood $hood,
        public Tribe $tribe
    )
    {
            $habitationWhereIWantToGo = $this->hood->getClosest(
                $this->tribe->getTallest()
            );

            $gazIWillConsumed = Calculateur::gazConsumedToMove(
                start: $this->altitude,
                destination: $habitationWhereIWantToGo->height
            );
            
            try {
                $this->decreaseGaz($gazIWillConsumed);
            } catch (Exception $e) {
                echo $e->getMessage();
                return; // Fin de mon constructeur
            }

            // "Sinon" : 
            $this->moveToHabitation($habitationWhereIWantToGo);
    }

    public function moveToHabitation(Habitation $habitationToGo): void
    {
        $this->habitationWhereIAm = $habitationToGo;
        $this->altitude = $this->habitationWhereIAm->height;
    }

    public function decreaseGaz(int $gazConsumed): void
    {
        if ($gazConsumed > $this->gaz) {
            // Je demande à mon programme de "lancer" une erreur
            throw new Exception('pas assez de gaz');
            // Si rien "n'attrape" mon erreur, mon programme s'arrête là
            // Comme un die
        }

        $this->gaz -= $gazConsumed;
    }

    public function attack(): void
    {
        $block = 0;
        while (true) {

            // Il n'y a plus de Titan à affronter
            if (! $this->tribe->hasAtLeastOneAliveTitan()) {
                break; // Fin de mon while
            }

            // Calculer le gaz pour attaquer

            // Consommation du gaz
            try {
                $this->decreaseGaz($gazIWillConsumed);
            } catch (Exception $e) {
                echo $e->getMessage();
                break; // Fin de mon while
            }

            // Calcule la puissance de mon attaque

            // J'enlève des points de vie au titan

            // Je gagne 1pt

            // Je regarde s'il est mort
                // S'il est mort ?
                // Je gagne 100 pts
                // Je change peut être d'habitation
            

            // Sécurité
            $block++;
            if ($block >= 1000) {
                break;
            }
        }

        // ???

        // ???
    }
}