<?php

namespace Lernparadies\LernparadiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stadt
 */
class Stadt
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $stadtNewdate;

    /**
     * @var \DateTime
     */
    private $stadtEditdate;

    /**
     * @var \DateTime
     */
    private $stadtUpdatedate;

    /**
     * @var string
     */
    private $stadtName;

    /**
     * @var float
     */
    private $stadtLat;

    /**
     * @var float
     */
    private $stadtLng;

    /**
     * @var string
     */
    private $stadtLink;

    /**
     * @var \Lernparadies\LernparadiesBundle\Entity\Bundesland
     */
    private $stadtBundesland;

    /**
     * @var \Lernparadies\LernparadiesBundle\Entity\Landkreis
     */
    private $stadtLandkreis;


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
     * Set stadtNewdate
     *
     * @param \DateTime $stadtNewdate
     * @return Stadt
     */
    public function setStadtNewdate($stadtNewdate)
    {
        $this->stadtNewdate = $stadtNewdate;
    
        return $this;
    }

    /**
     * Get stadtNewdate
     *
     * @return \DateTime 
     */
    public function getStadtNewdate()
    {
        return $this->stadtNewdate;
    }

    /**
     * Set stadtEditdate
     *
     * @param \DateTime $stadtEditdate
     * @return Stadt
     */
    public function setStadtEditdate($stadtEditdate)
    {
        $this->stadtEditdate = $stadtEditdate;
    
        return $this;
    }

    /**
     * Get stadtEditdate
     *
     * @return \DateTime 
     */
    public function getStadtEditdate()
    {
        return $this->stadtEditdate;
    }

    /**
     * Set stadtUpdatedate
     *
     * @param \DateTime $stadtUpdatedate
     * @return Stadt
     */
    public function setStadtUpdatedate($stadtUpdatedate)
    {
        $this->stadtUpdatedate = $stadtUpdatedate;
    
        return $this;
    }

    /**
     * Get stadtUpdatedate
     *
     * @return \DateTime 
     */
    public function getStadtUpdatedate()
    {
        return $this->stadtUpdatedate;
    }

    /**
     * Set stadtName
     *
     * @param string $stadtName
     * @return Stadt
     */
    public function setStadtName($stadtName)
    {
        $this->stadtName = $stadtName;
    
        return $this;
    }

    /**
     * Get stadtName
     *
     * @return string 
     */
    public function getStadtName()
    {
        return $this->stadtName;
    }

    /**
     * Set stadtLat
     *
     * @param float $stadtLat
     * @return Stadt
     */
    public function setStadtLat($stadtLat)
    {
        $this->stadtLat = $stadtLat;
    
        return $this;
    }

    /**
     * Get stadtLat
     *
     * @return float 
     */
    public function getStadtLat()
    {
        return $this->stadtLat;
    }

    /**
     * Set stadtLng
     *
     * @param float $stadtLng
     * @return Stadt
     */
    public function setStadtLng($stadtLng)
    {
        $this->stadtLng = $stadtLng;
    
        return $this;
    }

    /**
     * Get stadtLng
     *
     * @return float 
     */
    public function getStadtLng()
    {
        return $this->stadtLng;
    }

    /**
     * Set stadtLink
     *
     * @param string $stadtLink
     * @return Stadt
     */
    public function setStadtLink($stadtLink)
    {
        $this->stadtLink = $stadtLink;
    
        return $this;
    }

    /**
     * Get stadtLink
     *
     * @return string 
     */
    public function getStadtLink()
    {
        return $this->stadtLink;
    }

    /**
     * Set stadtBundesland
     *
     * @param \Lernparadies\LernparadiesBundle\Entity\Bundesland $stadtBundesland
     * @return Stadt
     */
    public function setStadtBundesland(\Lernparadies\LernparadiesBundle\Entity\Bundesland $stadtBundesland = null)
    {
        $this->stadtBundesland = $stadtBundesland;
    
        return $this;
    }

    /**
     * Get stadtBundesland
     *
     * @return \Lernparadies\LernparadiesBundle\Entity\Bundesland 
     */
    public function getStadtBundesland()
    {
        return $this->stadtBundesland;
    }

    /**
     * Set stadtLandkreis
     *
     * @param \Lernparadies\LernparadiesBundle\Entity\Landkreis $stadtLandkreis
     * @return Stadt
     */
    public function setStadtLandkreis(\Lernparadies\LernparadiesBundle\Entity\Landkreis $stadtLandkreis = null)
    {
        $this->stadtLandkreis = $stadtLandkreis;
    
        return $this;
    }

    /**
     * Get stadtLandkreis
     *
     * @return \Lernparadies\LernparadiesBundle\Entity\Landkreis 
     */
    public function getStadtLandkreis()
    {
        return $this->stadtLandkreis;
    }
}
