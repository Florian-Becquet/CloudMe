<?php

namespace App\Repository;

use App\Entity\User;
use App\Entity\Subscription;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

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
      * @parameters: the value we are looking for and the column to look for it in the table
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
    
    /**
     * fonction qui va calculer la somme d'une colonne pour un user 
     *
     * @param [string] $col
     * @param [int] $userId
     */
    public function getSumSubByUser($col, $userId){
        return $this->createQueryBuilder('s')
        ->andWhere('s.id_user = :user')
        ->setParameter('user', $userId)
        ->select("SUM(s.".$col.") as result")
        ->getQuery()
        ->getSingleScalarResult();
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
