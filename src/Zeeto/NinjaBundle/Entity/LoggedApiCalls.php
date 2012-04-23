<?php
namespace Zeeto\NinjaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="logged_api_calls")
 * @ORM\HasLifecycleCallbacks
 */
class LoggedApiCalls {

	/**
	  * @ORM\Id
	  * @ORM\Column(type="integer")
	  * @ORM\GeneratedValue(strategy="AUTO")
	  */
	protected $id;

	/**
    * @ORM\Column(type="string", length="10", name="result")
    *
    * @var string $result
    */
   protected $result;
 
   /**
    * @ORM\Column(type="datetime", name="created_at")
    *
    * @var DateTime $createdAt
    */
   protected $createdAt;
	
	public function __construct(){
		$this->createdAt = new \DateTime();
	}	
	
	public function getCreatedAt(){
		$this->createdAt;
	}
	
	public function getResult(){
		$this->result;
	}
	
	public function setCreatedAt($time){
		$this->createdAt = $time;
	}
	
	public function setResult($result){
		$this->result = $result;
	}
}
?>
