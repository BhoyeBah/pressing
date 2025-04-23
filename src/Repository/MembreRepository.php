<?php

namespace App\Repository;

use App\Entity\Membre;
use App\Entity\Pressing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Membre>
 */
class MembreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Membre::class);
    }

    // src/Repository/MembreRepository.php

    public function findByPressing(Pressing $pressing): array
    {
        return $this->createQueryBuilder('m')
            ->where('m.pressing = :pressing')
            ->setParameter('pressing', $pressing)
            ->getQuery()
            ->getResult();
    }
    public function getNextMembreNumber($pressing): int
    {
        // Obtenir le numéro maximum actuel pour ce pressing
        $qb = $this->createQueryBuilder('m')
            ->select('MAX(m.numero)')
            ->where('m.pressing = :pressing')
            ->setParameter('pressing', $pressing)
            ->getQuery();

        $maxNumber = $qb->getSingleScalarResult();
        return $maxNumber ? (int)$maxNumber + 1 : 1; // Retourne le prochain numéro ou 1 s'il n'y a pas de clients
    }

//    /**
//     * @return Membre[] Returns an array of Membre objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Membre
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
