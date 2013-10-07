<?php

namespace Lernparadies\LernparadiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sprache
 */
class Sprache
{
    /**
     * @var boolean
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $spracheNewdate;

    /**
     * @var \DateTime
     */
    private $spracheEditdate;

    /**
     * @var string
     */
    private $spracheName;

    /**
     * @var string
     */
    private $spracheCode;

    /**
     * @var boolean
     */
    private $spracheAktiv;


    /**
     * Get id
     *
     * @return boolean 
     */
    public function getId()
    {
        return $this->id;
    }

	/**
	 * Set spracheNewdate
	 *
	 * @return Sprache
	 */
	public function setSpracheNewdate()
	{
		if(!$this->getSpracheNewdate())
		{
			$this->spracheNewdate = new \DateTime();
			$this->spracheEditdate = new \DateTime();
		}
	}

    /**
     * Get spracheNewdate
     *
     * @return \DateTime 
     */
    public function getSpracheNewdate()
    {
        return $this->spracheNewdate;
    }

	/**
	 * Set spracheEditdate
	 *
	 * @return Sprache
	 */
	public function setSpracheEditdate()
	{
		$this->spracheEditdate = new \DateTime();
	}

    /**
     * Get spracheEditdate
     *
     * @return \DateTime 
     */
    public function getSpracheEditdate()
    {
        return $this->spracheEditdate;
    }

    /**
     * Set spracheName
     *
     * @param string $spracheName
     * @return Sprache
     */
    public function setSpracheName($spracheName)
    {
        $this->spracheName = $spracheName;
    
        return $this;
    }

    /**
     * Get spracheName
     *
     * @return string 
     */
    public function getSpracheName()
    {
        return $this->spracheName;
    }

    /**
     * Set spracheCode
     *
     * @param string $spracheCode
     * @return Sprache
     */
    public function setSpracheCode($spracheCode)
    {
        $this->spracheCode = $spracheCode;
    
        return $this;
    }

    /**
     * Get spracheCode
     *
     * @return string 
     */
    public function getSpracheCode()
    {
        return $this->spracheCode;
    }

    /**
     * Set spracheAktiv
     *
     * @param boolean $spracheAktiv
     * @return Sprache
     */
    public function setSpracheAktiv($spracheAktiv)
    {
        $this->spracheAktiv = $spracheAktiv;
    
        return $this;
    }

    /**
     * Get spracheAktiv
     *
     * @return boolean 
     */
    public function getSpracheAktiv()
    {
        return $this->spracheAktiv;
    }

	public function __toString()
	{
		return $this->getSpracheName();
	}
}