<?php

namespace App\Config;

class DatabaseConfig {
    protected $host;
    protected $username;
    protected $password;
    protected $dbname;
    protected function __construct() {
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'assignment1';
    }
}