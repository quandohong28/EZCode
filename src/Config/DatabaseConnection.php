<?php

namespace App\Config;

use PDO;
use PDOException;

require_once 'vendor/autoload.php';

class DatabaseConnection extends DatabaseConfig
{
    private $connection;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname;", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function query(string $sql, bool $queryAll = true)
    {
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();

            if ($queryAll) {
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }
}
