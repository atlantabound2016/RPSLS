<?php
/**
 * Created by PhpStorm.
 * User: cyphrix
 * Date: 8/11/16
 * Time: 8:04 AM
 */

namespace RPSLS\Interfaces;


/**
 * Interface GestureInterface
 * @package RPSLS\Interfaces
 */
interface GestureInterface
{
    /**
     * Get gesture value.
     * @return mixed
     */
    public function getValue();

    /**
     * Get gesture parity.
     * @return mixed
     */
    public function getParity();

    /**
     * Get gesture name.
     * @return mixed
     */
    public function getName();
}