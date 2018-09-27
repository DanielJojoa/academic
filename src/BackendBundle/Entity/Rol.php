<?php

namespace BackendBundle\Entity;

/**
 * Rol
 */
class Rol
{
    /**
     * @var integer
     */
    private $idrol;

    /**
     * @var string
     */
    private $namerol;


    /**
     * Get idrol
     *
     * @return integer
     */
    public function getIdrol()
    {
        return $this->idrol;
    }

    /**
     * Set namerol
     *
     * @param string $namerol
     *
     * @return Rol
     */
    public function setNamerol($namerol)
    {
        $this->namerol = $namerol;

        return $this;
    }

    /**
     * Get namerol
     *
     * @return string
     */
    public function getNamerol()
    {
        return $this->namerol;
    }
}

