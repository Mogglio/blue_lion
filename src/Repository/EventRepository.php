<?php

namespace App\Repository;

use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class EventRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry) {
        parent::__construct($registry, Event::class);
    }

    /**
     * Récupère les évènements commençant entre 2 dates
     */
    public function getEventsBetween($dayStart, $dayEnd): array {

        $qb = $this->createQueryBuilder('e')
            ->andWhere('e.date > :dayStart')
            ->andWhere('e.date < :dayEnd')
            ->setParameter('dayStart', $dayStart)
            ->setParameter('dayEnd', $dayEnd)
            ->orderBy('e.start', 'ASC')
            ->getQuery();

        return $qb->execute();

    }
}