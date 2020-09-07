<?php

namespace iTech\Controller;

use iTech\Common\Controller\RecipeInterface;
use Exception;
use iTech\Model\RecipeModel;

/**
 * Implements the recipe interface
 *
 * Class RecipeController
 * @package iTech\Controller
 */
class RecipeController implements RecipeInterface
{
    private $recipeModel;

    /**
     * RecipeController constructor.
     */
    public function __construct()
    {
        $this->recipeModel = new RecipeModel();
    }

    /**
     * Fetches Recipes
     *
     * @return array|mixed
     * @throws Exception
     */
    public function getRecipes()
    {
        $recipes = array();

        try {
            $recipes = $this->recipeModel->fetchRecipes();
        } catch (Exception $e) {
            print $e->getMessage();
        }

        return $recipes;
    }
}