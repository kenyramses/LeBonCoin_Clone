<?php

namespace Fresh\LeboncoinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Fresh\LeboncoinBundle\Entity\Annonce;
use Fresh\LeboncoinBundle\Form\AnnonceType;

use Fresh\LeboncoinBundle\Entity\Cathegorie;
use Fresh\LeboncoinBundle\Form\CathegorieType;

use Fresh\LeboncoinBundle\Entity\Annonceur;
use Fresh\LeboncoinBundle\Form\AnnonceurType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


class AnnonceController extends Controller
{
    /**
    * @Route("/annonce")
    *@Method("POST")
    */
    public function createAnnonceAction(Request $request)
    {

      $annonce = new Annonce;
      $cathegorie = new Cathegorie;
      $annonceur = new Annonceur;

      $formannonce = $this->createForm(AnnonceType::class, $annonce);
      $formcatheg = $this->createForm(CathegorieType::class, $cathegorie);
       $formannonceur = $this->createForm(AnnonceurType::class,  $annonceur);
       //on teste le droit
        if (!$this->get('security.authorization_checker')->isGranted('ROLE_ANNONCEUR')) {

            // Sinon on déclenche une exception « Accès interdit »

            throw new AccessDeniedException("Vous n'avez pas le droit ANNONCEUR.");

        }



      //ensuite on peut recupperer la requete ki sera envoyée par le new formulaire
         //$request = $this->getRequest();
         //$request = $this->handleRequest();
          $formannonce->handleRequest($request);
                $formcatheg->handleRequest($request);
                $formannonceur->handleRequest($request);

          #on teste si c'est une requete de type post
        //if ($request->isMethod('POST') ){
          if ($request->isMethod('POST') ){
                 //on bind la requete 
                //$formannonce->bind($request);
               // $formcatheg->bind($request);
                //$formannonceur->bind($request);
                 //et on teste si le formulaire est valide
                //if($formannonce->isValid()){
                     
                     //on recupere les données liees à l'annonce
                     $annonce -> setDate();
                     $annonce -> setDescription( $formannonce->getData()->getDescription() );
                     $annonce -> setPrix( $formannonce->getData()->getPrix() );
                     $annonce -> setTypeannonce( $formannonce->getData()->getTypeannonce() ) ;
                     $annonce -> setTitre( $formannonce->getData()->getTitre() );
                     $annonce -> setRegion( $formannonce->getData()->getRegion() );
                     $annonce -> setDep( $formannonce->getData()->getDep() );
                     $annonce -> setLogo( $formannonce->getData()->getLogo() );
                     $annonce -> setUrl( $formannonce->getData()->getUrl() );

                     //on recupere les données liees à l'annonceur
                     $annonceur -> setPseudo( $formannonceur ->getData()->getPseudo() );
                     $annonceur -> setEmail( $formannonceur ->getData()->getEmail() );
                     $annonceur -> setTelephone( $formannonceur ->getData()->getTelephone() );
                    


                     $cathegorie -> setNomCathegorie( $formcatheg->getData()->getNomCathegorie() );
                     //$cathegorie -> setNomCathegorie( 'sport');


                     //on lie l'annonce au autres addCategoryId
                     //$annonce -> setCathegorie($cathegorie);
                     $annonce -> addCategoryId($cathegorie);
                     //$annonce -> setImage($image);
                     $annonce -> setAnnonceur($annonceur);


                     //on recupere l'entity manager
                      $em = $this->getDoctrine() ->getManager();
                      $em->persist($annonce);
                      //var_dump($annonce);
                     //on inserre
                      $em->flush();
                      //on reste dans la page annonce
                     return $this->render('LeboncoinBundle:Accueil:accueil.html.twig', array(
                          'form'=>$formannonce->createView(),
                          
                       ));
                //}
        }    


           return $this->render('LeboncoinBundle:Annonce:annonce.html.twig', array(
        	 'form'=>$formannonce->createView(), //on lui envoi le form créé par createView
           'formcat'=>$formcatheg->createView(),
           'formpusher'=>$formannonceur->createView(),
            ));
        
    }
}
