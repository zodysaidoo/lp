<?php

namespace Lernparadies\LernparadiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bundesland
 */
class Bundesland
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $bundeslandNewdate;

    /**
     * @var \DateTime
     */
    private $bundeslandEditdate;

    /**
     * @var string
     */
    private $bundeslandName;

    /**
     * @var \Lernparadies\LernparadiesBundle\Entity\Land
     */
    private $bundeslandLand;


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
     * Set bundeslandNewdate
     *
     * @param \DateTime $bundeslandNewdate
     * @return Bundesland
     */
    public function setBundeslandNewdate($bundeslandNewdate)
    {
        $this->bundeslandNewdate = $bundeslandNewdate;
    
        return $this;
    }

    /**
     * Get bundeslandNewdate
     *
     * @return \DateTime 
     */
    public function getBundeslandNewdate()
    {
        return $this->bundeslandNewdate;
    }

    /**
     * Set bundeslandEditdate
     *
     * @param \DateTime $bundeslandEditdate
     * @return Bundesland
     */
    public function setBundeslandEditdate($bundeslandEditdate)
    {
        $this->bundeslandEditdate = $bundeslandEditdate;
    
        return $this;
    }

    /**
     * Get bundeslandEditdate
     *
     * @return \DateTime 
     */
    public function getBundeslandEditdate()
    {
        return $this->bundeslandEditdate;
    }

    /**
     * Set bundeslandName
     *
     * @param string $bundeslandName
     * @return Bundesland
     */
    public function setBundeslandName($bundeslandName)
    {
        $this->bundeslandName = $bundeslandName;
    
        return $this;
    }

    /**
     * Get bundeslandName
     *
     * @return string 
     */
    public function getBundeslandName()
    {
        return $this->bundeslandName;
    }

    /**
     * Set bundeslandLand
     *
     * @param \Lernparadies\LernparadiesBundle\Entity\Land $bundeslandLand
     * @return Bundesland
     */
    public function setBundeslandLand(\Lernparadies\LernparadiesBundle\Entity\Land $bundeslandLand = null)
    {
        $this->bundeslandLand = $bundeslandLand;
    
        return $this;
    }

    /**
     * Get bundeslandLand
     *
     * @return \Lernparadies\LernparadiesBundle\Entity\Land 
     */
    public function getBundeslandLand()
    {
        return $this->bundeslandLand;
    }
}