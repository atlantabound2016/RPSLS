<?php

namespace RPSLS\Interfaces;

/**
 * Interface PlayerInterface
 * @package RPSLS\Interfaces
 */
interface PlayerInterface
{
    /**
     * @return integer
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();
}