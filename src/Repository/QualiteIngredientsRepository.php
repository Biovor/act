<?php

namespace App\Repository;

use App\Entity\QualiteIngredients;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method QualiteIngredients|null find($id, $lockMode = null, $lockVersion = null)
 * @method QualiteIngredients|null findOneBy(array $criteria, array $orderBy = null)
 * @method QualiteIngredients[]    findAll()
 * @method QualiteIngredients[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QualiteIngredientsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, QualiteIngredients::class);
    }

    // /**
    //  * @return QualiteIngredients[] Returns an array of QualiteIngredients objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QualiteIngredients
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
