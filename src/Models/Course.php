<?php

namespace App\Models;

use App\Models\Model;

class Course extends Model
{
    public string $table = 'courses';

    public array $fields = [
        'course_name',
        'description',
        'type',
        'price',
        'status',
        'thumnail',
        'register',
        'rate',
        'category_id',
        'created_at',
        'updated_at',
    ];

    public function __construct()
    {
        parent::__construct();
    }
}
