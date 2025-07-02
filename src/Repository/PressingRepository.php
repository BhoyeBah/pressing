<?php

namespace App\Repository;

use App\Entity\Pressing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pressing>
 */
class PressingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pressing::class);
    }
    //function qui affiche les numero des articles par pressing
    public function getNextPressingNumber(): int
    {
        // Obtenir le numéro maximum actuel
        $qb = $this->createQueryBuilder('p')
            ->select('MAX(p.numero)')
            ->getQuery();

        $maxNumber = $qb->getSingleScalarResult();
        return $maxNumber ? (int)$maxNumber + 1 : 1; // Retourne le prochain numéro ou 1 s'il n'y a pas de pressings
    }
    // Récupérer les clients en fonction du pressing
    public function findByPressing($pressing)
    {
        return $this->createQueryBuilder('p')
            ->where('p.pressing = :pressing')
            ->setParameter('pressing', $pressing)
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return Pressing[] Returns an array of Pressing objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Pressing
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
