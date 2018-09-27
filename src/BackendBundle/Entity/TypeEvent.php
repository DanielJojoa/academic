<?php

namespace BackendBundle\Entity;

/**
 * TypeEvent
 */
class TypeEvent
{
    /**
     * @var string
     */
    private $nameTypeeve;

    /**
     * @var integer
     */
    private $codTypeeve;


    /**
     * Get nameTypeeve
     *
     * @return string
     */
    public function getNameTypeeve()
    {
        return $this->nameTypeeve;
    }

    /**
     * Set codTypeeve
     *
     * @param integer $codTypeeve
     *
     * @return TypeEvent
     */
    public function setCodTypeeve($codTypeeve)
    {
        $this->codTypeeve = $codTypeeve;

        return $this;
    }

    /**
     * Get codTypeeve
     *
     * @return integer
     */
    public function getCodTypeeve()
    {
        return $this->codTypeeve;
    }
}

