<?php

namespace Lernparadies\VokaliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vokabel
 */
class Vokabel
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
    private $wort1;

    /**
     * @var \Lernparadies\VokaliBundle\Entity\Wort
     */
    private $wort2;

    /**
     * @var \Lernparadies\LernparadiesBundle\Entity\Sprache
     */
    private $wort1sprache;

    /**
     * @var \Lernparadies\LernparadiesBundle\Entity\Sprache
     */
    private $wort2sprache;


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
     * @return Vokabel
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
     * @return Vokabel
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
     * Set wort1
     *
     * @param \Lernparadies\VokaliBundle\Entity\Wort $wort1
     * @return Vokabel
     */
    public function setWort1( $wort1 = null )
    {

	    if(is_string($wort1)){
		    $wort = $this->doctrine->getRepository('LernparadiesVokaliBundle:Wort')->findOneBy( array( 'wortName' => $wort1) );
		    if(!$wort)
		    {
			    $wort = new Wort();
			    $wort->setWortName($wort1);
		    }
		    $this->wort1 = $wort;
	    }elseif(is_object($wort1) && get_class($wort1) == 'Lernparadies\VokaliBundle\Entity\Wort'){
		    $this->wort1 = $wort1;
	    };
        return $this;
    }

    /**
     * Get wort1
     *
     * @return \Lernparadies\VokaliBundle\Entity\Wort 
     */
    public function getWort1()
    {
        return $this->wort1;
    }

    /**
     * Set wort2
     *
     * @param \Lernparadies\VokaliBundle\Entity\Wort $wort2
     * @return Vokabel
     */
    public function setWort2( $wort2 = null)
    {
	    if(is_string($wort2)){
		    $wort = $this->doctrine->getRepository('LernparadiesVokaliBundle:Wort')->findOneBy( array( 'wortName' => $wort2) );
		    if(!$wort)
		    {
			    $wort = new Wort();
			    $wort->setWortName($wort2);
		    }
		    $this->wort2 = $wort;
	    }elseif(is_object($wort2) && get_class($wort2) == 'Lernparadies\VokaliBundle\Entity\Wort'){
		    $this->wort2 = $wort2;
	    };
    
        return $this;
    }

    /**
     * Get wort2
     *
     * @return \Lernparadies\VokaliBundle\Entity\Wort 
     */
    public function getWort2()
    {
        return $this->wort2;
    }

    /**
     * Set wort1sprache
     *
     * @param \Lernparadies\LernparadiesBundle\Entity\Sprache $wort1sprache
     * @return Vokabel
     */
    public function setWort1sprache(\Lernparadies\LernparadiesBundle\Entity\Sprache $wort1sprache = null)
    {
        $this->wort1sprache = $wort1sprache;
    
        return $this;
    }

    /**
     * Get wort1sprache
     *
     * @return \Lernparadies\LernparadiesBundle\Entity\Sprache 
     */
    public function getWort1sprache()
    {
        return $this->wort1sprache;
    }

    /**
     * Set wort2sprache
     *
     * @param \Lernparadies\LernparadiesBundle\Entity\Sprache $wort2sprache
     * @return Vokabel
     */
    public function setWort2sprache(\Lernparadies\LernparadiesBundle\Entity\Sprache $wort2sprache = null)
    {
        $this->wort2sprache = $wort2sprache;
    
        return $this;
    }

    /**
     * Get wort2sprache
     *
     * @return \Lernparadies\LernparadiesBundle\Entity\Sprache 
     */
    public function getWort2sprache()
    {
        return $this->wort2sprache;
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
}