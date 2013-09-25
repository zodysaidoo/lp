<?php

namespace Lernparadies\VokaliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wortart
 */
class Wortart
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $wortartNewdate;

    /**
     * @var \DateTime
     */
    private $wortartEditdate;

    /**
     * @var string
     */
    private $wortartName;

    /**
     * @var string
     */
    private $wortartKommentar;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set wortartNewdate
     *
     * @param \DateTime $wortartNewdate
     * @return Wortart
     */
    public function setWortartNewdate($wortartNewdate)
    {
        $this->wortartNewdate = $wortartNewdate;
    
        return $this;
    }

    /**
     * Get wortartNewdate
     *
     * @return \DateTime 
     */
    public function getWortartNewdate()
    {
        return $this->wortartNewdate;
    }

    /**
     * Set wortartEditdate
     *
     * @param \DateTime $wortartEditdate
     * @return Wortart
     */
    public function setWortartEditdate($wortartEditdate)
    {
        $this->wortartEditdate = $wortartEditdate;
    
        return $this;
    }

    /**
     * Get wortartEditdate
     *
     * @return \DateTime 
     */
    public function getWortartEditdate()
    {
        return $this->wortartEditdate;
    }

    /**
     * Set wortartName
     *
     * @param string $wortartName
     * @return Wortart
     */
    public function setWortartName($wortartName)
    {
        $this->wortartName = $wortartName;
    
        return $this;
    }

    /**
     * Get wortartName
     *
     * @return string 
     */
    public function getWortartName()
    {
        return $this->wortartName;
    }

    /**
     * Set wortartKommentar
     *
     * @param string $wortartKommentar
     * @return Wortart
     */
    public function setWortartKommentar($wortartKommentar)
    {
        $this->wortartKommentar = $wortartKommentar;
    
        return $this;
    }

    /**
     * Get wortartKommentar
     *
     * @return string 
     */
    public function getWortartKommentar()
    {
        return $this->wortartKommentar;
    }
}
