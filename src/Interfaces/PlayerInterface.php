<?php

namespace RPSLS\Interfaces;

/**
 * Interface PlayerInterface
 * @package RPSLS\Interfaces
 */
interface PlayerInterface
{
    /**
     * Get player ID.
     * @return integer
     */
    public function getId();

    /**
     * Get player name.
     * @return string
     */
    public function getName();
}