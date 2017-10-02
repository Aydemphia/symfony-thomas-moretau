<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    public function findFiveLastProducts()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM App:Product p ORDER BY p.id DESC '
            )
            ->setMaxResults(5)
            ->getResult();

    }
}