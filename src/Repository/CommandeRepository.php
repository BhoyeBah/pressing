<?php

namespace App\Repository;

use App\Entity\Commande;
use App\Entity\Pressing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Commande>
 */
class CommandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Commande::class);
    }

    //    public function generateCommandeNumber()
    //    {
    //        // Récupérer la dernière commande
    //
    //        $lastNumberOrder = $this->findOneBy([], ['id' => 'DESC']);
    //
    //        // Déterminer le prochain numéro
    //        $lastNumber = $lastNumberOrder ? intval(substr($lastNumberOrder->getNumero(), 1)) : 0;
    //        $nextNumber = $lastNumber + 1;
    //
    //        // Formater le numéro avec des zéros en tête
    //        return sprintf('#%04d', $nextNumber);
    //    }

    // src/Repository/CommandeRepository.php

    public function generateCommandeNumber(Pressing $pressing): string
    {
        // Trouver la dernière commande pour le pressing donné
        $qb = $this->createQueryBuilder('c')
            ->select('MAX(c.numero)')
            ->where('c.pressing = :pressing')
            ->setParameter('pressing', $pressing)
            ->getQuery();

        $lastNumber = $qb->getSingleScalarResult();
        $lastNumber = $lastNumber ? intval(substr($lastNumber, 1)) : 0; // Enlever le préfixe '#' et convertir en entier
        $nextNumber = $lastNumber + 1;

        // Formater le numéro avec des zéros en tête
        return sprintf('#%04d', $nextNumber);
    }

    public function findAllOrderedByCreatedAtDesc()
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.dateCommande', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function getNextCommandeNumber($pressing): int
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

    public function countOrder(Pressing $pressing)
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.pressing = :pressing')
            ->setParameter('pressing', $pressing)
            ->getQuery()
            ->getSingleScalarResult()
        ;
    }

    public function countFacturePaye(Pressing $pressing)
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.status = :status')
            ->andWhere('c.pressing = :pressing')
            ->setParameter('status', 'payé')
            ->setParameter('pressing', $pressing)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countFactureNonPaye(Pressing $pressing)
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.status = :status')
            ->andWhere('c.pressing = :pressing')
            ->setParameter('status', 'non payé')
            ->setParameter('pressing', $pressing)
            ->getQuery()
            ->getSingleScalarResult();
    }


    public function ResteApayer(Pressing $pressing)
    {
        $result = $this->createQueryBuilder('c')
            ->select('SUM(c.resteApayer)')
            ->where('c.pressing = :pressing')
            ->setParameter('pressing', $pressing)
            ->getQuery()
            ->getSingleScalarResult();

        return $result ? (int) $result : 0;
    }

    public function orderSearch(string $query,$pressing)
    {
        return $this->createQueryBuilder('c')
            ->where('c.numero LIKE :query AND c.pressing = :pressing')
            ->setParameter('query', '%' . $query . '%')
            ->setParameter('pressing', $pressing)
            ->getQuery()
            ->getResult();
    }
    //    /**
    //     * @return Commande[] Returns an array of Commande objects
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

    //    public function findOneBySomeField($value): ?Commande
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
