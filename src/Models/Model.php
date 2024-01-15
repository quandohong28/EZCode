<?php

namespace App\Models;

use App\Config\DatabaseConnection;

require_once 'vendor/autoload.php';

class Model
{
    public DatabaseConnection $connection;
    public string $table;

    public function __construct(string $table)
    {
        $this->connection = new DatabaseConnection();
        $this->table = $table;
    }

    public function all()
    {
        $sql = "SELECT * FROM $this->table";
        return $this->connection->query($sql);
    }
}
