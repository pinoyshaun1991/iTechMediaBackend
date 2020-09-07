<?php
namespace iTech\Model;

use Exception;
use iTech\Service\ContentRecipeService;
use iTech\Model\RawRecipeModel;
use iTech\Model\RawIngredientModel;

/**
 * Class RecipeModel
 * @package iTech\Model
 */
class RecipeModel
{
    /**
     * @var \iTech\Model\RawRecipeModel
     */
    private $rawRecipe;

    /**
     * @var \iTech\Model\RawIngredientModel
     */
    private $rawIngredients;

    /**
     * @var RawInstructionModel
     */
    private $rawInstructions;

    /**
     * @var ContentRecipeService
     */
    private $contentRecipeService;

    /**
     * @var array
     */
    private $dataSet;

    /**
     * RecipeModel constructor.
     */
    public function __construct()
    {
        $this->rawRecipe            = new RawRecipeModel();
        $this->rawIngredients       = new RawIngredientModel();
        $this->rawInstructions      = new RawInstructionModel();
        $this->contentRecipeService = new ContentRecipeService();
        $this->dataSet              = array();
    }

    /**
     * Fetch Recipes
     *
     * @return string
     * @throws Exception
     */
    public function fetchRecipes(): string
    {
        $rawRecipes  = $this->rawRecipe->fetchRawData();

        if (!empty($rawRecipes)) {
            foreach ($rawRecipes as $recipe) {
                $this->dataSet[$recipe['id']] = array(
                    'name'         => $recipe['name'],
                    'description'  => $recipe['description'],
                    'servings'     => $recipe['servings'],
                    'thumbnail'    => $recipe['thumb'],
                    'duration'     => $recipe['time'],
                    'ingredients'  => $this->rawIngredients->fetchRawData($recipe['id']),
                    'instructions' => $this->rawInstructions->fetchRawData($recipe['id'])
                );
            }
        }

        echo json_encode($this->dataSet, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);

        return json_encode($this->dataSet, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
    }
}