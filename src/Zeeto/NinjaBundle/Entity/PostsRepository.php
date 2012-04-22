<?
namespace Zeeto\NinjaBundle\Entity;
 
use Doctrine\ORM\EntityRepository;
 
class PostsRepository extends EntityRepository{
	
    public function getLatestPosts($limit = 5){ 
    	  $dql = 'SELECT p FROM Zeeto\NinjaBundle\Entity\Posts p ORDER BY p.created_at DESC';
 
        $query = $this->getEntityManager()->createQuery($dql);
        $query->setMaxResults($limit);
 
        return $query->getArrayResult();
    }
}
?>