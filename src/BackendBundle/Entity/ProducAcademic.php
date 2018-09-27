<?php

namespace BackendBundle\Entity;

/**
 * ProducAcademic
 */
class ProducAcademic
{
    /**
     * @var integer
     */
    private $codProdc;

    /**
     * @var string
     */
    private $nameProduc;

    /**
     * @var \DateTime
     */
    private $dateProduc;

    /**
     * @var string
     */
    private $addressProduc;

    /**
     * @var string
     */
    private $descripProduc;

    /**
     * @var string
     */
    private $certificateProduc;

    /**
     * @var \BackendBundle\Entity\TypeProduc
     */
    private $codTypepro;

    /**
     * @var \BackendBundle\Entity\User
     */
    private $codUsr;


    /**
     * Get codProdc
     *
     * @return integer
     */
    public function getCodProdc()
    {
        return $this->codProdc;
    }

    /**
     * Set nameProduc
     *
     * @param string $nameProduc
     *
     * @return ProducAcademic
     */
    public function setNameProduc($nameProduc)
    {
        $this->nameProduc = $nameProduc;

        return $this;
    }

    /**
     * Get nameProduc
     *
     * @return string
     */
    public function getNameProduc()
    {
        return $this->nameProduc;
    }

    /**
     * Set dateProduc
     *
     * @param \DateTime $dateProduc
     *
     * @return ProducAcademic
     */
    public function setDateProduc($dateProduc)
    {
        $this->dateProduc = $dateProduc;

        return $this;
    }

    /**
     * Get dateProduc
     *
     * @return \DateTime
     */
    public function getDateProduc()
    {
        return $this->dateProduc;
    }

    /**
     * Set addressProduc
     *
     * @param string $addressProduc
     *
     * @return ProducAcademic
     */
    public function setAddressProduc($addressProduc)
    {
        $this->addressProduc = $addressProduc;

        return $this;
    }

    /**
     * Get addressProduc
     *
     * @return string
     */
    public function getAddressProduc()
    {
        return $this->addressProduc;
    }

    /**
     * Set descripProduc
     *
     * @param string $descripProduc
     *
     * @return ProducAcademic
     */
    public function setDescripProduc($descripProduc)
    {
        $this->descripProduc = $descripProduc;

        return $this;
    }

    /**
     * Get descripProduc
     *
     * @return string
     */
    public function getDescripProduc()
    {
        return $this->descripProduc;
    }

    /**
     * Set certificateProduc
     *
     * @param string $certificateProduc
     *
     * @return ProducAcademic
     */
    public function setCertificateProduc($certificateProduc)
    {
        $this->certificateProduc = $certificateProduc;

        return $this;
    }

    /**
     * Get certificateProduc
     *
     * @return string
     */
    public function getCertificateProduc()
    {
        return $this->certificateProduc;
    }

    /**
     * Set codTypepro
     *
     * @param \BackendBundle\Entity\TypeProduc $codTypepro
     *
     * @return ProducAcademic
     */
    public function setCodTypepro(\BackendBundle\Entity\TypeProduc $codTypepro = null)
    {
        $this->codTypepro = $codTypepro;

        return $this;
    }

    /**
     * Get codTypepro
     *
     * @return \BackendBundle\Entity\TypeProduc
     */
    public function getCodTypepro()
    {
        return $this->codTypepro;
    }

    /**
     * Set codUsr
     *
     * @param \BackendBundle\Entity\User $codUsr
     *
     * @return ProducAcademic
     */
    public function setCodUsr(\BackendBundle\Entity\User $codUsr = null)
    {
        $this->codUsr = $codUsr;

        return $this;
    }

    /**
     * Get codUsr
     *
     * @return \BackendBundle\Entity\User
     */
    public function getCodUsr()
    {
        return $this->codUsr;
    }
}

