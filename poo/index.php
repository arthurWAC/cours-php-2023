<?php

// POO (ou OOP en anglais)
// Programmation Orientée Objet

// Objet ou de Classe
// Structure de base en PHP

// Mot clé "class"
// Je donne un nom à ma class, en PascalCase (commence par une majuscule)
class Eleve
{
    // Propriétés (ou attributs)
    // Notion de visibilité (on verra ça un peu + tard) => mot clé "public"
    // Le type
    // Le nom de la propriété, comme on nommerait une variable
    private string $prenom;
    private string $nom;

    // Possible de mettre une valeur par défaut
    private bool $aLePermisDeConduire = false; 

    private int $age;

    private array $notes = [];

    // "private" => Il n'y a que l'objet qui peut l'utiliser
    private int $meilleurNote; 

    // Pas de limite en terme de propriétés
    // Bien respecter : visibilité - type - nommage

    // Méthodes
    // Encore la notion de visibilité => mot clé "public"
    // Mot clé "function"
    // Première méthode "magique" => __construct => "Constructeur"
    // Pas de type de retour sur le constructeur
    public function __construct(string $unPrenom, string $unNom, string $uneDateDeNaissance)
    {
        // Le constructeur, dans 99% des cas, il a le même rôle :
        // => Initialisé les valeurs des propriétés

        // $this => "Celui-ci" => "Moi" => "Instance de l'objet courante"
        // -> "tiret du 6" + "plus grand que"
        // $this->prenom et NON $this->$prenom
        $this->prenom = $unPrenom;
        $this->nom = $unNom;

        // Dans le constructeur on peut avoir un peu de logique
        // jj/mm/yyyy
        $anneeDeNaissance = substr($uneDateDeNaissance, 6, 4);
        $this->age = ((int) date('Y')) - ((int) $anneeDeNaissance);
    }

    // Une méthode n'a pas forcément d'argument
    // Bien définir le type de retour
    // Ici, justement, il n'y a pas de "return", on travaille "dans" l'objet
    // On utilisera le type de retour "void" => 'vide'
    public function passeLePermisAvecSucces(): void
    {
        $this->aLePermisDeConduire = true;
    }

    public function addNote(int $note): void
    {
        $this->notes[] = $note;
        // OU array_push($this->notes, $note);

        $this->meilleurNote = max($this->notes);
    }

    // Méthode qui utilise la valeur d'une propriété (notes)
    // Et qui retourne une valeur
    public function getMoyenne(): float
    {
        $total = 0;
        $nbNotes = 0;

        foreach ($this->notes as $note) {
            $total += $note;
            $nbNotes++;
        }

        // Si je n'ai aucune note, on évite la division par zéro
        if ($nbNotes === 0) {
            return 0;
        }

        return round($total / $nbNotes, 2);
    }

    public function getMeilleureNote(): int
    {
        if ($this->notes === []) {
            return 0;
        }

        return $this->meilleurNote;
    }

    /**
     * Getter (PAS AUTOMATIQUE)
     */ 
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Setter (PAS AUTOMATIQUE)
     */ 
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }
}

// Instanciation d'un objet
// Utiliser le mot clé "new"
$eleve = new Eleve('Arthur', 'Weill', '22/01/1987');
$eleve->passeLePermisAvecSucces();

// Je peux appeler une méthode autant de fois que je veux
$eleve->addNote(15);
$eleve->addNote(16);
$eleve->addNote(12);
$eleve->addNote(18);
$eleve->addNote(4);
$eleve->addNote(9);
$eleve->addNote(11);

echo '<pre>';
var_dump($eleve);
echo '</pre>';

$moyenne = $eleve->getMoyenne();
echo '<p>Moyenne Eleve : ' . $moyenne . '</p>';
// Lecture d'une propriété de mon objet
echo '<p>Meilleur note : ' . $eleve->getMeilleureNote() . '</p>';

$marie = new Eleve('Marie', 'Dubois', '05/03/1998');
// $eleve2->addNote(17);
echo '<pre>';
var_dump($marie);
echo '</pre>';


$moyenne = $marie->getMoyenne();
echo '<p>Moyenne Eleve : ' . $moyenne . '</p>';
echo '<p>Meilleur note : ' . $marie->getMeilleureNote() . '</p>';


$joe = new Eleve('Joe', 'Doe', '31/01/1965');

$joe->setPrenom('Johnny'); 

echo '<pre>';
var_dump($joe);
echo '</pre>';

$phrase = '';
$phrase .= $joe->getPrenom();
$phrase .= ' cool';

echo '<p>' . $joe->getPrenom() . '</p>';
echo '<p>' . $phrase . '</p>';


function truc()
{

}


truc();
echo truc();