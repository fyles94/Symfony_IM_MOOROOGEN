<?php

namespace Esiea\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {

        return $this->render('EsieaBlogBundle:Default:index.html.twig');
    }
    public function chatAction()
    {
    	return $this->render('EsieaBlogBundle:Default:chat.html.twig');
    }
        public function contactAction()
    {

        return $this->render('EsieaBlogBundle:Default:contact.html.twig');
    }
}
