<?php

namespace Lernparadies\LernparadiesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LernparadiesLernparadiesBundle:Default:index.html.twig', array('name' => $name));
    }
}
