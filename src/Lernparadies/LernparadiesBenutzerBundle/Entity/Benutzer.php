<?php

namespace Lernparadies\LernparadiesBenutzerBundle\Entity;

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
     * @var \Lernparadies\LernparadiesBenutzerBundle\Entity\Benutzergruppe
     */
	protected $benutzerBenutzerkontotyp;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

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
     * Set benutzerBenutzerkontotyp
     *
     * @param \Lernparadies\LernparadiesBenutzerBundle\Entity\Benutzergruppe $benutzerBenutzerkontotyp
     * @return Benutzer
     */
    public function setBenutzerBenutzerkontotyp(\Lernparadies\LernparadiesBenutzerBundle\Entity\Benutzergruppe $benutzerBenutzerkontotyp = null)
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