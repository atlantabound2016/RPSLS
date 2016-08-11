<?php

namespace RPSLS;

use RPSLS\Interfaces\PlayerInterface;

/**
 * Class PlayerException
 * @package RPSLS
 */
class PlayerException extends \Exception
{
}

/**
 * Class Player
 * @package RPSLS
 */
class Player implements PlayerInterface
{
    /**
     * @var int
     */
    private static $playerCount = 0;
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;

    /**
     * Private constructor. create() method should be used to instantiate.
     * @param $id
     * @param $name
     * @throws PlayerException
     */
    private function __construct($id, $name)
    {
        if (!is_integer($id)) {
            throw new PlayerException('ID must be integer.');
        } elseif (!is_string($name)) {
            throw new PlayerException('Name must be string.');
        } else {
            $this->id = $id;
            $this->name = $name;
        }
    }

    /**
     * Create a new player.
     * @param $name
     * @return Player
     */
    public static function create($name)
    {
        // increment $playerCount and return instance
        return new self(++self::$playerCount, $name);
    }

    /**
     * Get player ID.
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get player name.
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get number of players created so far.
     * @return int
     */
    public function getPlayerCount()
    {
        return self::$playerCount;
    }
}