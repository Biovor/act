<?php

namespace App\Repository;

use App\Entity\CategorieIngredients;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CategorieIngredients|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategorieIngredients|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategorieIngredients[]    findAll()
 * @method CategorieIngredients[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieIngredientsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CategorieIngredients::class);
    }

    // /**
    //  * @return CategorieIngredients[] Returns an array of CategorieIngredients objects
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
    public function findOneBySomeField($value): ?CategorieIngredients
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
