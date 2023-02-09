<?php

abstract class RecipePotion extends IngredientsManager
{
    // Notion de "contrat", il doit y avoir
    // une méthode getDamages dans chaque enfant
    // Une méthode "abstraite" n'est possible que dans une classe abstraite
    abstract function getDamages(): int;

    /**
     * @param Ingredient[] $inventory
     */
    public function howMuchCanIMakeWith(array $inventory): int
    {
        $possibilities = [];

        // Pour chaque ingrédient de ma recette
        foreach ($this->ingredients as $ingredient) {

            // Je regarde dans mon inventaire combien j'ai de cet ingrédient
            foreach ($inventory as $ingredientFromInventory) {

                if ($ingredient->name === $ingredientFromInventory->name) {
                    // Ca me dit combien de recette je peux réaliser
                    $possibility = floor($ingredientFromInventory->quantity / $ingredient->quantity);

                    // Si je tombe sur 0, je m'arrête
                    if ($possibility == 0) {
                        return 0;
                    }

                    $possibilities[] = $possibility;
                    break;
                }
            }
        }
        

        // Je retourne la + petite valeur
        return min($possibilities);
    }
}