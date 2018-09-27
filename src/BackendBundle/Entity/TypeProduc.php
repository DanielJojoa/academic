<?php

namespace BackendBundle\Entity;

/**
 * TypeProduc
 */
class TypeProduc
{
    /**
     * @var integer
     */
    private $codTypepro;

    /**
     * @var string
     */
    private $nameTypepro;


    /**
     * Get codTypepro
     *
     * @return integer
     */
    public function getCodTypepro()
    {
        return $this->codTypepro;
    }

    /**
     * Set nameTypepro
     *
     * @param string $nameTypepro
     *
     * @return TypeProduc
     */
    public function setNameTypepro($nameTypepro)
    {
        $this->nameTypepro = $nameTypepro;

        return $this;
    }

    /**
     * Get nameTypepro
     *
     * @return string
     */
    public function getNameTypepro()
    {
        return $this->nameTypepro;
    }
}

