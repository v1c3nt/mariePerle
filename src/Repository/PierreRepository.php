<?php

namespace App\Repository;

use App\Entity\Pierre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Pierre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pierre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pierre[]    findAll()
 * @method Pierre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PierreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pierre::class);
    }

    // /**
    //  * @return Pierre[] Returns an array of Pierre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pierre
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
