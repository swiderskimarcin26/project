<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regiment
 *
 * @ORM\Table(name="regiment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RegimentRepository")
 */
class Regiment
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="county", type="string", length=30)
     */
    private $county;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="subtype", type="string", length=100)
     */
    private $subtype;

    /**
     * @var string
     *
     * @ORM\Column(name="numberJW", type="string", length=10)
     */
    private $numberJW;

    /**
     * @var string
     *
     * @ORM\Column(name="hq", type="string", length=30)
     */
    private $hq;
    /**
     * @var integer
     *
     * @ORM\Column(name="telNumber", type="integer", length=30)
     */
    private $telNumber;
    /**
    * @var string
    *
    * @ORM\Column(name="regWku", type="string", length=30)
    */
    private $regWku;


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
     * Set name
     *
     * @param string $name
     *
     * @return Regiment
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Regiment
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Regiment
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set county
     *
     * @param string $county
     *
     * @return Regiment
     */
    public function setCounty($county)
    {
        $this->county = $county;

        return $this;
    }

    /**
     * Get county
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Regiment
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set subtype
     *
     * @param string $subtype
     *
     * @return Regiment
     */
    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;

        return $this;
    }

    /**
     * Get subtype
     *
     * @return string
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * Set number
     *
     * @param string $number
     *
     * @return Regiment
     */
    public function setNumberJW($numberJW)
    {
        $this->numberJW = $numberJW;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumberJW()
    {
        return $this->numberJW;
    }

    /**
     * Set hq
     *
     * @param string $hq
     *
     * @return Regiment
     */
    public function setHq($hq)
    {
        $this->hq = $hq;

        return $this;
    }

    /**
     * Get hq
     *
     * @return string
     */
    public function getHq()
    {
        return $this->hq;
    }
    /**
     * Set telNumber
     *
     * @param integer $telNumber
     *
     * @return Regiment
     */
    public function setTelNumber($telNumber)
    {
        $this->telNumber = $telNumber;

        return $this;
    }

    /**
     * Get telNumber
     *
     * @return integer
     */
    public function getTelNumber()
    {
        return $this->telNumber;
    }
    
    /**
    * Set regWku
    *
    * @param string $regWku
    *
    * @return Regiment
    */
    public function setRegWku($regWku)
    {
        $this->regWku = $regWku;

        return $this;
    }

    /**
     * Get regWku
     *
     * @return integer
     */
    public function getRegWku()
    {
        return $this->regWku;
    }
}
