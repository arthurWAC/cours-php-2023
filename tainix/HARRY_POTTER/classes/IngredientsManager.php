<?php

abstract class IngredientsManager
{
    /**
     * @var Ingredient[] $ingredients
     */
    protected array $ingredients = [];

    public function addIngredient(string $name, int $quantity)
    {
        $this->ingredients[] = new Ingredient($name, $quantity);
    }
}