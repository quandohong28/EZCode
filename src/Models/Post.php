<?php

namespace App\Models;

use App\Models\Model;

class Post extends Model
{
    public string $table = 'posts';

    public array $fields = [
        'title',
        'content',
        'thumnail',
        'status',
        'published_at',
        'view',
        'like',
        'dislike',
        'comment',
        'share',
        'category_id',
        'user_id',
        'created_at',
        'updated_at',
    ];

    public function __construct()
    {
        parent::__construct();
    }
}
