<?php

namespace Acme2\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('Acme2HelloBundle:Default:index.html.twig', array('name' => $name));
    }
}
