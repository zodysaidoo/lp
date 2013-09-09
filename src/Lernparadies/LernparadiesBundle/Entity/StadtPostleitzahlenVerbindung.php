<?php

namespace Lernparadies\LernparadiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StadtPostleitzahlenVerbindung
 */
class StadtPostleitzahlenVerbindung
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $stadtPostleitzahlenVerbindungNewdate;

    /**
     * @var \DateTime
     */
    private $stadtPostleitzahlenVerbindungEditdate;

    /**
     * @var integer
     */
    private $stadtPostleitzahlenVerbindungPostleitzahl;

    /**
     * @var \Lernparadies\LernparadiesBundle\Entity\Stadt
     */
    private $stadtPostleitzahlenVerbindungStadt;


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
     * Set stadtPostleitzahlenVerbindungNewdate
     *
     * @param \DateTime $stadtPostleitzahlenVerbindungNewdate
     * @return StadtPostleitzahlenVerbindung
     */
    public function setStadtPostleitzahlenVerbindungNewdate($stadtPostleitzahlenVerbindungNewdate)
    {
        $this->stadtPostleitzahlenVerbindungNewdate = $stadtPostleitzahlenVerbindungNewdate;
    
        return $this;
    }

    /**
     * Get stadtPostleitzahlenVerbindungNewdate
     *
     * @return \DateTime 
     */
    public function getStadtPostleitzahlenVerbindungNewdate()
    {
        return $this->stadtPostleitzahlenVerbindungNewdate;
    }

    /**
     * Set stadtPostleitzahlenVerbindungEditdate
     *
     * @param \DateTime $stadtPostleitzahlenVerbindungEditdate
     * @return StadtPostleitzahlenVerbindung
     */
    public function setStadtPostleitzahlenVerbindungEditdate($stadtPostleitzahlenVerbindungEditdate)
    {
        $this->stadtPostleitzahlenVerbindungEditdate = $stadtPostleitzahlenVerbindungEditdate;
    
        return $this;
    }

    /**
     * Get stadtPostleitzahlenVerbindungEditdate
     *
     * @return \DateTime 
     */
    public function getStadtPostleitzahlenVerbindungEditdate()
    {
        return $this->stadtPostleitzahlenVerbindungEditdate;
    }

    /**
     * Set stadtPostleitzahlenVerbindungPostleitzahl
     *
     * @param integer $stadtPostleitzahlenVerbindungPostleitzahl
     * @return StadtPostleitzahlenVerbindung
     */
    public function setStadtPostleitzahlenVerbindungPostleitzahl($stadtPostleitzahlenVerbindungPostleitzahl)
    {
        $this->stadtPostleitzahlenVerbindungPostleitzahl = $stadtPostleitzahlenVerbindungPostleitzahl;
    
        return $this;
    }

    /**
     * Get stadtPostleitzahlenVerbindungPostleitzahl
     *
     * @return integer 
     */
    public function getStadtPostleitzahlenVerbindungPostleitzahl()
    {
        return $this->stadtPostleitzahlenVerbindungPostleitzahl;
    }

    /**
     * Set stadtPostleitzahlenVerbindungStadt
     *
     * @param \Lernparadies\LernparadiesBundle\Entity\Stadt $stadtPostleitzahlenVerbindungStadt
     * @return StadtPostleitzahlenVerbindung
     */
    public function setStadtPostleitzahlenVerbindungStadt(\Lernparadies\LernparadiesBundle\Entity\Stadt $stadtPostleitzahlenVerbindungStadt = null)
    {
        $this->stadtPostleitzahlenVerbindungStadt = $stadtPostleitzahlenVerbindungStadt;
    
        return $this;
    }

    /**
     * Get stadtPostleitzahlenVerbindungStadt
     *
     * @return \Lernparadies\LernparadiesBundle\Entity\Stadt 
     */
    public function getStadtPostleitzahlenVerbindungStadt()
    {
        return $this->stadtPostleitzahlenVerbindungStadt;
    }
}
