<?php

namespace BackendBundle\Entity;

/**
 * LevelEduc
 */
class LevelEduc
{
    /**
     * @var integer
     */
    private $codLevel;

    /**
     * @var string
     */
    private $nameLevel;


    /**
     * Get codLevel
     *
     * @return integer
     */
    public function getCodLevel()
    {
        return $this->codLevel;
    }

    /**
     * Set nameLevel
     *
     * @param string $nameLevel
     *
     * @return LevelEduc
     */
    public function setNameLevel($nameLevel)
    {
        $this->nameLevel = $nameLevel;

        return $this;
    }

    /**
     * Get nameLevel
     *
     * @return string
     */
    public function getNameLevel()
    {
        return $this->nameLevel;
    }
}

