<?php

namespace App\Repository;

use App\Entity\Employe;
use App\Entity\Pressing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Employe>
 */
class EmployeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Employe::class);
    }

// src/Repository/EmployeRepository.php
    public function findByPressing(Pressing $pressing): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.pressing = :pressing')
            ->setParameter('pressing', $pressing)
            ->getQuery()
            ->getResult();
    }

    public function getNextEmployeNumber($pressing): int
    {
        // Obtenir le numéro maximum actuel pour ce pressing
        $qb = $this->createQueryBuilder('e')
            ->select('MAX(e.numero)')
            ->where('e.pressing = :pressing')
            ->setParameter('pressing', $pressing)
            ->getQuery();

        $maxNumber = $qb->getSingleScalarResult();
        return $maxNumber ? (int)$maxNumber + 1 : 1; // Retourne le prochain numéro ou 1 s'il n'y a pas de clients
    }
    //    /**
    //     * @return Employe[] Returns an array of Employe objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('e.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Employe
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
