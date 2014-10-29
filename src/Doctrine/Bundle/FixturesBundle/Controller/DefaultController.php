<?php

namespace Doctrine\Bundle\FixturesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DoctrineFixturesBundle:Default:index.html.twig', array('name' => $name));
    }
}
