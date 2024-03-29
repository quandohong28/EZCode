<?php

namespace App\Models;

use App\Models\Model;

class User extends Model
{
    public string $table = 'users';

    public array $fields = [
        'id',
        'name',
        'email',
        'password',
        'avatar',
        'role',
        'status',
        'created_at',
        'updated_at',
    ];

    public function __construct()
    {
        parent::__construct();
    }
}
