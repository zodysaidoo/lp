<?php

namespace Lernparadies\LernparadiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * Benutzer
 */
class Benutzer extends BaseUser implements UserInterface
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

	public function __construct()
	{
		parent::__construct();
		// your own logic
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
		return $user->getUsername() == $this->getUsername();
	}

    /**
     * @ORM\PrePersist
     */
    public function setDefaultParameterAtCreation()
    {
        if(!$this->getBenutzerFriendlyUrl()){
	        $this->setBenutzerFriendlyUrl($this->getUsername()."-".uniqid());
        }
    }
}