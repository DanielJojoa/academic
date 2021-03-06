<?php

namespace BackendBundle\Entity;

/**
 * Event
 */
class Event
{
    /**
     * @var integer
     */
    private $idEvent;

    /**
     * @var string
     */
    private $nameEvent;

    /**
     * @var integer
     */
    private $idTypeEvent;

    /**
     * @var string
     */
    private $idUser;

    /**
     * @var \DateTime
     */
    private $date;


    /**
     * Get idEvent
     *
     * @return integer
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * Set nameEvent
     *
     * @param string $nameEvent
     *
     * @return Event
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

    /**
     * Set idTypeEvent
     *
     * @param integer $idTypeEvent
     *
     * @return Event
     */
    public function setIdTypeEvent($idTypeEvent)
    {
        $this->idTypeEvent = $idTypeEvent;

        return $this;
    }

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
     * Set idUser
     *
     * @param string $idUser
     *
     * @return Event
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return string
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Event
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}

