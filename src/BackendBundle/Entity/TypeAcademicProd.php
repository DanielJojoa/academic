<?php

namespace BackendBundle\Entity;

/**
 * TypeAcademicProd
 */
class TypeAcademicProd
{
    /**
     * @var integer
     */
    private $idTypeAcademicProd;

    /**
     * @var string
     */
    private $nomTypeEvent;


    /**
     * Get idTypeAcademicProd
     *
     * @return integer
     */
    public function getIdTypeAcademicProd()
    {
        return $this->idTypeAcademicProd;
    }

    /**
     * Set nomTypeEvent
     *
     * @param string $nomTypeEvent
     *
     * @return TypeAcademicProd
     */
    public function setNomTypeEvent($nomTypeEvent)
    {
        $this->nomTypeEvent = $nomTypeEvent;

        return $this;
    }

    /**
     * Get nomTypeEvent
     *
     * @return string
     */
    public function getNomTypeEvent()
    {
        return $this->nomTypeEvent;
    }
}

