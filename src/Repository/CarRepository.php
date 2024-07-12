<?php

namespace App\Repository;

use App\Repository\AbstractRepository;

class CarRepository extends AbstractRepository
{
    public function getAllCars(): array | bool
    {
        $stmt = $this->pdo->prepare('SELECT * FROM car');
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
