<?php

namespace Fresh\LeboncoinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Fresh\LeboncoinBundle\Entity\Annonce;
use Fresh\LeboncoinBundle\Entity\AnnonceRepository;

class OffreController extends Controller
{
    public function listerOffreAction()
    {
    	 $annonce = new Annonce;

    	//recuperer la liste des annonces findAll()

    	//on recupere l'entity manager
          $em = $this->getDoctrine() ->getManager();
          $offres = $em->getRepository('LeboncoinBundle:Annonce')->findAll();
        	//var_dump($offres);

        return $this->render('LeboncoinBundle:Offre:offre.html.twig', array(

        	'offer' => $offres,
        	

        	));
    }
}
