<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offer
 *
 * @ORM\Table(name="offer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OfferRepository")
 */
class Offer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="regimentId", type="integer")
     */
    private $regimentId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInsert", type="date")
     */
    private $dateInsert;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRec", type="date")
     */
    private $dateRec;

    /**
     * @var string
     *
     * @ORM\Column(name="specialization", type="string", length=30)
     */
    private $specialization;

    /**
     * @var string
     *
     * @ORM\Column(name="corps", type="string", length=30)
     */
    private $corps;

    /**
     * @var int
     *
     * @ORM\Column(name="wkuId", type="integer")
     */
    private $wkuId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set regimentId
     *
     * @param integer $regimentId
     *
     * @return Offer
     */
    public function setRegimentId($regimentId)
    {
        $this->regimentId = $regimentId;

        return $this;
    }

    /**
     * Get regimentId
     *
     * @return int
     */
    public function getRegimentId()
    {
        return $this->regimentId;
    }

    /**
     * Set dateInsert
     *
     * @param \DateTime $dateInsert
     *
     * @return Offer
     */
    public function setDateInsert($dateInsert)
    {
        $this->dateInsert = $dateInsert;

        return $this;
    }

    /**
     * Get dateInsert
     *
     * @return \DateTime
     */
    public function getDateInsert()
    {
        return $this->dateInsert;
    }

    /**
     * Set dateRec
     *
     * @param \DateTime $dateRec
     *
     * @return Offer
     */
    public function setDateRec($dateRec)
    {
        $this->dateRec = $dateRec;

        return $this;
    }

    /**
     * Get dateRec
     *
     * @return \DateTime
     */
    public function getDateRec()
    {
        return $this->dateRec;
    }

    /**
     * Set specialization
     *
     * @param string $specialization
     *
     * @return Offer
     */
    public function setSpecialization($specialization)
    {
        $this->specialization = $specialization;

        return $this;
    }

    /**
     * Get specialization
     *
     * @return string
     */
    public function getSpecialization()
    {
        return $this->specialization;
    }

    /**
     * Set corps
     *
     * @param string $corps
     *
     * @return Offer
     */
    public function setCorps($corps)
    {
        $this->corps = $corps;

        return $this;
    }

    /**
     * Get corps
     *
     * @return string
     */
    public function getCorps()
    {
        return $this->corps;
    }

    /**
     * Set wkuId
     *
     * @param integer $wkuId
     *
     * @return Offer
     */
    public function setWkuId($wkuId)
    {
        $this->wkuId = $wkuId;

        return $this;
    }

    /**
     * Get wkuId
     *
     * @return int
     */
    public function getWkuId()
    {
        return $this->wkuId;
    }
}
