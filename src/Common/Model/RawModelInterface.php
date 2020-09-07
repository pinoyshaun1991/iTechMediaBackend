<?php
namespace iTech\Common\Model;

/**
 * Declaring the methods needed to display the recipe
 *
 * Interface RawModelInterface
 * @package Common\Controller
 */
interface RawModelInterface
{
    /**
     * Prepares the raw data endpoints
     *
     * @param $id
     * @return mixed
     */
    public function fetchRawData($id);

    /**
     * Returns the raw dataset
     *
     * @param $params
     * @return mixed
     */
    public function getRawData($params);
}