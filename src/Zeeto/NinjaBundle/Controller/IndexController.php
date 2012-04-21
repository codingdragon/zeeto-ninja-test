<?php

namespace Zeeto\NinjaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class IndexController extends Controller
{
    /**
     * @Route("/", name="_ninja")
     * @Template()
     */
    public function indexAction(){
    	return $this->render('ZeetoNinjaBundle:Index:index.html.twig');
    }
    
    /**
     * @Route("/subscribe", name="_ninja_subscribe")
     * @Template()
     */
    public function subscribeAction(){
    	return $this->render('ZeetoNinjaBundle:Index:index.html.twig');
    }
}
