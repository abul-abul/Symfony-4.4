<?php

namespace App\Repository;

use App\Entity\CompanySub;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CompanySub|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompanySub|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompanySub[]    findAll()
 * @method CompanySub[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompanySubRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompanySub::class);
    }

    // /**
    //  * @return CompanySub[] Returns an array of CompanySub objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CompanySub
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
