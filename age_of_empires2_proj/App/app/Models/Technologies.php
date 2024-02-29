<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technologies extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'name',
        'release_id',
        'age',
        'researched_at',
        'cost',
        'research_time',
        'effect',
    ];
}
