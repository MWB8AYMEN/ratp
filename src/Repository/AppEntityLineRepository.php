<?php

namespace App\Repository;

use App\Entity\AppEntityLine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AppEntityLine|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppEntityLine|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppEntityLine[]    findAll()
 * @method AppEntityLine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppEntityLineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppEntityLine::class);
    }

    // /**
    //  * @return AppEntityLine[] Returns an array of AppEntityLine objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AppEntityLine
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
