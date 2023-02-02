<?php

class Plane
{
    public readonly Coordinates $coordinates;
    public readonly string $code;

    public function __construct(string $informations)
    {
        // Parsing
        $data = sscanf($informations, 'P:%d,%dC:%s');

        // Puis je les mets dans les propriétés
        $this->coordinates = new Coordinates($data[0], $data[1]);
        $this->code = $data[2];

        // On aurait pu laisser le parsing en dehors et avoir quelque chose comme :
        // $parsing = parser('P:62,1C:WAD');
        // $plane = new Plane($parsing['x'], $parsing['y'], $parsing['code']);
    }

    public function getDistanceFromIsland(Island $island): float
    {
        return Geometry::pythagore($this->coordinates, $island->coordinates);
    }
}



    