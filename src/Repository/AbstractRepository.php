<?php

namespace App\Repository;

use App\Core\Database;

abstract class AbstractRepository
{
    protected \PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnexion();
        
    }

    // Constructeur
    // il affectera à pdo le getter qui retourne un objet PDO
}
