<?php

namespace Lernparadies\LernparadiesBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LernparadiesBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
