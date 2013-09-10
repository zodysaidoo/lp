<?php

namespace Lernparadies\LernparadiesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LernparadiesLernparadiesBundle:Default:index.html.twig' );
    }
}
