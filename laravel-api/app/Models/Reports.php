<?php
// Buat ReportsController -- API

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    protected $fillable = ['name', 'timestamps', 'report', 'desc', 'image', 'reply'];

    protected $casts = [
        'created_at' => 'date:d-m-Y',
        'updated_at' => 'datetime:d-m-Y'
    ];
}
