<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wku
 *
 * @ORM\Table(name="wku")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WkuRepository")
 */
class Wku
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
     * @var string
     *
     * @ORM\Column(name="wkuName", type="string", length=50)
     */
    private $wkuName;

    /**
     * @var string
     *
     * @ORM\Column(name="wkuEmail", type="string", length=50, nullable=true)
     */
    private $wkuEmail;

    /**
     * @var int
     *
     * @ORM\Column(name="wkuTel", type="integer", nullable=true)
     */
    private $wkuTel;

    /**
     * @var string
     *
     * @ORM\Column(name="wkuAdress", type="string", length=60)
     */
    private $wkuAdress;

    /**
     * @var string
     *
     * @ORM\Column(name="wkuCity", type="string", length=50)
     */
    private $wkuCity;

    /**
     * @var string
     *
     * @ORM\Column(name="wkuCounty", type="string", length=50)
     */
    private $wkuCounty;


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
     * Set wkuName
     *
     * @param string $wkuName
     *
     * @return Wku
     */
    public function setWkuName($wkuName)
    {
        $this->wkuName = $wkuName;

        return $this;
    }

    /**
     * Get wkuName
     *
     * @return string
     */
    public function getWkuName()
    {
        return $this->wkuName;
    }

    /**
     * Set wkuEmail
     *
     * @param string $wkuEmail
     *
     * @return Wku
     */
    public function setWkuEmail($wkuEmail)
    {
        $this->wkuEmail = $wkuEmail;

        return $this;
    }

    /**
     * Get wkuEmail
     *
     * @return string
     */
    public function getWkuEmail()
    {
        return $this->wkuEmail;
    }

    /**
     * Set wkuTel
     *
     * @param integer $wkuTel
     *
     * @return Wku
     */
    public function setWkuTel($wkuTel)
    {
        $this->wkuTel = $wkuTel;

        return $this;
    }

    /**
     * Get wkuTel
     *
     * @return int
     */
    public function getWkuTel()
    {
        return $this->wkuTel;
    }

    /**
     * Set wkuAdress
     *
     * @param string $wkuAdress
     *
     * @return Wku
     */
    public function setWkuAdress($wkuAdress)
    {
        $this->wkuAdress = $wkuAdress;

        return $this;
    }

    /**
     * Get wkuAdress
     *
     * @return string
     */
    public function getWkuAdress()
    {
        return $this->wkuAdress;
    }

    /**
     * Set wkuCity
     *
     * @param string $wkuCity
     *
     * @return Wku
     */
    public function setWkuCity($wkuCity)
    {
        $this->wkuCity = $wkuCity;

        return $this;
    }

    /**
     * Get wkuCity
     *
     * @return string
     */
    public function getWkuCity()
    {
        return $this->wkuCity;
    }

    /**
     * Set wkuCounty
     *
     * @param string $wkuCounty
     *
     * @return Wku
     */
    public function setWkuCounty($wkuCounty)
    {
        $this->wkuCounty = $wkuCounty;

        return $this;
    }

    /**
     * Get wkuCounty
     *
     * @return string
     */
    public function getWkuCounty()
    {
        return $this->wkuCounty;
    }
}
