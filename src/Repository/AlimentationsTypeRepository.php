<?php

namespace App\Repository;

use App\Entity\AlimentationsType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AlimentationsType|null find($id, $lockMode = null, $lockVersion = null)
 * @method AlimentationsType|null findOneBy(array $criteria, array $orderBy = null)
 * @method AlimentationsType[]    findAll()
 * @method AlimentationsType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlimentationsTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AlimentationsType::class);
    }

    // /**
    //  * @return AlimentationsType[] Returns an array of AlimentationsType objects
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
    public function findOneBySomeField($value): ?AlimentationsType
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
