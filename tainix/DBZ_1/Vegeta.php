<?php

class Vegeta
{
    public function __construct(
        public int $force,
        public int $level = 1
    ) {}

    public function puissance(): int
    {
        return $this->force * $this->level;
    }

    public function fight(Ennemy $ennemy): void
    {
        $this->upLevelIfNecessary($ennemy->puissance);
        $this->upForce($ennemy->puissance);
    }

    public function upLevelIfNecessary(int $puissance): void
    {
        while ($this->puissance() < $puissance) {
            $this->level++;
        }
    }

    public function upForce(int $puissance): void
    {
        $this->force += floor($puissance / 10);
    }
}