<?php

class Planet
{
    // 1. Constantes
    public const LENGTH_CODE = 6;

    // 2. Propriétés
    public string $code;

    /**
     * @var Field[] $fields
     */
    public array $fields = [];

    // 3. Constructeur
    public function __construct(string $informations)
    {
        // 1.1 utiliser substr pour isoler le code
        // 1.2 Initialiser la propriété code
        $this->code = substr($informations, 0, self::LENGTH_CODE);

        // 2.1 utiliser substr pour isoler les terrains
        $fieldsInformations = substr($informations, self::LENGTH_CODE + 1); // +1 correspond au ":" que je veux aussi enlever

        // 2.2 utiliser explode pour traiter chaque terrain
        $fields = explode(':', $fieldsInformations);
        
        foreach ($fields as $field) {
            // 2.3 utiliser explode pour séparer les informations des terrains
            $data = explode(' ', $field);
            // 2.4 créer une nouvelle instance de Field et la ranger dans la propriété fields
            $this->fields[] = new Field($data[0], $data[1]);
        }
    }
}

// $planet = new Planet('UXE637:mers 77:montagnes 26:lacs 12:plaines 40');
// Test::control('Constructeur code', $planet->code, 'UXE637');

// Test::control('Constructeur Field name 0', $planet->fields[0]->name, 'mers');
// Test::control('Constructeur Field pourcentage 0', $planet->fields[0]->pourcentage, 77);
// Test::control('Constructeur Field name 1', $planet->fields[1]->name, 'montagnes');
// Test::control('Constructeur Field pourcentage 1', $planet->fields[1]->pourcentage, 26);