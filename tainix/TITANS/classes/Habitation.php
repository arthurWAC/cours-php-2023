<?php

class Habitation
{
    public function __construct(
        public readonly int $height,
        public readonly int $distance
    ) {}
}