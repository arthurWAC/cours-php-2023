<?php

class BigPlane extends Plane
{
    public function __construct(int $x, int $y)
    {
        parent::__construct('P:' . $x . ',' . $y . 'C:BIG');
    }
}