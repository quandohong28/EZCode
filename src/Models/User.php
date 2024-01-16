<?php

namespace App\Models;

use App\Models\Model;

class User extends Model
{
    public string $table = 'users';

    public array $fields = [
        'name',
        'email',
        'password',
    ];

    public function __construct()
    {
        parent::__construct();
    }
}
