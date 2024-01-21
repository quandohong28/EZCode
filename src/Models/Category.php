<?php

namespace App\Models;

class Category extends Model
{
    public string $table = 'categories';

    public array $fields = [
        'id',
        'category_name',
        'thumnail',
        'type',
    ];

    public function __construct()
    {
        parent::__construct();
    }
}
