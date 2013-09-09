<?php

namespace Lernparadies\LernparadiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Benutzer
 */
class Benutzer
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $benutzerNewdate;

    /**
     * @var \DateTime
     */
    private $benutzerEditdate;

    /**
     * @var string
     */
    private $benutzerFriendlyUrl;

    /**
     * @var string
     */
    private $benutzerEmail;

    /**
     * @var string
     */
    private $benutzerName;

    /**
     * @var string
     */
    private $benutzerPasswort;

    /**
     * @var integer
     */
    private $benutzerLernerfolgspunkte;

    /**
     * @var \Lernparadies\LernparadiesBundle\Entity\Benutzergruppe
     */
    private $benutzerBenutzerkontotyp;


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
     * @param \DateTime $benutzerNewdate
     * @return Benutzer
     */
    public function setBenutzerNewdate($benutzerNewdate)
    {
        $this->benutzerNewdate = $benutzerNewdate;
    
        return $this;
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
     * @param \DateTime $benutzerEditdate
     * @return Benutzer
     */
    public function setBenutzerEditdate($benutzerEditdate)
    {
        $this->benutzerEditdate = $benutzerEditdate;
    
        return $this;
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
}
