<?php

namespace App\Config;

use PDO;
use PDOException;


class DatabaseConnection
{

    protected $HOST = "localhost";
    protected $DB_NAME = "assignment1";
    protected $USER_NAME = "root";
    protected $PASSWORD = "";
    protected $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->HOST;dbname=$this->DB_NAME;", $this->USER_NAME, $this->PASSWORD);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function connect()
    {
        return $this->connection;
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
