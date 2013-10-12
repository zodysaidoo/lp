<?php

namespace Lernparadies\LernparadiesBenutzerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class LernparadiesBenutzerBundle
 * @package Lernparadies\LernparadiesBenutzerBundle
 * @todo Translations alle prüfen /edit-profile, /edit-authentication...
 * @todo edit-authentication kann man sein passwort nicht ändern
 * @todo formularaussehen verbessern
 */
class LernparadiesBenutzerBundle extends Bundle
{
    protected $parent;

    /**
     * @param string $parent
     */
    public function __construct($parent = null)
    {
        $this->parent = $parent;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return $this->parent;
    }
}
