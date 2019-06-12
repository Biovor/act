<?php

namespace App\Repository;

use App\Entity\SousCategorieIngredients;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SousCategorieIngredients|null find($id, $lockMode = null, $lockVersion = null)
 * @method SousCategorieIngredients|null findOneBy(array $criteria, array $orderBy = null)
 * @method SousCategorieIngredients[]    findAll()
 * @method SousCategorieIngredients[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SousCategorieIngredientsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SousCategorieIngredients::class);
    }

    // /**
    //  * @return SousCategorieIngredients[] Returns an array of SousCategorieIngredients objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SousCategorieIngredients
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
