<?php

namespace App\Models;

use App\Models\Model;

require_once 'vendor/autoload.php';

class User extends Model
{
    public function __construct(string $table)
    {
        parent::__construct($table);
    }
}
