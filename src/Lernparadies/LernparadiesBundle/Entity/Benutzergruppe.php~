<?php

namespace Lernparadies\LernparadiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Benutzergruppe
 */
class Benutzergruppe
{
    /**
     * @var boolean
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $benutzergruppeNewdate;

    /**
     * @var \DateTime
     */
    private $benutzergruppeEditdate;

    /**
     * @var string
     */
    private $benutzergruppeLabel;

    /**
     * @var boolean
     */
    private $benutzergruppeLogin;


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
	 * Set benutzergruppeNewdate
	 *
	 * @return Benutzergruppe
	 */
	public function setBenutzergruppeNewdate()
	{
		if(!$this->getBenutzergruppeNewdate())
		{
			$this->benutzergruppeNewdate = new \DateTime();
			$this->benutzergruppeEditdate = new \DateTime();
		}
	}

	/**
	 * Get benutzergruppeNewdate
	 *
	 * @return \DateTime
	 */
	public function getBenutzergruppeNewdate()
	{
		return $this->benutzergruppeNewdate;
	}

	/**
	 * Set benutzergruppeEditdate
	 *
	 * @return Benutzergruppe
	 */
	public function setBenutzergruppeEditdate()
	{
		$this->benutzergruppeEditdate = new \DateTime();
	}

	/**
	 * Get benutzergruppeEditdate
	 *
	 * @return \DateTime
	 */
	public function getBenutzergruppeEditdate()
	{
		return $this->benutzergruppeEditdate;
	}

    /**
     * Set benutzergruppeLabel
     *
     * @param string $benutzergruppeLabel
     * @return Benutzergruppe
     */
    public function setBenutzergruppeLabel($benutzergruppeLabel)
    {
        $this->benutzergruppeLabel = $benutzergruppeLabel;
    
        return $this;
    }

    /**
     * Get benutzergruppeLabel
     *
     * @return string 
     */
    public function getBenutzergruppeLabel()
    {
        return $this->benutzergruppeLabel;
    }

    /**
     * Set benutzergruppeLogin
     *
     * @param boolean $benutzergruppeLogin
     * @return Benutzergruppe
     */
    public function setBenutzergruppeLogin($benutzergruppeLogin)
    {
        $this->benutzergruppeLogin = $benutzergruppeLogin;
    
        return $this;
    }

    /**
     * Get benutzergruppeLogin
     *
     * @return boolean 
     */
    public function getBenutzergruppeLogin()
    {
        return $this->benutzergruppeLogin;
    }

	public function __toString()
	{
		return $this->getBenutzergruppeLabel();
	}
    /**
     * @var integer
     */
    private $benutzergruppeStatuscode;


    /**
     * Set benutzergruppeStatuscode
     *
     * @param integer $benutzergruppeStatuscode
     * @return Benutzergruppe
     */
    public function setBenutzergruppeStatuscode($benutzergruppeStatuscode)
    {
        $this->benutzergruppeStatuscode = $benutzergruppeStatuscode;
    
        return $this;
    }

    /**
     * Get benutzergruppeStatuscode
     *
     * @return integer
     */
    public function getBenutzergruppeStatuscode()
    {
        return $this->benutzergruppeStatuscode;
    }
}