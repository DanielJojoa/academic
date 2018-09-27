<?php

namespace BackendBundle\Entity;

/**
 * Title
 */
class Title
{
    /**
     * @var integer
     */
    private $codTitle;

    /**
     * @var string
     */
    private $nameTitle;

    /**
     * @var \DateTime
     */
    private $dategradTitle;

    /**
     * @var \BackendBundle\Entity\LevelEduc
     */
    private $codLevel;

    /**
     * @var \BackendBundle\Entity\Modality
     */
    private $codMod;

    /**
     * @var \BackendBundle\Entity\User
     */
    private $codUsr;


    /**
     * Get codTitle
     *
     * @return integer
     */
    public function getCodTitle()
    {
        return $this->codTitle;
    }

    /**
     * Set nameTitle
     *
     * @param string $nameTitle
     *
     * @return Title
     */
    public function setNameTitle($nameTitle)
    {
        $this->nameTitle = $nameTitle;

        return $this;
    }

    /**
     * Get nameTitle
     *
     * @return string
     */
    public function getNameTitle()
    {
        return $this->nameTitle;
    }

    /**
     * Set dategradTitle
     *
     * @param \DateTime $dategradTitle
     *
     * @return Title
     */
    public function setDategradTitle($dategradTitle)
    {
        $this->dategradTitle = $dategradTitle;

        return $this;
    }

    /**
     * Get dategradTitle
     *
     * @return \DateTime
     */
    public function getDategradTitle()
    {
        return $this->dategradTitle;
    }

    /**
     * Set codLevel
     *
     * @param \BackendBundle\Entity\LevelEduc $codLevel
     *
     * @return Title
     */
    public function setCodLevel(\BackendBundle\Entity\LevelEduc $codLevel = null)
    {
        $this->codLevel = $codLevel;

        return $this;
    }

    /**
     * Get codLevel
     *
     * @return \BackendBundle\Entity\LevelEduc
     */
    public function getCodLevel()
    {
        return $this->codLevel;
    }

    /**
     * Set codMod
     *
     * @param \BackendBundle\Entity\Modality $codMod
     *
     * @return Title
     */
    public function setCodMod(\BackendBundle\Entity\Modality $codMod = null)
    {
        $this->codMod = $codMod;

        return $this;
    }

    /**
     * Get codMod
     *
     * @return \BackendBundle\Entity\Modality
     */
    public function getCodMod()
    {
        return $this->codMod;
    }

    /**
     * Set codUsr
     *
     * @param \BackendBundle\Entity\User $codUsr
     *
     * @return Title
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

