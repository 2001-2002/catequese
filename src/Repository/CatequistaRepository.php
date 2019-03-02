<?php

namespace App\Repository;

use App\Entity\Catequista;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Catequista|null find($id, $lockMode = null, $lockVersion = null)
 * @method Catequista|null findOneBy(array $criteria, array $orderBy = null)
 * @method Catequista[]    findAll()
 * @method Catequista[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CatequistaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Catequista::class);
    }

    // /**
    //  * @return Catequista[] Returns an array of Catequista objects
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
    public function findOneBySomeField($value): ?Catequista
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
