<?php
namespace Zeeto\NinjaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Zeeto\NinjaBundle\Form\NewsletterType;
use Zeeto\NinjaBundle\Entity\Subscribers;
use Zeeto\NinjaBundle\Entity\LoggedApiCalls;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class IndexController extends Controller {

	/**
	 * @Route("/", name="_ninja")
	 * @Template()
	 */
	public function indexAction() {		
		$em = $this->getDoctrine()->getEntityManager();
		$posts = $em->getRepository('ZeetoNinjaBundle:Posts')->getLatestPosts();	
		
		$errors = '';		
		
		$request = $this->get('request')->request;		
		if($request->get('submit') != ''){
			$params = $request->all();
			$subscriber = new Subscribers();
			$result = $subscriber->validate($params);
			
			if(!$result){
				$errors = $subscriber->getErrors();
			} else {
				$subscriber->setFirstName($params['first_name']);
				$subscriber->setLastName($params['last_name']);
				$subscriber->setEmail($params['email']);
				
				$em->persist($subscriber);
				$em->flush();
				
				$this->sendToPartner($params);
				
				$this->get('session')->setFlash('success', 'Whoopy! Thanks for joining our newsletter.');
				//return new RedirectResponse($this->generateUrl('_ninja'));
			}
		}

		//return $this->render('ZeetoNinjaBundle:Index:index.html.twig', array('posts' => $posts, 'form' => $form->createView()));
		return $this->render('ZeetoNinjaBundle:Index:index.html.twig', array('posts' => $posts, 'errors' => $errors));
	}
	
	private function sendToPartner($params){ 
		//print_r($params);
		$url = 'http://fake-partner-api.zeeto.net/api.php';  
		
		$data = array( 
			'firt_name'     => urlencode($params['first_name']), 
			'last_name'     => urlencode($params['last_name']),
         'email_address' => urlencode($params['email'])
      );
      
      $data_string = '';
      
      //url-ify the data for the POST
      foreach($data as $key=>$value) { $data_string .= $key.'='.$value.'&'; }
      rtrim($data_string,'&');
      
      //open connection
      $ch = curl_init();
      
      //set the url, number of POST vars, POST data
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, count($data));
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
      
      //execute post
      $result = curl_exec($ch);
      
      $em = $this->getDoctrine()->getEntityManager();
      $logged = new LoggedApiCalls();
      $logged->setResult($result);
      $em->persist($logged);
		$em->flush();
      
      //close connection
      curl_close($ch);
	}
}