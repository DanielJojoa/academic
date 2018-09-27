<?php

namespace BackendBundle\Entity;

/**
 * TypeEvent
 */
class TypeEvent
{
    /**
     * @var integer
     */
    private $idTypeEvent;

    /**
     * @var string
     */
    private $nameEvent;


    /**
     * Get idTypeEvent
     *
     * @return integer
     */
    public function getIdTypeEvent()
    {
        return $this->idTypeEvent;
    }

    /**
     * Set nameEvent
     *
     * @param string $nameEvent
     *
     * @return TypeEvent
     */
    public function setNameEvent($nameEvent)
    {
        $this->nameEvent = $nameEvent;

        return $this;
    }

    /**
     * Get nameEvent
     *
     * @return string
     */
    public function getNameEvent()
    {
        return $this->nameEvent;
    }
}

