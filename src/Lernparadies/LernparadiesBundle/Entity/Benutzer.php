<?php

namespace Lernparadies\LernparadiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Benutzer
 */
class Benutzer implements UserInterface
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \DateTime
     */
	protected $benutzerNewdate;

    /**
     * @var \DateTime
     */
	protected $benutzerEditdate;

    /**
     * @var string
     */
	protected $benutzerFriendlyUrl;

    /**
     * @var string
     */
	protected $benutzerEmail;

    /**
     * @var string
     */
	protected $benutzerName;

    /**
     * @var string
     */
	protected $benutzerPasswort;

    /**
     * @var integer
     */
	protected $benutzerLernerfolgspunkte = 0;

    /**
     * @var \Lernparadies\LernparadiesBundle\Entity\Benutzergruppe
     */
	protected $benutzerBenutzerkontotyp;


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
	 * Set benutzerNewdate
	 *
	 * @return Benutzer
	 */
	public function setBenutzerNewdate()
	{
		if(!$this->getBenutzerNewdate())
		{
			$this->benutzerNewdate = new \DateTime();
			$this->benutzerEditdate = new \DateTime();
		}
	}

	/**
	 * Get benutzerNewdate
	 *
	 * @return \DateTime
	 */
	public function getBenutzerNewdate()
	{
		return $this->benutzerNewdate;
	}

	/**
	 * Set benutzerEditdate
	 *
	 * @return Benutzer
	 */
	public function setBenutzerEditdate()
	{
		$this->benutzerEditdate = new \DateTime();
	}

	/**
	 * Get benutzerEditdate
	 *
	 * @return \DateTime
	 */
	public function getBenutzerEditdate()
	{
		return $this->benutzerEditdate;
	}

    /**
     * Set benutzerFriendlyUrl
     *
     * @param string $benutzerFriendlyUrl
     * @return Benutzer
     */
    public function setBenutzerFriendlyUrl($benutzerFriendlyUrl)
    {
        $this->benutzerFriendlyUrl = $benutzerFriendlyUrl;
    
        return $this;
    }

    /**
     * Get benutzerFriendlyUrl
     *
     * @return string 
     */
    public function getBenutzerFriendlyUrl()
    {
        return $this->benutzerFriendlyUrl;
    }

    /**
     * Set benutzerEmail
     *
     * @param string $benutzerEmail
     * @return Benutzer
     */
    public function setBenutzerEmail($benutzerEmail)
    {
        $this->benutzerEmail = $benutzerEmail;
    
        return $this;
    }

    /**
     * Get benutzerEmail
     *
     * @return string 
     */
    public function getBenutzerEmail()
    {
        return $this->benutzerEmail;
    }

    /**
     * Set benutzerName
     *
     * @param string $benutzerName
     * @return Benutzer
     */
    public function setBenutzerName($benutzerName)
    {
        $this->benutzerName = $benutzerName;
    
        return $this;
    }

    /**
     * Get benutzerName
     *
     * @return string 
     */
    public function getBenutzerName()
    {
        return $this->benutzerName;
    }

    /**
     * Set benutzerPasswort
     *
     * @param string $benutzerPasswort
     * @return Benutzer
     */
    public function setBenutzerPasswort($benutzerPasswort)
    {
        $this->benutzerPasswort = $benutzerPasswort;
    
        return $this;
    }

    /**
     * Get benutzerPasswort
     *
     * @return string 
     */
    public function getBenutzerPasswort()
    {
        return $this->benutzerPasswort;
    }

    /**
     * Set benutzerLernerfolgspunkte
     *
     * @param integer $benutzerLernerfolgspunkte
     * @return Benutzer
     */
    public function setBenutzerLernerfolgspunkte($benutzerLernerfolgspunkte)
    {
        $this->benutzerLernerfolgspunkte = $benutzerLernerfolgspunkte;
    
        return $this;
    }

    /**
     * Get benutzerLernerfolgspunkte
     *
     * @return integer 
     */
    public function getBenutzerLernerfolgspunkte()
    {
        return $this->benutzerLernerfolgspunkte;
    }

    /**
     * Set benutzerBenutzerkontotyp
     *
     * @param \Lernparadies\LernparadiesBundle\Entity\Benutzergruppe $benutzerBenutzerkontotyp
     * @return Benutzer
     */
    public function setBenutzerBenutzerkontotyp(\Lernparadies\LernparadiesBundle\Entity\Benutzergruppe $benutzerBenutzerkontotyp = null)
    {
        $this->benutzerBenutzerkontotyp = $benutzerBenutzerkontotyp;
    
        return $this;
    }

    /**
     * Get benutzerBenutzerkontotyp
     *
     * @return \Lernparadies\LernparadiesBundle\Entity\Benutzergruppe 
     */
    public function getBenutzerBenutzerkontotyp()
    {
        return $this->benutzerBenutzerkontotyp;
    }
	public function getUsername()
	{
		return $this->getBenutzerName();
	}

	public function getPassword()
	{
		return $this->getBenutzerPasswort();
	}

	public function getRoles()
	{
		return array('ROLE_ADMIN');
	}

	public function getSalt()
	{
		return null;
	}

	public function eraseCredentials()
	{

	}

	public function equals(UserInterface $user)
	{
		return $user->getUsername() == $this->getBenutzerName();
	}
}