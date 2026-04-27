<?php

namespace App\Repository;

use App\Entity\UbicacionAlmacen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class UbicacionAlmacenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UbicacionAlmacen::class);
    }
}
