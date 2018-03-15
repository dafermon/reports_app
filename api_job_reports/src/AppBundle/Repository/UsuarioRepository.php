<?php

namespace AppBundle\Repository;
//NOTA. Recuerda pone el use de todo lo necesario
// src/AppBundle/Repository/UsuarioRepository.php
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use AppBundle\Entity\Usuario;

//Falta saber la diferencia entre ServiceEntityRepository y EntityRepository
class UsuarioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Usuario::class);
    }

    /*
    * Query usando DQL, tambien se puede usar SQL
    * Ver documentacion completa: 
    * https://symfony.com/doc/current/doctrine.html 
    */
    public function findAllTest($param): array
    {
        $em = $this->getEntityManager();
    
        $query = $em->createQuery(
            'SELECT u
            FROM AppBundle\Entity\Usuario u');
    
        // returns an array of Product objects
        return $query->execute();
    }


    /**
     * @param $price
     * @return Usuario[]
     */
    public function findAllGreaterThanPrice($price): array
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('p')
            ->andWhere('p.price > :price')
            ->setParameter('price', $price)
            ->orderBy('p.price', 'ASC')
            ->getQuery();

        return $qb->execute();

        // to get just one result:
        // $product = $qb->setMaxResults(1)->getOneOrNullResult();
    }
}