<?php

namespace BackendBundle\Entity;

/**
 * User
 */
class User
{
    /**
     * @var string
     */
    private $codUsr;

    /**
     * @var string
     */
    private $passUsr;

    /**
     * @var string
     */
    private $nameUsr;

    /**
     * @var string
     */
    private $lnameUsr;

    /**
     * @var string
     */
    private $photoUsr;

    /**
     * @var string
     */
    private $mailUsr;

    /**
     * @var string
     */
    private $addressUsr;

    /**
     * @var \BackendBundle\Entity\Rol
     */
    private $codRol;


    /**
     * Get codUsr
     *
     * @return string
     */
    public function getCodUsr()
    {
        return $this->codUsr;
    }

    /**
     * Set passUsr
     *
     * @param string $passUsr
     *
     * @return User
     */
    public function setPassUsr($passUsr)
    {
        $this->passUsr = $passUsr;

        return $this;
    }

    /**
     * Get passUsr
     *
     * @return string
     */
    public function getPassUsr()
    {
        return $this->passUsr;
    }

    /**
     * Set nameUsr
     *
     * @param string $nameUsr
     *
     * @return User
     */
    public function setNameUsr($nameUsr)
    {
        $this->nameUsr = $nameUsr;

        return $this;
    }

    /**
     * Get nameUsr
     *
     * @return string
     */
    public function getNameUsr()
    {
        return $this->nameUsr;
    }

    /**
     * Set lnameUsr
     *
     * @param string $lnameUsr
     *
     * @return User
     */
    public function setLnameUsr($lnameUsr)
    {
        $this->lnameUsr = $lnameUsr;

        return $this;
    }

    /**
     * Get lnameUsr
     *
     * @return string
     */
    public function getLnameUsr()
    {
        return $this->lnameUsr;
    }

    /**
     * Set photoUsr
     *
     * @param string $photoUsr
     *
     * @return User
     */
    public function setPhotoUsr($photoUsr)
    {
        $this->photoUsr = $photoUsr;

        return $this;
    }

    /**
     * Get photoUsr
     *
     * @return string
     */
    public function getPhotoUsr()
    {
        return $this->photoUsr;
    }

    /**
     * Set mailUsr
     *
     * @param string $mailUsr
     *
     * @return User
     */
    public function setMailUsr($mailUsr)
    {
        $this->mailUsr = $mailUsr;

        return $this;
    }

    /**
     * Get mailUsr
     *
     * @return string
     */
    public function getMailUsr()
    {
        return $this->mailUsr;
    }

    /**
     * Set addressUsr
     *
     * @param string $addressUsr
     *
     * @return User
     */
    public function setAddressUsr($addressUsr)
    {
        $this->addressUsr = $addressUsr;

        return $this;
    }

    /**
     * Get addressUsr
     *
     * @return string
     */
    public function getAddressUsr()
    {
        return $this->addressUsr;
    }

    /**
     * Set codRol
     *
     * @param \BackendBundle\Entity\Rol $codRol
     *
     * @return User
     */
    public function setCodRol(\BackendBundle\Entity\Rol $codRol = null)
    {
        $this->codRol = $codRol;

        return $this;
    }

    /**
     * Get codRol
     *
     * @return \BackendBundle\Entity\Rol
     */
    public function getCodRol()
    {
        return $this->codRol;
    }
}

