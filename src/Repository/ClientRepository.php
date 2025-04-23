<?php

namespace App\Repository;

use App\Entity\Client;
use App\Entity\Pressing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Client>
 */
class ClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Client::class);
    }
    // Récupérer les clients en fonction du pressing
    public function findByPressing($pressing)
    {
        return $this->createQueryBuilder('c')
            ->where('c.pressing = :pressing')
            ->setParameter('pressing', $pressing)
            ->getQuery()
            ->getResult();
    }

    public function countClient(Pressing $pressing)
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.pressing = :pressing')
            ->setParameter('pressing', $pressing)
            ->getQuery()
            ->getSingleScalarResult()
        ;
    }

    public function getNextClientNumber($pressing): int
    {
        // Obtenir le numéro maximum actuel pour ce pressing
        $qb = $this->createQueryBuilder('c')
            ->select('MAX(c.numero)')
            ->where('c.pressing = :pressing')
            ->setParameter('pressing', $pressing)
            ->getQuery();

        $maxNumber = $qb->getSingleScalarResult();
        return $maxNumber ? (int)$maxNumber + 1 : 1; // Retourne le prochain numéro ou 1 s'il n'y a pas de clients
    }

    public function clientChearch(string $query,$pressing)
    {
        return $this->createQueryBuilder('c')
            ->where('(c.nom LIKE :query OR c.prenom LIKE :query) AND c.pressing = :pressing')
            ->setParameter('query', '%' . $query . '%')
            ->setParameter('pressing', $pressing)
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return Client[] Returns an array of Client objects
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

    //    public function findOneBySomeField($value): ?Client
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
