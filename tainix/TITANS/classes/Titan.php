<?php

class Titan
{
    public function __construct(
        public readonly int $size,
        public readonly int $speed,
        public int $hp
    ) {}

    public function decreaseHP(int $hpToDecrease): void
    {
        $this->hp -= $hpToDecrease;
    }

    public function isAlive(): bool
    {
        return $this->hp > 0;
    }
}