<?php

namespace Fresh\LeboncoinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DemandeController extends Controller
{
    public function listerDemandeAction()
    {
        return $this->render('LeboncoinBundle:Demande:demande.html.twig', array(
        	

        	));
    }
}
