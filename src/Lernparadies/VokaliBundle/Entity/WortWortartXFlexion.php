<?php

namespace Lernparadies\VokaliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WortWortartXFlexion
 */
class WortWortartXFlexion
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
     * @var \Lernparadies\VokaliBundle\Entity\Flexionsart
     */
    private $flexionsart;


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
     * @return WortWortartXFlexion
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
     * @return WortWortartXFlexion
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
     * @return WortWortartXFlexion
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
     * Set flexionsart
     *
     * @param \Lernparadies\VokaliBundle\Entity\Flexionsart $flexionsart
     * @return WortWortartXFlexion
     */
    public function setFlexionsart(\Lernparadies\VokaliBundle\Entity\Flexionsart $flexionsart = null)
    {
        $this->flexionsart = $flexionsart;
    
        return $this;
    }

    /**
     * Get flexionsart
     *
     * @return \Lernparadies\VokaliBundle\Entity\Flexionsart 
     */
    public function getFlexionsart()
    {
        return $this->flexionsart;
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
     * @var \Lernparadies\VokaliBundle\Entity\WortXWortart
     */
    private $wortxwortart;


    /**
     * Set wortxwortart
     *
     * @param \Lernparadies\VokaliBundle\Entity\WortXWortart $wortxwortart
     * @return WortWortartXFlexion
     */
    public function setWortxwortart(\Lernparadies\VokaliBundle\Entity\WortXWortart $wortxwortart = null)
    {
        $this->wortxwortart = $wortxwortart;
    
        return $this;
    }

    /**
     * Get wortxwortart
     *
     * @return \Lernparadies\VokaliBundle\Entity\WortXWortart 
     */
    public function getWortxwortart()
    {
        return $this->wortxwortart;
    }
}