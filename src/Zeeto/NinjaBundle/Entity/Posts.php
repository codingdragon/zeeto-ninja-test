<?php
namespace Zeeto\NinjaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Zeeto\NinjaBundle\Entity\PostsRepository")
 * @ORM\Table(name="posts")
 * @ORM\HasLifecycleCallbacks
 */
class Posts {

	/**
	  * @ORM\Id
	  * @ORM\Column(type="integer")
	  * @ORM\GeneratedValue(strategy="AUTO")
	  */
	protected $id;

	/**
	  * @ORM\Column(type="text")
	  */
	protected $content;

	/**
	  * @ORM\Column(type="datetime")
	  */
	protected $created_at;

}
?>
