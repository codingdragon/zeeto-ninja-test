<?php
namespace Zeeto\NinjaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

define("NAME_REGEX", "/^[a-zA-Z]+$/");
define("EMAIL_REGEX", "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/");

/**
 * @ORM\Entity
 * @ORM\Table(name="subscribers")
 */
class Subscribers {
	
	/**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    *
    * @var integer $id
    */
   protected $id;
 
   /**
    * @ORM\Column(type="string", length="255", name="first_name")
    *
    * @var string $firstName
    */
   protected $firstName;
 
   /**
    * @ORM\Column(type="string", length="255", name="last_name")
    *
    * @var string $lastName
    */
   protected $lastName;
 
   /**
    * @ORM\Column(type="string", length="255", name="email")
    *
    * @var string $email
    */
   protected $email;
 
   /**
    * @ORM\Column(type="datetime", name="created_at")
    *
    * @var DateTime $createdAt
    */
   protected $createdAt;
	
	protected $errors = array();
	
	public function __construct(){
		$this->createdAt = new \DateTime();
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getFirstName(){
		return $this->firstName;
	}
	
	public function getLastName(){
		return $this->lastName;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function getCreatedAt(){
		return $this->createdAt;
	}
	
	public function getErrors(){
		return $this->errors;
	}
	
	public function isValidEmail($email){		
		if($email == ''){
			$this->errors['EMAIL_REQUIRED'] = 'Email Is Required.';
			return;
		}		
		
		if(!preg_match(EMAIL_REGEX, $email)){
			$this->errors['INVALID_EMAIL'] = 'Email Is Invalid.';
		}
	}
	
	public function isValidFirstName($name){		
		if($name == ''){
			$this->errors['FIRST_NAME_REQUIRED'] = 'First Name Is Required.';
			return;
		}		
		
		if(!preg_match(NAME_REGEX, $name)){
			$this->errors['INVALID_FIRSTNAME'] = 'First Name Is Invalid.';
		}
	}
	
	
	public function isValidLastName($name){
		if($name == ''){
			$this->errors['LAST_NAME_REQUIRED'] = 'Last Name Is Required.';
			return;
		}		
		
		if(!preg_match(NAME_REGEX, $name)){
			$this->errors['INVALID_LASTNAME'] = 'Last Name Is Invalid.';
		}
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function setFirstName($name){
		$this->firstName = ucfirst($name);
	}
	
	public function setLastName($name){
		$this->lastName = ucfirst($name);
	}
	
	public function setEmail($email){
		$this->email = $email;
	}
	
	public function setCreatedAt($time){
		$this->createdAt = $time;
	}
	
	public function validate(array $params){		
		$firstName = trim($params['first_name']);
		$lastName = trim($params['last_name']);
		$email = trim($params['email']);
		
		$this->isValidFirstName($firstName);
		$this->isValidLastName($lastName);
		$this->isValidEmail($email);
		
		if(sizeof($this->errors) > 0){
         return false;
      }
      return true;
	}
}
?>