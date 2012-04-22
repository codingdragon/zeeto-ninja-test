<?php

namespace Zeeto\NinjaBundle\Controller;
//namespace Zeeto\NinjaBundle\Entity\Posts;
//namespace Zeeto\NinjaBundle\Entity\Subscribers;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class IndexController extends Controller{
    /**
     * @Route("/", name="_ninja")
     * @Template()
     */
    public function indexAction(){
    	#$repository = $this->getDoctrine()->getRepository('ZeetoNinjaBundle:Posts');
    	#$posts = $repository->findAll();
    	
    	$em = $this->getDoctrine()->getEntityManager(); 
    	$posts = $em->getRepository('ZeetoNinjaBundle:Posts')->getLatestPosts();
    	
    	return $this->render('ZeetoNinjaBundle:Index:index.html.twig',  array('posts' => $posts));
    }
    
    /**
     * @Route("/subscribe", name="_ninja_subscribe")
     * @Template()
     */
    public function subscribeAction(){
    	return $this->render('ZeetoNinjaBundle:Index:index.html.twig');
    }
}
