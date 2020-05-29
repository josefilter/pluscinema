<?php

namespace App\Repository;

use App\Entity\Buscador;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Buscador|null find($id, $lockMode = null, $lockVersion = null)
 * @method Buscador|null findOneBy(array $criteria, array $orderBy = null)
 * @method Buscador[]    findAll()
 * @method Buscador[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BuscadorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Buscador::class);
    }

    // /**
    //  * @return Buscador[] Returns an array of Buscador objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Buscador
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
