<?php

namespace Lernparadies\LernparadiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Landkreis
 */
class Landkreis
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $landkreisNewdate;

    /**
     * @var \DateTime
     */
    private $landkreisEditdate;

    /**
     * @var string
     */
    private $landkreisName;

    /**
     * @var \Lernparadies\LernparadiesBundle\Entity\Bundesland
     */
    private $landkreisBundesland;


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
     * Set landkreisNewdate
     *
     * @param \DateTime $landkreisNewdate
     * @return Landkreis
     */
    public function setLandkreisNewdate($landkreisNewdate)
    {
        $this->landkreisNewdate = $landkreisNewdate;
    
        return $this;
    }

    /**
     * Get landkreisNewdate
     *
     * @return \DateTime 
     */
    public function getLandkreisNewdate()
    {
        return $this->landkreisNewdate;
    }

    /**
     * Set landkreisEditdate
     *
     * @param \DateTime $landkreisEditdate
     * @return Landkreis
     */
    public function setLandkreisEditdate($landkreisEditdate)
    {
        $this->landkreisEditdate = $landkreisEditdate;
    
        return $this;
    }

    /**
     * Get landkreisEditdate
     *
     * @return \DateTime 
     */
    public function getLandkreisEditdate()
    {
        return $this->landkreisEditdate;
    }

    /**
     * Set landkreisName
     *
     * @param string $landkreisName
     * @return Landkreis
     */
    public function setLandkreisName($landkreisName)
    {
        $this->landkreisName = $landkreisName;
    
        return $this;
    }

    /**
     * Get landkreisName
     *
     * @return string 
     */
    public function getLandkreisName()
    {
        return $this->landkreisName;
    }

    /**
     * Set landkreisBundesland
     *
     * @param \Lernparadies\LernparadiesBundle\Entity\Bundesland $landkreisBundesland
     * @return Landkreis
     */
    public function setLandkreisBundesland(\Lernparadies\LernparadiesBundle\Entity\Bundesland $landkreisBundesland = null)
    {
        $this->landkreisBundesland = $landkreisBundesland;
    
        return $this;
    }

    /**
     * Get landkreisBundesland
     *
     * @return \Lernparadies\LernparadiesBundle\Entity\Bundesland 
     */
    public function getLandkreisBundesland()
    {
        return $this->landkreisBundesland;
    }
}
