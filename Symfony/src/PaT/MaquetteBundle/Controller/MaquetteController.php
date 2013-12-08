<?php

namespace PaT\MaquetteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MaquetteController extends Controller
{
    public function indexAction()
    {
        return $this->render('PaTMaquetteBundle:Maquette:index.html.twig');
    }

    public function contactAction()
    {
        return $this->render('PaTMaquetteBundle:Maquette:contact.html.twig');
    }

    public function countryAction()
    {
    	return $this->render('PaTMaquetteBundle:Maquette:country.html.twig');
    }

    public function countrycheckAction()
    {
    	// Pour récupérer le service UserManager du bundle
		$userManager = $this->get('fos_user.user_manager');

		// Pour charger un utilisateur
		$user = $userManager->findUserBy(array('username' => 'Martinovic'));

		$user->setCountry($_POST['_country']);
		$userManager->updateUser($user);


    	return $this->redirect( $this->generateUrl('Home'));
    }
}
