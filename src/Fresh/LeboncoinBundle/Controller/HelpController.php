<?php

namespace Fresh\LeboncoinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelpController extends Controller
{
    public function helpAction()
    {
        return $this->render('LeboncoinBundle:Help:help.html.twig', array(
        	

        	));
    }
}
