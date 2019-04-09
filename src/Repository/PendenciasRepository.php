<?php

namespace App\Repository;

use App\Entity\Pendencias;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pendencias|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pendencias|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pendencias[]    findAll()
 * @method Pendencias[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PendenciasRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pendencias::class);
    }

    // /**
    //  * @return Pendencias[] Returns an array of Pendencias objects
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
    public function findOneBySomeField($value): ?Pendencias
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
