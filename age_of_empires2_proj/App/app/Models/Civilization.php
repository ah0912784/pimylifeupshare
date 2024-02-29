<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Civilization extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'civilizations';

    //mass-assignable attributes
    protected $fillable = [
        'id',
        'name',
        'release_id',
        'architecture',
        'continent',
        'focus',
        'unique_units',
        'unique_technologies',
        'unique_buildings',
    ];
}
