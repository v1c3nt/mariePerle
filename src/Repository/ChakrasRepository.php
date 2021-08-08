<?php

namespace App\Repository;

use App\Entity\Chakras;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Chakras|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chakras|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chakras[]    findAll()
 * @method Chakras[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChakrasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chakras::class);
    }

    // /**
    //  * @return Chakras[] Returns an array of Chakras objects
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
    public function findOneBySomeField($value): ?Chakras
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
