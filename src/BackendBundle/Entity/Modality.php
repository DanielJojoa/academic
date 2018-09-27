<?php

namespace BackendBundle\Entity;

/**
 * Modality
 */
class Modality
{
    /**
     * @var integer
     */
    private $codMod;

    /**
     * @var string
     */
    private $nameMod;


    /**
     * Get codMod
     *
     * @return integer
     */
    public function getCodMod()
    {
        return $this->codMod;
    }

    /**
     * Set nameMod
     *
     * @param string $nameMod
     *
     * @return Modality
     */
    public function setNameMod($nameMod)
    {
        $this->nameMod = $nameMod;

        return $this;
    }

    /**
     * Get nameMod
     *
     * @return string
     */
    public function getNameMod()
    {
        return $this->nameMod;
    }
}

