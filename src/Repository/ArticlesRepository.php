<?php

namespace App\Repository;

use App\Entity\Articles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Articles>
 */
class ArticlesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Articles::class);
    }


    //function qui affiche les numero des articles par pressing
    public function getNextArticleNumber($pressing): int
    {
        // Obtenir le numéro maximum actuel pour ce pressing
        $qb = $this->createQueryBuilder('a')
            ->select('MAX(a.numero)')
            ->where('a.pressing = :pressing')
            ->setParameter('pressing', $pressing)
            ->getQuery();

        $maxNumber = $qb->getSingleScalarResult();
        return $maxNumber ? (int)$maxNumber + 1 : 1; // Retourne le prochain numéro ou 1 s'il n'y a pas de clients
    }

    // Récupérer les articles en fonction du pressing
    public function findByPressing($pressing)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.pressing = :pressing')
            ->setParameter('pressing', $pressing)
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return Articles[] Returns an array of Articles objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Articles
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
