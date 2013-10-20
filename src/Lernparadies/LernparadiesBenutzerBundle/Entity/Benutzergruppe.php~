<?php

namespace Lernparadies\LernparadiesBenutzerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\Group as BaseGroup;
/**
 * Benutzergruppe
 */
class Benutzergruppe extends BaseGroup
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

	public function __toString()
	{
		return $this->getName();
	}
}