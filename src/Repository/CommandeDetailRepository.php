<?php

namespace App\Repository;

use App\Entity\CommandeDetail;
use App\Entity\Pressing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CommandeDetail>
 */
class CommandeDetailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommandeDetail::class);
    }
    public function getNextDetailCommandeNumber(Pressing $pressing): int
    {
        $qb = $this->createQueryBuilder('d')
            ->select('MAX(d.numero)')
            ->join('d.commande', 'c')  // Join with the Commande entity
            ->where('c.pressing = :pressing')
            ->setParameter('pressing', $pressing)
            ->getQuery();

        $maxNumber = $qb->getSingleScalarResult();
        return $maxNumber ? (int)$maxNumber + 1 : 1;
    }
    
//    /**
//     * @return CommandeDetail[] Returns an array of CommandeDetail objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CommandeDetail
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
