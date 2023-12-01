<?php

namespace App\Repository;

use App\Entity\ColorVehicle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ColorVehicle>
 *
 * @method ColorVehicle|null find($id, $lockMode = null, $lockVersion = null)
 * @method ColorVehicle|null findOneBy(array $criteria, array $orderBy = null)
 * @method ColorVehicle[]    findAll()
 * @method ColorVehicle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ColorVehicleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ColorVehicle::class);
    }

//    /**
//     * @return ColorVehicle[] Returns an array of ColorVehicle objects
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

//    public function findOneBySomeField($value): ?ColorVehicle
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
