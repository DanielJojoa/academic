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
    private $codRol;

    /**
     * @var string
     */
    private $nomRol;


    /**
     * Get codRol
     *
     * @return integer
     */
    public function getCodRol()
    {
        return $this->codRol;
    }

    /**
     * Set nomRol
     *
     * @param string $nomRol
     *
     * @return Rol
     */
    public function setNomRol($nomRol)
    {
        $this->nomRol = $nomRol;

        return $this;
    }

    /**
     * Get nomRol
     *
     * @return string
     */
    public function getNomRol()
    {
        return $this->nomRol;
    }
}

