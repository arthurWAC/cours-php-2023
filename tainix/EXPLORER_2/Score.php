<?php

class Score
{
    public function __construct(
        public readonly string $fieldName,
        public readonly int $score
    ) {}
}