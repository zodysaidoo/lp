<?php

namespace Lernparadies\LernparadiesBenutzerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Benutzergruppe
 */
class Benutzergruppe
{
    /**
     * @var boolean
     */
	protected $id;

    /**
     * @var \DateTime
     */
	protected $benutzergruppeNewdate;

    /**
     * @var \DateTime
     */
	protected $benutzergruppeEditdate;

    /**
     * @var string
     */
	protected $benutzergruppeLabel;

    /**
     * @var boolean
     */
	protected $benutzergruppeLogin;

	/**
	 * @var integer
	 */
	protected $benutzergruppeStatuscode;


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