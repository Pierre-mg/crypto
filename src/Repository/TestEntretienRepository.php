<?php

namespace App\Repository;

use App\Entity\TestEntretien;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TestEntretien|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestEntretien|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestEntretien[]    findAll()
 * @method TestEntretien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestEntretienRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestEntretien::class);
    }


    public function findByVolumeDesc()
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.volume', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }
    

    /*
    public function findOneBySomeField($value): ?TestEntretien
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
