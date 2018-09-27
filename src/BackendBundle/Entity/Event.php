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
    private $codEve;

    /**
     * @var string
     */
    private $nameEve;

    /**
     * @var string
     */
    private $addressEve;

    /**
     * @var \DateTime
     */
    private $datestartEve;

    /**
     * @var \DateTime
     */
    private $dateendEve;

    /**
     * @var integer
     */
    private $valueEve;

    /**
     * @var \BackendBundle\Entity\TypeEvent
     */
    private $nameTypeeve;


    /**
     * Get codEve
     *
     * @return integer
     */
    public function getCodEve()
    {
        return $this->codEve;
    }

    /**
     * Set nameEve
     *
     * @param string $nameEve
     *
     * @return Event
     */
    public function setNameEve($nameEve)
    {
        $this->nameEve = $nameEve;

        return $this;
    }

    /**
     * Get nameEve
     *
     * @return string
     */
    public function getNameEve()
    {
        return $this->nameEve;
    }

    /**
     * Set addressEve
     *
     * @param string $addressEve
     *
     * @return Event
     */
    public function setAddressEve($addressEve)
    {
        $this->addressEve = $addressEve;

        return $this;
    }

    /**
     * Get addressEve
     *
     * @return string
     */
    public function getAddressEve()
    {
        return $this->addressEve;
    }

    /**
     * Set datestartEve
     *
     * @param \DateTime $datestartEve
     *
     * @return Event
     */
    public function setDatestartEve($datestartEve)
    {
        $this->datestartEve = $datestartEve;

        return $this;
    }

    /**
     * Get datestartEve
     *
     * @return \DateTime
     */
    public function getDatestartEve()
    {
        return $this->datestartEve;
    }

    /**
     * Set dateendEve
     *
     * @param \DateTime $dateendEve
     *
     * @return Event
     */
    public function setDateendEve($dateendEve)
    {
        $this->dateendEve = $dateendEve;

        return $this;
    }

    /**
     * Get dateendEve
     *
     * @return \DateTime
     */
    public function getDateendEve()
    {
        return $this->dateendEve;
    }

    /**
     * Set valueEve
     *
     * @param integer $valueEve
     *
     * @return Event
     */
    public function setValueEve($valueEve)
    {
        $this->valueEve = $valueEve;

        return $this;
    }

    /**
     * Get valueEve
     *
     * @return integer
     */
    public function getValueEve()
    {
        return $this->valueEve;
    }

    /**
     * Set nameTypeeve
     *
     * @param \BackendBundle\Entity\TypeEvent $nameTypeeve
     *
     * @return Event
     */
    public function setNameTypeeve(\BackendBundle\Entity\TypeEvent $nameTypeeve = null)
    {
        $this->nameTypeeve = $nameTypeeve;

        return $this;
    }

    /**
     * Get nameTypeeve
     *
     * @return \BackendBundle\Entity\TypeEvent
     */
    public function getNameTypeeve()
    {
        return $this->nameTypeeve;
    }
}

