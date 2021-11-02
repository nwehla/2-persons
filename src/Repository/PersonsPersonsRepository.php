<?php

namespace App\Repository;

use App\Entity\PersonsPersons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PersonsPersons|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonsPersons|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonsPersons[]    findAll()
 * @method PersonsPersons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonsPersonsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PersonsPersons::class);
    }

    // /**
    //  * @return PersonsPersons[] Returns an array of PersonsPersons objects
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
    public function findOneBySomeField($value): ?PersonsPersons
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
