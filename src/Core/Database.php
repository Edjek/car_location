<?php

namespace App\Core;

class Database
{
    // des proprietes static :  $host = , $dbname , $userName, $password, $connexion
    private static string $host = 'localhost';
    private static string $dbName = 'car_location';
    private static string $userName = 'root';
    private static string $password = '';
    private static \PDO $connexion;

    public static function initConnection()
    {
        echo  'mysql:host=' . self::$host . ';dbname=' . self::$dbName . ', ' . self::$userName . ', ' . self::$password. '';

        
        try {
            self::$connexion = new \PDO('mysql:host=' . self::$host . ';dbname=' . self::$dbName . ', ' . self::$userName . ', ' . self::$password);



        } catch (\PDOException $e) {
            echo 'Erreur' . $e->getMessage();
            exit;
        }
    }

    /**
     * Get the value of connexion
     */
    public static function getConnexion()
    {
        return self::$connexion;
    }
}
