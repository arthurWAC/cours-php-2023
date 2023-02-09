<?php

class Plane extends MapPoint
{
    public readonly string $code;

    public function __construct(string $informations) // 'P:62,1C:WAD'
    {
        // Parsing
        $data = sscanf($informations, 'P:%d,%dC:%s');

        // Puis je les mets dans les propriétés
        $this->code = $data[2];

        parent::__construct($data[0], $data[1]);
    }

    public function getDistanceFromIsland(Island $island): float
    {
        return Geometry::pythagore($this, $island);
    }
}



    