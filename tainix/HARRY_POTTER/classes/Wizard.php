<?php

class Wizard extends IngredientsManager
{
    /**
     * @var RecipePotion[] $recipes
     */
    public array $recipes = [];

    public function __construct(
        int $queue_lezard,
        int $oreille_souris,
        int $petale_rose,
        int $nuage_tenebreux,
        int $poussiere_fee,
        int $eau_jouvence,
        int $bave_crapaud
    )
    {
        // Ingrédients
        $this->addIngredient(Ingredient::QUEUE_DE_LEZARD, $queue_lezard);
        $this->addIngredient(Ingredient::OREILLE_DE_SOURIS, $oreille_souris);
        $this->addIngredient(Ingredient::PETALE_DE_ROSE, $petale_rose);
        $this->addIngredient(Ingredient::NUAGE_TENEBREUX, $nuage_tenebreux);
        $this->addIngredient(Ingredient::POUSSIERE_DE_FEE, $poussiere_fee);
        $this->addIngredient(Ingredient::EAU_DE_JOUVENCE, $eau_jouvence);
        $this->addIngredient(Ingredient::BAVE_DE_CRAPAUD, $bave_crapaud);

        // Recettes
        $this->recipes[] = new RecipePotionAcide;
        $this->recipes[] = new RecipePotionFoudre;
        $this->recipes[] = new RecipePotionGivre;
    }

    public function calculAllDamages(): int
    {
        $damages = 0;

        foreach ($this->recipes as $recipe) {
            $damages +=
                $recipe->getDamages() * $recipe->howMuchCanIMakeWith($this->ingredients);
        }

        return $damages;
    }
}