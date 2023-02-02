<?php

class Island
{
    public readonly Coordinates $coordinates;

    public function __construct(int $x, int $y)
    {
        $this->coordinates = new Coordinates($x, $y);
    }
}