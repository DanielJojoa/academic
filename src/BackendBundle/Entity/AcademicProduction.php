<?php

namespace BackendBundle\Entity;

/**
 * AcademicProduction
 */
class AcademicProduction
{
    /**
     * @var integer
     */
    private $idAcademicProduction;

    /**
     * @var integer
     */
    private $typeAcademicProd;

    /**
     * @var string
     */
    private $nameAcademicProd;

    /**
     * @var string
     */
    private $idUser;

    /**
     * @var \DateTime
     */
    private $date;


    /**
     * Get idAcademicProduction
     *
     * @return integer
     */
    public function getIdAcademicProduction()
    {
        return $this->idAcademicProduction;
    }

    /**
     * Set typeAcademicProd
     *
     * @param integer $typeAcademicProd
     *
     * @return AcademicProduction
     */
    public function setTypeAcademicProd($typeAcademicProd)
    {
        $this->typeAcademicProd = $typeAcademicProd;

        return $this;
    }

    /**
     * Get typeAcademicProd
     *
     * @return integer
     */
    public function getTypeAcademicProd()
    {
        return $this->typeAcademicProd;
    }

    /**
     * Set nameAcademicProd
     *
     * @param string $nameAcademicProd
     *
     * @return AcademicProduction
     */
    public function setNameAcademicProd($nameAcademicProd)
    {
        $this->nameAcademicProd = $nameAcademicProd;

        return $this;
    }

    /**
     * Get nameAcademicProd
     *
     * @return string
     */
    public function getNameAcademicProd()
    {
        return $this->nameAcademicProd;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     *
     * @return AcademicProduction
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
     * @return AcademicProduction
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

