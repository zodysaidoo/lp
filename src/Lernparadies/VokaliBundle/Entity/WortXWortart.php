<?php

namespace Lernparadies\VokaliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WortXWortart
 */
class WortXWortart
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \Lernparadies\VokaliBundle\Entity\Wort
     */
    private $wort;

    /**
     * @var \Lernparadies\VokaliBundle\Entity\Wort
     */
    private $wortart;

    /**
     * @var \Lernparadies\LernparadiesBundle\Entity\Sprache
     */
    private $sprache;

    /**
     * @var boolean
     */
    private $enabled;


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
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return WortXWortart
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return WortXWortart
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    
        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set wort
     *
     * @param \Lernparadies\VokaliBundle\Entity\Wort $wort
     * @return WortXWortart
     */
    public function setWort(\Lernparadies\VokaliBundle\Entity\Wort $wort = null)
    {
        $this->wort = $wort;
    
        return $this;
    }

    /**
     * Get wort
     *
     * @return \Lernparadies\VokaliBundle\Entity\Wort 
     */
    public function getWort()
    {
        return $this->wort;
    }

    /**
     * Set wortart
     *
     * @param \Lernparadies\VokaliBundle\Entity\Wort $wortart
     * @return WortXWortart
     */
    public function setWortart( $wortart = null)
    {
        $this->wortart = $wortart;
    
        return $this;
    }

    /**
     * Get wortart
     *
     * @return \Lernparadies\VokaliBundle\Entity\Wort 
     */
    public function getWortart()
    {
        return $this->wortart;
    }

    /**
     * Set sprache
     *
     * @param \Lernparadies\LernparadiesBundle\Entity\Sprache $sprache
     * @return WortXWortart
     */
    public function setSprache( $sprache = null)
    {
        $this->sprache = $sprache;
    
        return $this;
    }

    /**
     * Get sprache
     *
     * @return \Lernparadies\LernparadiesBundle\Entity\Sprache 
     */
    public function getSprache()
    {
        return $this->sprache;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        if(!$this->getCreatedAt())
        {
            $this->created_at = new \DateTime();
            $this->updated_at= new \DateTime();
        }
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        $this->updated_at = new \DateTime();
    }

    /**
     * @param boolean $boolean
     * @return $this
     */
    public function setEnabled($boolean)
    {
        $this->enabled = $boolean;

        return $this;
    }

    /**
     * getEnabled()
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * isEnabled()
     *
     * @return boolean
     */
    public function isEnabled()
    {
        return $this->getEnabled();
    }
}