<?php

class Vegeta2
{
    public int $puissance;

    public function __construct(
        public int $force,
        public int $level = 1
    ) {
        $this->calculPuissance();
    }

    public function calculPuissance(): void
    {
        $this->puissance = $this->force * $this->level;
    }

    public function fight(Ennemy $ennemy): void
    {
        $this->upLevelIfNecessary($ennemy->puissance);
        $this->upForce($ennemy->puissance);
    }

    public function upLevelIfNecessary(int $puissance): void
    {
        while ($this->puissance < $puissance) {
            $this->level++;
            $this->calculPuissance();
        }
    }

    public function upForce(int $puissance): void
    {
        $this->force += floor($puissance / 10);
        $this->calculPuissance();
    }
}