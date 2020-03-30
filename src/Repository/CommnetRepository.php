<?php

namespace App\Repository;

use App\Entity\Commnet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Commnet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Commnet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Commnet[]    findAll()
 * @method Commnet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommnetRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Commnet::class);
    }

//    /**
//     * @return Commnet[] Returns an array of Commnet objects
//     */
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
    public function findOneBySomeField($value): ?Commnet
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
