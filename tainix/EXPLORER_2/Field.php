<?php

class Field
{
    public function __construct(
        public readonly string $name,
        public readonly int $pourcentage
    ) {}
}