<?php

namespace PaT\EarthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EarthController extends Controller
{
    public function earthAction()
    {
        return $this->render('PaTEarthBundle:Earth:earth.html.twig');
    }
}
