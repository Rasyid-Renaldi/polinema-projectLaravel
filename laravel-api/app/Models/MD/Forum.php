<?php

namespace App\Models\MD;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = [
        'topics',
        'count_posts',
        'count_students',
    ];
}
