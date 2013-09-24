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
     * @param \DateTime $benutzergruppeNewdate
     * @return Benutzergruppe
     */
    public function setBenutzergruppeNewdate($benutzergruppeNewdate)
    {
        $this->benutzergruppeNewdate = $benutzergruppeNewdate;
    
        return $this;
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
     * @param \DateTime $benutzergruppeEditdate
     * @return Benutzergruppe
     */
    public function setBenutzergruppeEditdate($benutzergruppeEditdate)
    {
        $this->benutzergruppeEditdate = $benutzergruppeEditdate;
    
        return $this;
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
}