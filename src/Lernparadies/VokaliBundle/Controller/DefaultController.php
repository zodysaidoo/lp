<?php

namespace Lernparadies\VokaliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $name .= " Test hier mal die Ausgabe";
        return $this->render('LernparadiesVokaliBundle:Default:index.html.twig', array('name' => $name));
    }
}
