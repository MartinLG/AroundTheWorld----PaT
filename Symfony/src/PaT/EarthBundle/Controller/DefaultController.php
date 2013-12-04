<?php

namespace PaT\EarthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PaTEarthBundle:Default:index.html.twig', array('name' => $name));
    }
}
