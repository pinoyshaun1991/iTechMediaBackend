<?php

namespace iTech\Model;

use Exception;
use iTech\Common\Model\RawModelInterface;
use iTech\Service\ContentRecipeService;

/**
 * Class RawInstructionModel
 * @package iTech\Model
 */
class RawInstructionModel implements RawModelInterface
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $site;

    /**
     * @var ContentRecipeService
     */
    private $contentRecipeService;

    /**
     * RawInstructionModel constructor.
     */
    public function __construct()
    {
        $this->site                 = '';
        $this->contentRecipeService = new ContentRecipeService();
    }

    /**
     * Set the id variable type
     *
     * @param $id
     * @return string
     * @throws Exception
     */
    public function setId($id): string
    {
        if (is_numeric($id) === false) {
            throw new Exception('Recipe id field needs to be a numeric value');
        }

        return $this->id = $id;
    }

    /**
     * Retrieve id value
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Fetch raw instructions
     *
     * @return array
     * @param $id
     * @throws Exception
     */
    public function fetchRawData($id): array
    {
        if (!empty($id)) {
            $this->setId($id);
        }

        return $this->getRawData($this->getId());
    }

    /**
     * Gets raw instructions
     *
     * @param $params
     * @return string|true
     */
    public function getRawData($params)
    {
        $this->site = 'http://18.130.116.85/instructions/raw';
        $params     = '['.$params.']';

        return $this->contentRecipeService->getRawRecipeContent($this->site, $params, 'text/plain');
    }
}