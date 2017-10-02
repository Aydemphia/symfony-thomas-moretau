<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class CommentRepository extends EntityRepository
{
    public function findByProductId($id)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM App:Comments p WHERE p.productId = '.$id.' ORDER BY p.id DESC'
            )
            ->getResult();
    }
}