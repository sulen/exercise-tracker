<?php
namespace Core;
use PDO;
use PDOException;

class Database
{
    public $connection;
    public function __construct()
    {
        try {
            $this->connection = new PDO(
                'mysql:host=127.0.0.1;dbname=exercise',
                'root',
                'pass',
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false]
            );
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function Connect()
    {
        return new static();
    }
}