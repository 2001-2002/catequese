<?php

namespace App\Repository;

use App\Entity\Turma;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Turma|null find($id, $lockMode = null, $lockVersion = null)
 * @method Turma|null findOneBy(array $criteria, array $orderBy = null)
 * @method Turma[]    findAll()
 * @method Turma[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TurmaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Turma::class);
    }

    // /**
    //  * @return Turma[] Returns an array of Turma objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Turma
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
