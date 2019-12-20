<?php

namespace App\Repository;

use App\Entity\Subscription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Subscription|null find($id, $lockMode = null, $lockVersion = null)
 * @method Subscription|null findOneBy(array $criteria, array $orderBy = null)
 * @method Subscription[]    findAll()
 * @method Subscription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubscriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Subscription::class);
    }

     /**
      * @return Subscription[] Returns an array of Subscription objects
      */
    
    public function findByParameters($value,$col)
    {
        if($col == "min_price"){
        return $this->createQueryBuilder('s')
            ->andWhere("s.price >= :val")
            ->setParameter('val', $value)
            ->orderBy('s.price', 'ASC')
            ->getQuery()
            ->getResult()
        ;
        }
        elseif($col == "max_price"){
            return $this->createQueryBuilder('s')
                ->andWhere("s.price <= :val")
                ->setParameter('val', $value)
                ->orderBy('s.price', 'ASC')
                ->getQuery()
                ->getResult()
            ;
            }
            elseif(stripos($col,"date") !== false ){
                return $this->createQueryBuilder('s')
                ->andWhere("s.".$col." like :val")
                ->setParameter('val', "%".$value."%")
                ->orderBy('s.id', 'ASC')
                ->getQuery()
                ->getResult()
            ;
            }
            else{
                return $this->createQueryBuilder('s')
                    ->andWhere("s.".$col." = :val")
                    ->setParameter('val', $value)
                    ->orderBy('s.id', 'ASC')
                    ->getQuery()
                    ->getResult()
                ;
        }
    }
    

    /*
    public function findOneBySomeField($value): ?Subscription
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
