<?php

namespace iTech\Model;

use Exception;
use iTech\Common\Model\RawModelInterface;
use iTech\Service\ContentRecipeService;

/**
 * Class RawRecipeModel
 * @package iTech\Model
 */
class RawRecipeModel implements RawModelInterface
{
    /**
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $to;

    /**
     * @var string
     */
    private $site;

    /**
     * @var ContentRecipeService
     */
    private $contentRecipeService;

    /**
     * RawRecipeModel constructor.
     */
    public function __construct()
    {
        $this->from                 = '';
        $this->to                   = '';
        $this->site                 = '';
        $this->contentRecipeService = new ContentRecipeService();
    }

    /**
     * Set the from variable type
     *
     * @param $from
     * @return string
     * @throws Exception
     */
    public function setFrom($from): string
    {
        if (is_numeric($from) === false) {
            throw new Exception('From field needs to be a numeric value');
        }

        return $this->from = $from;
    }

    /**
     * Retrieve from value
     *
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * Set the to variable type
     *
     * @param $to
     * @return string
     * @throws Exception
     */
    public function setTo($to): string
    {
        if (is_numeric($to) === false) {
            throw new Exception('To field needs to be a numeric value');
        }

        return $this->to = $to;
    }

    /**
     * Retrieve to value
     *
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * Fetch raw recipes
     *
     * @param $id
     * @return array
     * @throws Exception
     */
    public function fetchRawData($id = null): array
    {
        $this->site = 'http://18.130.116.85/recipes/raw';

        if (isset($_GET['from']) && isset($_GET['to'])) {
            $this->site .= '?from=' . $_GET['from'] . '&to=' . $_GET['to'];
        }

        if (isset($_GET['from'])) {
            $this->setFrom($_GET['from']);
            $this->site .= '?from=' . $_GET['from'];
        }

        if (isset($_GET['to'])) {
            $this->setTo($_GET['to']);
            $this->site .= '?to=' . $_GET['to'];
        }

        $params = array(
            'from' => $this->getFrom(),
            'to'   => empty($this->getTo()) ? 20 : $this->getTo()
        );

        return $this->getRawData($params);
    }

    /**
     * Gets raw recipe data
     *
     * @param $params
     * @return mixed|string|true
     */
    public function getRawData($params)
    {
        return $this->contentRecipeService->getRawRecipeContent($this->site, $params, 'application/x-www-form-urlencoded');
    }
}