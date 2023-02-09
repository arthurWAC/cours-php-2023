<?php

class Levi
{
    public const POINTS_WHEN_SINGLE_ATTACK = 1;
    public const POINTS_WHEN_TITAN_IS_KILL = 100;

    public int $score = 0;
    public int $altitude = 0;
    private ?Habitation $habitationWhereAmI = null;

    public function __construct(
        public int $gaz,
        public Hood $hood,
        public Tribe $tribe
    )
    {
        $this->moveToHabitation();
    }

    public function moveToHabitation(): void
    {
        // Pour bouger, faut que j'ai au moins 1 titan de vivant
        if (! $this->tribe->hasAtLeastOneAliveTitan()) {
            return;
        }

        $habitationWhereIWantToGo = $this->hood->getClosest(
            $this->tribe->getTallest()
        );

        // Si je suis déjà à la même altitude
        if ($this->altitude === $habitationWhereIWantToGo->height) {
            return;
        }

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
        $this->habitationWhereAmI = $habitationWhereIWantToGo;
        $this->altitude = $this->habitationWhereAmI->height;
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
        while (true) {

            if (! $this->tribe->hasAtLeastOneAliveTitan()) {
                break; // Fin de mon while
            }

            $titanToAttack = $this->tribe->getTallest();

            $gazIWillConsumed = Calculateur::gazConsumedToAttackTitan(
                titan: $titanToAttack,
                habitation: $this->habitationWhereAmI
            );

            try {
                $this->decreaseGaz($gazIWillConsumed);
            } catch (Exception $e) {
                break; // Fin de mon while
            }

            $power = Calculateur::powerOfAttack(
                titan: $titanToAttack,
                habitation: $this->habitationWhereAmI
            );

            $titanToAttack->decreaseHP($power);
            $this->score += self::POINTS_WHEN_SINGLE_ATTACK;

            if (! $titanToAttack->isAlive()) {
                $this->score += self::POINTS_WHEN_TITAN_IS_KILL;
                $this->moveToHabitation();
            }
        }
    }
}