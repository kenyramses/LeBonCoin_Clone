<?php

namespace Fresh\LeboncoinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function accueilAction()
    {
        return $this->render('LeboncoinBundle:Accueil:accueil.html.twig', array(
        	

        	));
    }
}
